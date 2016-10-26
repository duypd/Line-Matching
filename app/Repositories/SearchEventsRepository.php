<?php

namespace App\Repositories;

use App\Models\Event;
use App\Models\Group;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Model;
use DB;


class SearchEventsRepository extends AbstractRepository
 {

    protected $models;
    protected $groups;



    public function __construct(Event $events, Group $event_groups) 
    {
        $this->models = $events;
        $this->groups = $event_groups;
    }


    public function searchEvents($params,$page = 0, $attributes = ['*']) 
    {
        $builder = $this->models;
        if (isset($params['name'])) {
            $builder_f = $builder->where('name','LIKE', '%'.$params['name'].'%')->get();
            return $result = [
            'builder_f' => $builder_f
             ];
        }
        if (isset($params['cat_id'])) {
            $builder_f = $builder->where('cat_id', $params['cat_id'])->get();
            return $result = [
            'builder_f' => $builder_f
             ];
        }
        if (isset($params['user_max'])) {
            $builder_f = $builder->where('user_max', $params['user_max'])->get();
            return $result = [
            'builder_f' => $builder_f
             ];
        }
        
        if (isset($params['address'])) {
            $builder_f = $builder->where('address','LIKE', '%'.$params['address'].'%')->get();
            return $result = [
            'builder_f' => $builder_f
             ];
        }

        if (!empty(($params['lat']) && ($params['long']) &&($params['radius'])) ) {
           $builder = DB::select("
            SELECT
              *, (
                3959 * acos (
                  cos ( radians(?) )
                  * cos( radians( `lat` ) )
                  * cos( radians( `long` ) - radians(?) )
                  + sin ( radians(?) )
                  * sin( radians( `lat` ) )
                )
              ) AS distance
            FROM line_events
            HAVING distance <= ?
            ORDER BY distance
            ", array($params['lat'], $params['long'], $params['lat'], $params['radius']));
        }      
            return $builder;
    }


     public function searchGroups($params, $page =0, $attributes=['*']) 
     {
        $groups = $this->groups;
        if (isset($params['name'])) {
            $event_groups = $groups->where('name','LIKE','%'.$params['name'].'%')->with('event')->get();
            return $result = [
            'event_groups' => $event_groups
             ];
            }
        if (!empty(($params['lat']) && !empty($params['long']) &&!empty($params['radius'])) ) {
           $event_groups = DB::select("
            SELECT
              *, (
                3959 * acos (
                  cos ( radians(?) )
                  * cos( radians( `lat` ) )
                  * cos( radians( `long` ) - radians(?) )
                  + sin ( radians(?) )
                  * sin( radians( `lat` ) )
                )
              ) AS distance
            FROM line_groups
            HAVING distance <= ?
            ORDER BY distance
            ", array($params['lat'], $params['long'], $params['lat'], $params['radius']));
        }
        return $result = [
            'event_groups' => $event_groups
        ];
    }

    public function getEvent($id)
    {
        $event = $this->models->Where('id',$id)->with(['event_group', 'event_category'])->get();
        return $event;
    }

}
