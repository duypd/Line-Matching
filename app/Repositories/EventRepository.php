<?php
namespace App\Repositories;
use App\Models\Event;
use App\Models\Group;
use App\Models\EventCategory;
use App\Models\EventsUsersMaps;
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

       \DB::transaction(function($q) use(&$cevent, $param) {
            $cevent = new Event();   
            $cevent->name = $param['name'];
            $cevent->description = $param['description'];
            $cevent->address = $param['address'];
            $cevent->user_max = $param['user_max'];
            $cevent->cat_id = $param['cat_id'];
            $cevent->long = $param['long'];
            $cevent->lag = $param['lag'];
            $cevent->status = 1;
            $cevent->user_id = $param['user_id'];
            $cevent->group_id = $param['group_id'];
            $cevent->updated_at = date('Y-m-d H:i:s');
            $cevent->save();
        }); 
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
        $UEvent->description = !empty($params['long']) ? $params['long'] : $UEvent->long;
        $UEvent->description = !empty($params['lag']) ? $params['lag'] : $UEvent->lag;
        $UEvent->save();
        return $UEvent;
        $upload = $this->__postImageEvent($UEvent,$params['images']);

        if (!empty($params['images'])) {
            $image = $UEvent->Images;
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
     * Get list event.a
     * @return array
     */
     function getindexall($page = 0, $attributes = ['*']){
        $filterevent = ['group_id','images','date_start','name','user_max','id','cat_id'];
        $result = $this->model->select($filterevent)->with(['groups' => function($q){$q->select('id','name');},
                                                            'category' => function($c) {$c->select('id','name');}])->get();
        return $result;

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

