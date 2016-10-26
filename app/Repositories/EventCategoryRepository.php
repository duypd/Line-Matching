<?php
namespace App\Repositories;
use Cache;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventCategoryRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(EventCategory $eventCategory)
    {
        $this->model = $eventCategory;
    }
     /**
     * Get list event categories.
     *
     *
     * @return array
     */
    public function index($page = 0, $attributes = ['*'])
    {
       $result = $this->paginate($attributes); 
       return  $result->toArray();
    }

    /**
     * create event categories.
     *
     *
     * @return array
     */
    public function create(array $param)
    {
       \DB::transaction(function($q) use(&$eCategory, $param)
        {
            $eCategory = new EventCategory();   
            $eCategory->name = $param['name'];
            $eCategory->status = 1;
            $eCategory->updated_at = date('Y-m-d H:i:s');
            $eCategory->save();
        }); 
       return $eCategory;
    }
    /**
     * update event categories.
     *
     *
     * @return array
     */
    public function update($id, array $params)
    {
        $UCategory = $this->getBy('id', $id);
        $UCategory->name = !empty($params['name']) ? $params['name'] : $UCategory->name;
        $UCategory->status = !empty($params['status']) ? $params['status']: $UCategory->status;
        $UCategory->save();
        return $UCategory;
    }
        /**
     * Delete a record event Categories.
     *
     * @param int $id
     * @param $eventId
     * @return mixed
     */
    public function destroy($id, $eventId)
        {
            $DEcategories = $this->where('event_id', $eventId)
                ->getBy('id', $id);
            return $DEcategories->delete();
        }
    /**
     * show Category.
     *
     * @param $id
     * @return object $catagoty
     */
    public function show($id)
    {
        $catagoty = $this->where('status',1)->getBy('id', $id);
        return $catagoty;
    }
}
