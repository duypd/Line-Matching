<?php

namespace App\Repositories;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;


class SearchEventsRepository extends AbstractRepository {

    protected $models;

    public function __construct(Event $events) {
        $this->models = $events;
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

    //User::where('name', 'LIKE', '%'.$search.'%')->get();
    

   

}
