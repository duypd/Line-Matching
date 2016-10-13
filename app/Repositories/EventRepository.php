<?php
namespace App\Repositories;
use App\Models\Event;
use App\Models\Group;
use App\Models\EventsPrPoints;
use App\Models\EventsLeaderMaps;
use App\Models\EventCategory;
use App\Models\EventsUsersMaps;
use App\Models\LogUserPlan;
use App\Utilities\Upload;
use Illuminate\Database\Eloquent\Model;

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

    public function __construct(Event $event, EventsPrPoints $eventPrPoint, EventsLeaderMaps $eventLeaderMaps)
    {
        $this->model = $event;
        $this->eventPrPoint = $eventPrPoint;
        $this->eventLeaderMaps = $eventLeaderMaps;
        $this->curl  =  'http://maps.google.com/maps/api/geocode/json';
    }
   /* function eventsList($userId){
        return $this->prepareQuery()->get();
    } */  
         /**
     * Get list event categories.
     *
     *
     * @return array
     */
    public function index($page = 0, $attributes = ['*']){
       $result = $this->paginate($attributes); 
       return  $result->toArray();
    }
     /**
     * create event.
     *
     *
     * @return array
     */
    public function create(array $param){
            $cevent = new Event();   
            $cevent->name = $param['name'];
            $cevent->description = $param['description'];
            $cevent->address = $param['address'];
            $cevent->user_max = $param['user_max'];
            $cevent->cat_id = $param['cat_id'];
            $cevent->long = $param['long'];
            $cevent->lat = $param['lat'];
            $cevent->status = 1;
            $cevent->user_id = $param['user_id'];
            $cevent->group_id = $param['group_id'];
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
        $UEvent->name = !empty($params['name']) ? $params['name'] : $UEvent->name;
        $UEvent->address = !empty($params['address']) ? $params['address'] : $UEvent->address;
        $UEvent->description = !empty($params['description']) ? $params['description'] : $UEvent->description;
        $UEvent->long = !empty($params['long']) ? $params['long'] : $UEvent->long;
        $UEvent->lat = !empty($params['lat']) ? $params['lat'] : $UEvent->lat;
        $UEvent->save();
        return $UEvent;
        $upload = $this->__postImageEvent($UEvent,$params['images']);

        if (!empty($params['images'])) {
            $image = $UEvent->Images;
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
        $event = $this->where('status',1)->getBy('id', $id);
        return $event;
    }
    /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */
    public function __postImageEvent($cevent,$files){
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
     function getindexall($page = 0, $attributes = ['*']){
        $filterevent = ['images','date_start','name','user_max','id'];
       /* $result = $this->model->select($filterevent)->take(3)
                 ->with(['groups' => function($q){
                    $q->select('id','name');},
                    'category' => function($c) {
                        $c->select('id','name');
                    }])
                 ->get();
        return  $result->toArray();*/
        $resultevent = $this->model->select($filterevent)->take(5)
                                                ->with(['groups' => function($a){
                                                $a->select('id','name');},'category'=>function($b){
                                                $b->select('id','name');
                                                }])->get();                                  
        $resultleader = $this->eventLeaderMaps->select('event_id')->get()->toArray();
        foreach ($resultevent as $key => $values) 
        {
           if (in_array(['event_id' => $values['id']], $resultleader)) 
           {
               $resultevent[$key]['is_leaderevent'] = 1;
           } else{
               $resultevent[$key]['is_leaderevent'] = 0;
           }    
        }
        return $resultevent;
     }  
    /**
     *
     * Get DetailEvent in My Page
     * @return array
     *
     */
    public function showEvent($id)
    {
        $eventfill =['name','address','description','images','date_start','date_end','user_max','id'];
        $event = $this->model->where('id',$id)->select($eventfill)->with(['EventPrPoint' =>function($a){
            $a->select('id','content');
        }])->first();

        return $event->toArray();
    }


    public function getRelatedEvent($id, $page = 0, $attributes = ['*']){
        $event = $this->getBy('id', $id);
        $event_group = $event->group_id;
        $event_category = $event->cat_id;
        $related_event = $this->model->select('name','images')
        ->where('group_id',$event_group)
        ->where('cat_id',$event_category)->get(); 
        if($related_event->count() >= 2){
            return[
                'note' => 1,
                'related_event' => $related_event
            ];
        }
            return [
                'note' => 0,
                'related_event' => []
           ];
    }
}

