<?php
namespace App\Repositories;

use Cache;
use App\Models\Event;
use App\Models\Group;
use App\Models\User;
use App\Models\EventsPrPoints;
use App\Models\EventsLeaderMaps;
use App\Models\EventCategory;
use App\Models\EventsUsersMaps;
use App\Models\LogUserPlan;
use App\Utilities\Upload;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\DeleteImageEvent;

class EventRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

     /**
     * @var EventPrPoint
     */
    protected $eventPrPoint;

    /**
     * @var CURL
     */
    protected $curl;

    /**
     * @var EventsLeaderMaps
     */
    protected $eventLeaderMaps;
    /**
     * @var EventsLeaderMaps
     */
    protected $eventsUsersMaps;
    /**
     * @var user
     */
    protected $user;

    public function __construct(Event $event, EventsPrPoints $eventPrPoint, EventsLeaderMaps $eventLeaderMaps,EventsUsersMaps $eventsUsersMaps,User $user)
    {
        $this->model = $event;
        $this->eventPrPoint = $eventPrPoint;
        $this->eventLeaderMaps = $eventLeaderMaps;
        $this->eventsUsersMaps = $eventsUsersMaps;
        $this->user            = $user;
        $this->curl  =  'http://maps.google.com/maps/api/geocode/json';
    }



    /**
     * Get list event categories.
     * @return array
     */
    public function index($page = 0, $attributes = ['*'])
    {
       $result = $this->paginate($attributes)->toArray(); 
       return  $result;
    }
     /**
     * create event.
     *
     *
     * @return array
     */
    public function create(array $param)
    {
            $cevent = new Event();   
            $cevent->name = $param['name'];
            $cevent->description = $param['description'];
            $cevent->address = $param['address'];
            $cevent->user_max = $param['user_max'];
            $cevent->cat_id = $param['cat_id'];
            $cevent->lat = $param['lat'];
            $cevent->long = $param['long'];
            $cevent->status = 1;
            $cevent->user_id = $param['user_id'];
            $cevent->group_id = $param['group_id'];
            // $cevent->fill($param);
            $cevent->updated_at = date('Y-m-d H:i:s');
            $cevent->save();

            if (!empty($param['images'])) {
             $upload = $this->__postImageEvent($cevent,$param['images']);
             $image = $cevent->images;
             $cevent->images =$upload;
             $cevent->images =  transfer_url_images($cevent->images); 
             $cevent->save();
              if (! empty($image)) {
                event(new DeleteImageEvent($image));
            }
         } 

       return $cevent;
    }
     /**
     *Update Event
     *
     * @return array
     */

    public function update($id, array $params)
    {
        $UEvent = $this->getBy('id', $id);
        Cache::forget('event_'.$id);
        $UEvent->name = !empty($params['name']) ? $params['name'] : $UEvent->name;
        $UEvent->address = !empty($params['address']) ? $params['address'] : $UEvent->address;
        $UEvent->description = !empty($params['description']) ? $params['description'] : $UEvent->description;
        $UEvent->lat = !empty($params['lat']) ? $params['lat'] : $UEvent->lat;
        $UEvent->long = !empty($params['long']) ? $params['long'] : $UEvent->long;
        $UEvent->save();
        return $UEvent;
        $upload = $this->__postImageEvent($UEvent,$params['images']);
        if (!empty($params['images'])) {
            $image = $UEvent->images;
            $UEvent->images = $upload;
            $UEvent->images =  transfer_url_images($UEvent->images); 
            $UEvent->save();
        }
    }
     /**
     * Delete a record Event.
     *
     * @param int $id
     * @param $eventId
     * @return mixed
     */
    public function destroy($id)
    {
        $DEvent = $this->model->where('id', $id)->first();
        Cache::forget('event_'.$id);
        $DEvent->delete();
        $eventPrPoint = $this->eventPrPoint->where('event_id',$id);
        $eventPrPoint->delete();
        return $eventPrPoint;
    }
    /**
     * show Event.
     * @param $id
     * @return object $event
     */

    public function show($id)

    {   
        $event = Cache::remember('event_'.$id,3600,function()use($id){
        return $this->model->select('name','address','description','images','date_start','date_end','user_max','id','user_id')->where('id',$id) 
        ->with(['prPoint'=>function($q)
        {
            $q->select('event_id','content','images','id');
        },
            'userProfile' =>function($a)
        {
                $a->select('id','images','description','user_id')
                ->with(['infouser' =>function($b){
                    $b->select('id','username');
                }]);
        }])->get()->toArray();
    });
         return $event; 
    }
        
    /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */
    public function __postImageEvent($cevent,$files)
    {

        $data =array();
        foreach ($files as $file) {
            $upload = new Upload($cevent->path, $cevent->width, $cevent->height, $file);
            $data[] = $upload->handle($cevent);
        }  
         return $data;
    }


    /**
     * Get list event in my Page
     * @return array
     */
     function getindexall($page = 0, $attributes = ['*'])
     {
        $filterevent = ['images','date_start','name','user_max','id'];
        $resultevent = $this->model->select($filterevent)
                                                ->with(['groups' => function($a){
                                                $a->select('id','name');},'category'=>function($b){
                                                $b->select('id','name');
                                                }])->paginate(4); 
        $resultleader = $this->eventLeaderMaps->select('event_id')->get()->toArray();
        foreach ($resultevent as $key => $values) 
        {
           if (in_array(['event_id' => $values['id']], $resultleader)) {
               $resultevent[$key]['is_leader'] = 1;
           } else {
               $resultevent[$key]['is_leader'] = 0;
           }    
        }  
        return $resultevent->toArray();
     }

    /**
     *
     * Get DetailEvent in My Page
     * @return array
     *
     */
    public function showEvent($id)
    {
        Cache::flush();
        $event = Cache::remember('event_'.$id,3600,function()use($id) {
            return $this->model->where('id',$id)->select('name','address','description','images','date_start','date_end','id')->with(['prPoint'=>function($q){
            $q->select('event_id','content','images');
            }])->first(); 
            $countUserMapsEvent = $this->eventsUsersMaps->where('event_id',$id)->count();
            $event->totaljoin = $countUserMapsEvent;
        });
        
        return $event;
    }
    

    public function getRelatedEvent($id, $page = 0, $attributes = ['*'])
    {
        $event          = $this->getBy('id', $id);
        $event_group    = $event->group_id;
        $event_category = $event->cat_id;
        $related_event  = $this->model->select('name','images')
        ->where('group_id',$event_group)
        ->where('cat_id',$event_category)->paginate(5);
        if($related_event->count() >= 2) {
            return[
                'note' => 1,
                'related_event' => $related_event->toArray()
            ];
        }
            return [    
                'note' => 0,
                'related_event' => []
           ];
    }

     public function getTookPlaceEvents($group_id, $page = 0, $attributes = ['*'])
     {
       $date_start = $this->model->where('group_id',$group_id);
       $date_start_f = $date_start->select('id','name','cat_id','status','date_start')->paginate(5);
       $now = strtotime(date('Y-m-d'));
       $result = array();
       foreach($date_start_f as $key => $values) {
            if(($now - strtotime($values['date_start']) > 0) && ($values['status'] == 1) ) {
                $result[$key] = ['id' => $values['id'],
                                 'date' => $values['date_start'],
                                 'name' => $values['name'],
                                 'cat_id' => $values['cat_id']];
                    }
               }
        return $date_start_f->toArray();
     }

     public function getEventsPlan($group_id, $page = 0, $attributes = ['*'])
     {
       $events_plan = $this->model->where('group_id', $group_id);
       $events_plan_f = $events_plan->select('id','name','cat_id','status','date_start')->paginate(4);
       $now = strtotime(date('Y-m-d'));
       $result = array();
       foreach($events_plan_f as $key => $values) {
            if(($now - strtotime($values['date_start']) < 0) && ($values['status'] == 1) ) {
                $result[$key] = ['id' => $values['id'],
                                 'date' => $values['date_start'],
                                 'name' => $values['name'],
                                 'cat_id' => $values['cat_id']];
                    }
               }
            
        return $events_plan_f->toArray();
    }

}

