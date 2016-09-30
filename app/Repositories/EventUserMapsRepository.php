<?php
namespace App\Repositories;
use App\Models\EventsUsersMaps;
use Illuminate\Database\Eloquent\Model;

class EventUserMapsRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(EventsUsersMaps $eventUserMaps)
    {
        $this->model = $eventUserMaps;
    }
    
    /**
     *Creat join Events.
     * @return array
     *
     */
    public function createJoinEvent($event,array $param){
    	$emap = $this->where('event_id','=',$event->id,'and')->getAll()->count();
	    if((int)$event->user_max < $emap){
	    	\DB::transaction(function($q) use(&$joinEvent, $param){
	            $joinEvent = new EventsUsersMaps();
	            $joinEvent->user_id   	= $param['user']['user']->id;
	            $joinEvent->event_id  	= $param['event_id'];
	            $joinEvent->is_join     = $param['is_join'];
	            $joinEvent->updated_at  = date('Y-m-d H:i:s');
	            $joinEvent->save();	      
	         });
	    } 
		
   }

}
