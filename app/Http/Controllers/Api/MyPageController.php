<?php
namespace App\Http\Controllers\Api;
use App\Repositories\MyPageRepository;
use App\Repositories\GroupRepository;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
class MyPageController extends Controller
{
    /**
     * @var groupRepository
     */
    private $groupRepository;
   /**
     * @var groupRepository
     */
    private $eventRepository;
    
    public function __construct(GroupRepository $groupRepository, EventRepository $eventRepository)
    {
        $this->groupRepository         = $groupRepository;
        $this->eventRepository         = $eventRepository;
    }
     /**
     GetList Group
     @return \Illuminate\Http\JsonResponse
     */
    
    public function getIndex()
    { 
       $group = $this->groupRepository->getindex(0,['*']);
        return $this->buildResponseSuccess($group);
    }
      /**
     GetList Event
     @return \Illuminate\Http\JsonResponse
     */
    
    public function getAllEvent()
    { 
       $event = $this->eventRepository->getindexall(0,['*']);
        return $this->buildResponseSuccess($event);
    }
    /**
    getDetailEvent
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
     public function getDetailEvent($id){
        $eventId = $this->eventRepository->showEvent($id);
        if(!empty($eventId)){
         return $this->buildResponseSuccess($eventId);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }
 
}

