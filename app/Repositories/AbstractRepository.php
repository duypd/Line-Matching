<?php

namespace App\Repositories;

abstract class AbstractRepository
{

    /**
     * The model
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * The relations to eager load on query execution.
     *
     * @var array
     */
    protected $relations = [];

    /**
     * The query where clauses.
     *
     * @var array
     */
    protected $where = [];

    /**
     * The query whereIn clauses.
     *
     * @var array
     */
    protected $whereIn = [];

    /**
     * The query whereNotIn clauses.
     *
     * @var array
     */
    protected $whereNotIn = [];

    /**
     * The query whereNull clauses.
     *
     * @var array
     */
    protected $whereNull = [];

    /**
     * The query orWhere clauses.
     *
     * @var array
     */
    protected $orWhere = [];

    /**
     * The column to order results by.
     *
     * @var array
     */
    protected $orderBy = [];

    /**
     * Add a basic where clause to the query. E.x: ('name', '=', $value) or ('name', $value)
     *
     * @param string $attribute
     * @param string $operator
     * @param mixed  $value
     * @param string $boolean
     *
     * @return $this
     */
    protected function where($attribute, $operator = null, $value = null, $boolean = 'and')
    {
        $this->where[] = [$attribute, $operator, $value, $boolean];

        return $this;
    }

    /**
     * Add a `where is null` clause to the query.
     *
     * @param $attribute
     * @return $this
     */
    protected function whereNull($attribute)
    {
        $this->whereNull = [$attribute];

        return $this;
    }

    /**
     *  Add a 'where in' clause to the query.
     *
     * @param $attribute
     * @param null $value
     * @param string $boolean
     * @param bool $not
     *
     * @return $this
     */
    protected function whereIn($attribute, $value, $boolean = 'and', $not = false)
    {
        $this->whereIn[] = [$attribute, $value, $boolean ?: 'and', (bool) $not];

        return $this;
    }

    /**
     * Add a 'where not in' clause to the query.
     *
     * @param string $attribute
     * @param mixed  $values
     * @param string $boolean
     *
     * @return $this
     */
    protected function whereNotIn($attribute, $values, $boolean = 'and')
    {
        $this->whereNotIn[] = [$attribute, $values, $boolean];

        return $this;
    }

    /**
     * Add an 'or where' clause to the query. E.x: ('name', '=', $value) or ('name', $value)
     *
     * @param  string  $column
     * @param  string  $operator
     * @param  mixed   $value
     * @return $this
     */
    protected function orWhere($column, $operator = null, $value = null)
    {
        return $this->where($column, $operator, $value, 'or');
    }

    /**
     * Add an order by clause to the query.
     *
     * @param $attribute
     * @param string $direction
     * @return $this
     */
    protected function orderBy($attribute, $direction = 'asc')
    {
        $this->orderBy = [$attribute, $direction];

        return $this;
    }

    /**
     * Set relations. E.x ['relation'] or ['relation' => Closure function]
     *
     * @param array $relations
     * @return mixed
     */
    protected function with($relations = [])
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * Prepare query for execute.
     *
     * @return object
     */
    protected function prepareQuery()
    {
        // Set the relationships that should be eager loaded
        if (!empty($this->relations)) {
            $this->model = $this->model->with($this->relations);
        }

        // Add a basic where clause to the query
        foreach ($this->where as $where) {
            list($attribute, $operator, $value, $boolean) = array_pad($where, 4, null);
            $boolean = $this->setBooleanQuery($boolean);
            $this->model = $this->model->where($attribute, $operator, $value, $boolean);
        }

        // Add a "where in" clause to the query
        foreach ($this->whereIn as $whereIn) {
            list($attribute, $values, $boolean, $not) = array_pad($whereIn, 4, null);
            $boolean = $this->setBooleanQuery($boolean);
            $this->model = $this->model->whereIn($attribute, $values, $boolean, $not);
        }

        // Add a "where not in" clause to the query
        foreach ($this->whereNotIn as $whereNotIn) {
            list($attribute, $values, $boolean) = array_pad($whereNotIn, 3, null);
            $boolean = $this->setBooleanQuery($boolean);
            $this->model = $this->model->whereNotIn($attribute, $values, $boolean);
        }

        // Add a "where is null" clause to the query
        foreach ($this->whereNull as $attribute) {
            $this->model = $this->model->whereNull($attribute);
        }

        // Add a "or where" clause to the query
        foreach ($this->orWhere as $orWhere) {
            list($attribute, $operator, $value, $boolean) = array_pad($orWhere, 4, null);
            $this->model = $this->model->orWhere($attribute, $operator, $value);
        }

        // Add an "order by" clause to the query.
        if (! empty($this->orderBy)) {
            list($attribute, $direction) = $this->orderBy;
            $this->model = $this->model->orderBy($attribute, $direction);
        }

        return $this->model;
    }

