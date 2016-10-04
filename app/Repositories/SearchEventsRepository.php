<?php

namespace App\Repositories;
use App\Models\Event;
use App\Models\EventGroup;
use Illuminate\Database\Eloquent\Model;


class SearchEventsRepository extends AbstractRepository {

    protected $models;
    protected $groups;

    public function __construct(Event $events, EventGroup $event_groups) {
        $this->models = $events;
        $this->groups = $event_groups;
    }

    public function searchEvents($params) {
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
        $count = $builder->count();
        $page = isset($params['page']) ? $params['page'] : 1;
        $perPage = isset($params['perPage']) ? $params['perPage'] : 10;
        $events = $builder->forPage($page, $perPage)->get();
        $meta = [
            'page' => $page,
            'perPage' => $perPage,
            'total' => ceil($count / $perPage)
        ];
        return $result = [
            'meta' => $meta,
            'events' => $events
        ];
    }


     public function searchEventGroups($params) {
        $event_groups = $this->groups;
        if (isset($params['name'])) {
            $event_groups = $event_groups->where('name',$params['name'])->with('event');
        }
        $count = $event_groups->count();
        $page = isset($params['page']) ? $params['page'] : 1;
        $perPage = isset($params['perPage']) ? $params['perPage'] : 10;
        $event_groups_f = $event_groups->forPage($page, $perPage)->get();
        $meta = [
            'page' => $page,
            'perPage' => $perPage,
            'total' => ceil($count / $perPage)
        ];
        return $result = [
            'meta' => $meta,
            'event_groups_f' => $event_groups_f
        ];
    }

}
