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
	    if($emap<(int)$event->user_max){
	    	\DB::transaction(function($q) use(&$joinEvent, $param,$event_add(event)){
	            $joinEvent = new EventsUsersMaps();
	            $joinEvent->user_id   	= $param['user']['user']->id;
	            $joinEvent->event_id    = $event->id;
	            $joinEvent->is_join     = $param['is_join'];
	            $joinEvent->updated_at  = date('Y-m-d H:i:s');
	            $joinEvent->save();	      
	         });
	    } 	
   }
   /**
    *Leave Events
    * @param int $id
    * @param $JoinId
    * @return mixed
    *
    */
   public function destroy($id, $Id)
        {
            $LEvent = $this->where('JoinId', $Id)
                ->getBy('id', $id);
            return $LEvent->delete();
        }
}
