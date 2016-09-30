<?php
namespace App\Repositories;

use App\Models\Event;
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
    function eventsList($userId){
        return $this->prepareQuery()->get();
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
            $cevent->long = $param['long'];
            $cevent->lag = $param['lag'];
            $cevent->address = $param['address'];
            $cevent->cat_id = $param['cat_id'];
            $cevent->user_max = $param['user_max'];
            $cevent->status = 1;
            $cevent->updated_at = date('Y-m-d H:i:s');
            $cevent->save();

        }); 
         if (!empty($param['images'])) {
             $upload = $this->__postImageEvent($cevent,$param['images']);
             $image = $cevent->images;
             $cevent->images =$upload;
             $cevent->save();
              if (! empty($image)) {
                event(new DeleteImageEvent($image));
            }
         }         
       return $cevent;
    }
     /**
     *
     *
     * @return array
     */

    public function update($id, array $params)
    {
        $UEvent = $this->getBy('id', $id);
        $UEvent->name = !empty($params['name']) ? $params['name'] : $UEvent->name;
        $UEvent->address = !empty($params['address']) ? $params['address'] : $UEvent->address;
        $UEvent->description = !empty($params['description']) ? $params['description'] : $UEvent->description;
        $UEvent->user_id = !empty($params['user_id']) ? $params['user_id'] : $UEvent->user_id;
        $UEvent->user_max = !empty($params['user_max']) ? $params['user_max'] : $UEvent->user_max;
        $UEvent->status = !empty($params['status']) ? $params['status']: $UEvent->status;
        $UEvent->save();
        return $UEvent;
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
}
