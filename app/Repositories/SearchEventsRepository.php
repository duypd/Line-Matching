<?php

namespace App\Repositories;
use App\Models\Event;
use App\Models\EventGroup;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Model;
use DB;


class SearchEventsRepository extends AbstractRepository {

    protected $models;
    protected $groups;

    public function __construct(Event $events, EventGroup $event_groups) {
        $this->models = $events;
        $this->groups = $event_groups;
    }

    public function searchEvents($params,$page = 0, $attributes = ['*']) {
        $builder = $this->models;
        if (isset($params['name'])) {
            $builder = $builder->where('name','LIKE', '%'.$params['name'].'%');
        }
        if (isset($params['cat_id'])) {
            $builder = $builder->where('cat_id', $params['cat_id']);
        }
        if (isset($params['user_max'])) {
            $builder = $builder->where('user_max', $params['user_max']);
        }
        
        if (isset($params['address'])) {
            $builder = $builder->where('address','LIKE', '%'.$params['address'].'%');
        }
        
         $events = $builder->paginate(5);
         return $events->toArray();
    }


     public function searchGroups($params, $page =0, $attributes=['*']) {
        $groups = $this->groups;
        if (isset($params['name'])) {
            $groups = $groups->where('name','LIKE','%'.$params['name'].'%')->with('event');
        }
       
        $groups_f = $groups->paginate(5);
        return $groups_f->toArray();
       
    }
    public function show($id)
    {   $builder = $this->models;
        $event   = $builder->where('id', $id)->first();
        return $event;
    }

}
