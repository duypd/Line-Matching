<?php
namespace App\Repositories;
use App\Models\Event;
use App\Models\Group;
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
     * @var CURL
     */
    protected $curl;

    public function __construct(Event $event)
    {
        $this->model = $event;
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
       $result = $this->paginate($attributes)->toArray(); 
       return  $result;
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
            $cevent->lat = $param['lat'];
            $cevent->long = $param['long'];
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
        $UEvent->lat = !empty($params['lat']) ? $params['lat'] : $UEvent->lat;
        $UEvent->long = !empty($params['long']) ? $params['long'] : $UEvent->long;
        $UEvent->save();
        return $UEvent;
        $upload = $this->__postImageEvent($UEvent,$params['images']);
        if (!empty($params['images'])) {
            $image = $UEvent->images;
            $UEvent->images = $upload;
            $UEvent->save();
        }
    }
    /**
     * show Event.
     *
     * @param $id
     * @return object $event
     */

    public function show($id)
    {
        $event = $this->model->where('id', $id)->where('status', 1)->get();
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
     * Get list event
     * @return array
     */
     function getindexall($page = 0, $attributes = ['*']){
        $filterevent = ['group_id','images','date_start','name','user_max','id','cat_id'];
        $result = $this->model->select($filterevent)->take(2)->with(['groups' => function($q){$q->select('id','name');},
                                                            'category' => function($c) {$c->select('id','name');}])->get();
        return $result;

        }  
    /**
     *
     * Get DetailEvent in My Page
     * @return array
     *
     */
    public function showEvent($id)
    {
        $event = $this->getBy('id', $id);
        return $event;
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

     public function getTookPlaceEvents($group_id, $page = 0, $attributes = ['*']){
       $date_start = $this->model->where('group_id',$group_id);
       $date_start_f = $date_start->select('id','name','cat_id','status','date_start')->get()->toArray();
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
               return $result;
    }

     public function getEventsPlan($group_id, $page = 0, $attributes = ['*']){
       $events_plan = $this->model->where('group_id', $group_id);
       $events_plan_f = $events_plan->select('id','name','cat_id','status','date_start')->get()->toArray();
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
               return $result;
    }

}