    /**
     * Set boolean operator.
     * 
     * @param $boolean
     * @return string
     */
    private function setBooleanQuery($boolean)
    {
        if (is_null($boolean)) {
            $boolean = 'and';
        }

        return $boolean;
    }

    /**
     * Get all a record.
     *
     * @param array $columns
     * @return mixed
     */
    public function getAll($columns = ['*'])
    {
        return $this->prepareQuery()->get($columns);
    }

    /**
     * Get a record. E.x: ('id', $id)
     *
     * @param string $attribute
     * @param mixed $value
     * @param array $attributes
     * @return mixed
     */
    public function getBy($attribute , $value, $attributes = ['*'])
    {
        if ($attribute == 'id') {
            return $this->prepareQuery()->findOrFail($value, $attributes);
        }

        return $this->where($attribute, '=', $value)->prepareQuery()->first($attributes);
    }

    /**
     * Find all record match where conditions.
     *
     * @param array $where E.x: ['name', $value] or ['name', '=', $value]
     * @param array $attributes
     * @return mixed
     */
    public function findWhere(array $where, $attributes = ['*'])
    {
        list($attribute, $operator, $value, $boolean) = array_pad($where, 4, null);

        $this->where($attribute, $operator, $value, $boolean);

        return $this->prepareQuery()->get($attributes);
    }

    /**
     * Find all record match whereIn conditions.
     *
     * @param $attribute
     * @param array $values
     * @param array $attributes
     * @return mixed
     */
    public function findWhereIn($attribute, array $values, $attributes = ['*'])
    {
        $this->whereIn($attribute, $values);

        return $this->prepareQuery()->get($attributes);
    }

    /**
     * Find all record match whereNotIn conditions.
     *
     * @param $attribute
     * @param array $values
     * @param array $attributes
     * @return mixed
     */
    public function findWhereNotIn($attribute, array $values, $attributes = ['*'])
    {
        $this->whereNotIn($attribute, $values);

        return $this->prepareQuery()->get($attributes);
    }

    /**
     * Delete a record.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        return $this->getBy('id', $id)->delete();
    }

    /**
     * Delete a record by attribute.
     *
     * @param $attribute
     * @param $value
     * @return mixed
     */
    public function deleteBy($attribute, $value)
    {
        return $this->where($attribute, $value)->prepareQuery()->delete();
    }

    /**
     * Delete multi record by ids.
     *
     * @param array $ids
     * @return mixed
     */
    public function deleteMultiRecordByIds(array $ids)
    {
        return $this->model->whereIn('id', $ids)->delete();
    }

    /**
     * Get lists.
     *
     * @param string $key
     * @param string $value
     *
     * @return mixed
     */
    public function lists($key, $value)
    {
        return $this->prepareQuery()->lists($key, $value);
    }

    /**
     * Get paginate
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function paginate($attributes = ['*'])
    {
        return $this->prepareQuery()->paginate(config('paginate.limit'), $attributes);
    }
}
