<?php
namespace App\Repositories;

use App\Models\Event;
use App\Models\Group;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MyPageRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(Event $event, Group $group)
    {
        $this->model = $event;
        $this->model = $group;
    }
     /**
     * Get list group.
     * @return array
     */
     function index($page = 0, $attributes = ['*']){
        $result = $this->with('event')->paginate($attributes);
        return $result->toArray();
    }

    /**
     * show Category.
     * @param $id
     * @return object $catagoty
     */
    public function show($id)
    {
        $catagoty = $this->where('status',1)->getBy('id', $id);
        return $catagoty;
    }
}
