<?php
namespace App\Repositories;

use App\Models\Event;
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

       // $localtion = $this->__setLocaltionEvent($param['address']);
        \DB::transaction(function($q) use(&$event, $param) {
            $event = new Event();
            $event->name = $param['name'];
            $event->status = 1;
            $event->updated_at = date('Y-m-d H:i:s');
            $event->save();
        });

        if(!empty($param['images'])){
            $upload = $this->__uploadEventImage($event,$param['images']);
            $image =  $event->images;
            $event->images = $upload;
            $event->save();
            $event->images =  transfer_url_images_lists($event->images);
            if (! empty($image)) {
                event(new DeleteImageEvent($image));
            }
        }

        return $event;
    }

    /**
     * create upload images.
     *
     *
     * @return array
     */
    private  function  __uploadEventImage($event,$files){
        $data = array();
        foreach ($files as $file) {
            $upload = new Upload($event->path, $event->width, $event->height, $file);
            $data[] = $upload->handle($event);
        }
        return $data;

    }

    /**
     * create upload images.
     *
     *
     * @return array
     */
    public  function  __setLocaltionEvent($address){
        $url = $this->curl."?address=".$address."&sensor=false&region=England";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response =  curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
