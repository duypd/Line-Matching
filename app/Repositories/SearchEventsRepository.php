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
       
    // public function ScopeDistance($query,$lat,$long,$distance)
    //     {
    //      $raw = \DB::raw('ROUND ( ( 6371 * acos( cos( radians('.$lat.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$long.') ) + sin( radians('.$lat.') ) * sin( radians( latitude ) ) ) ) ) AS distance');
    //      return $query->select('*')->addSelect($raw)->orderBy( 'distance', 'ASC' )->groupBy('distance')->where('distance', '<=', $distance);
    //     }

    public function searchEvents($params, $page, $perPage) {
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
        
        // if (isset($params['lat']) && ($params['long']) && ($params['distance'])) {

        //             $query = $this->models;
        //             $builder = $this->ScopeDistance($query,$params['lat'],$params['long'],$params['distance']);
                                   
        //         }

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


     public function searchGroups($params) {
        $groups = $this->groups;
        if (isset($params['name'])) {
            $groups = $groups->where('name','LIKE','%'.$params['name'].'%')->with('event');
        }
        $count = $groups->count();
        $page = isset($params['page']) ? $params['page'] : 1;
        $perPage = isset($params['perPage']) ? $params['perPage'] : 10;
        $groups_f = $groups->forPage($page, $perPage)->get();
        $meta = [
            'page' => $page,
            'perPage' => $perPage,
            'total' => ceil($count / $perPage)
        ];
        return $result = [
            'meta' => $meta,
            'event_groups_f' => $groups_f
        ];
    }

    /*public function getEvent($id)
    {
        $event = $this->models->Where('name',$params['name'])->with(['event_group', 'event_category'])->get();
        return $event;
    }*/
    public function show($id)
    {   $builder = $this->models;
        $event   = $builder->where('id', $id)->first();
        return $event;
    }

}
