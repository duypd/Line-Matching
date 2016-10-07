<?php
namespace App\Http\Controllers\Api;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Requests\CreateJoinEventRequest;
use App\Http\Requests\CreatEventsPrPointsRequest;
use App\Repositories\Upload;
use App\Repositories\EventRepository;
use App\Repositories\EventUserMapsRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
use App\Http\Controllers\Controller;
use Response;
class EventsController extends Controller
{
    /**
     * @var eventRepository
     */
    private $eventRepository;
    /**
     * @var eventUserMapsRepository
     */
    private $eventUserMapsRepository;
    /**
     * @var eventUserMapsRepository
     */
    private $eventPrPointRepository;
    /**
     * UsersController constructor.
     * @param EventRepository $userRepository
     */
    public function __construct(EventRepository $eventRepository, EventUserMapsRepository $eventUserMapsRepository)
    {
        $this->eventRepository         = $eventRepository;
        $this->eventUserMapsRepository = $eventUserMapsRepository;
    }
    /**
     * Create a Event.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    * @api {post} http://line-matching.dev.bap.jp/api/v1/events CreatEvent
    * @apiName CreatEvent
    * @apiGroup Event
    * @apiParam {integer} user_id ID-User
    * @apiParam {string} name Name Event
    * @apiParam {string} description Description_Event
    * @apiParam {string} address Address_Event
    * @apiParam {Number} user_max User_max_Event
    * @apiParam {Number} cat_id ID_category
    * @apiParam {string} images Images_Event
    * @apiParam {Number} long  Latitude
    * @apiParam {Number} lag  Longitude
    * @apiParam {string} status Status_Event
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data Event_Data
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response
    * {
    * "status": 201,
    * "data": {
    * "name": "SeaGame",
    * "description": "Soccer, tennis",
    * "address": "105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "user_max": "50",
    * "cat_id": "1",
    * "long": "108.220808",
    * "lag": "16.049223",
    * "status": 1,
    * "user_id": 1,
    * "group_id": "1",
    * "updated_at": "2016-10-03 02:07:45",
    * "created_at": "2016-10-03 02:07:45",
    * "id": 5,
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ]
    * },
    * "message": "Succesfully.",
    *  "error": 0
    *  *} 
    * */
    public function postCreate(CreateEventRequest $request)
    {   
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $event  = $this->eventRepository->create(array_merge($request->all(), ['user' => $user]));
        return $this->buildResponseCreated($event);
    }
    /**
     * Update a Event.
     *
     * @param UpdateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    * @api {post} http://line-matching.dev.bap.jp/api/v1/events/{id} UpdateEvent
    * @*piName UpdateEvent
    * @apiGroup Event
    * @apiParam {string} name Name Event
    * @apiParam {string} description Description_Event
    * @apiParam {string} address Address_Event
    * @apiParam {string} images Images_Event
    * @apiParam {Number} long  Latitude
    * @apiParam {Number} lag  Longitude
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data Event_Data
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response
    * {
    * "status": 201,
    * "data": {
    * "id": 1,
    * "cat_id": "1",
    * "name": "Happy New Year",
    * "address": "109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "25.1214581",
    *  "images": [
    *       {
    *           "origin": "uploads/images/event/origin/1-1475312974iupLRHMHScNP8I86.jpg",
    *           "thumb": "uploads/images/event/thumb/1-1475312974iupLRHMHScNP8I86.jpg"
    *       }
    *   ],
    * "user_id": 0,
    * "long": "12.25365000",
    * "lag": "25.12145810",
    * "group_id": "0",
    * "status": "1",
    * "date_start": "0000-00-00 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "50",
    * "created_at": "2016-10-01 09:09:33",
    * "updated_at": "2016-10-01 09:38:16"
    *  },
    *  "message": "Succesfully.",
    *  "error": 0
    *  }
    * */
    
    public function postUpdate($id, UpdateEventRequest $request)
    {  
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $UEvent  = $this->eventRepository->update($id,array_merge($request->all(), ['user' => $user] ));
        return $this->buildResponseCreated($UEvent);
    }
    /**
    * Delete a event.
    * @param int $id
    * @param Request $request
    * @return \Illuminate\Http\JsonResponse
    */
     /**
    *  @api {delete} http://line-matching.dev.bap.jp/api/v1/events/{id} DeleteEvent
    *  @apiName DeleteEvent
    *  @apiGroup Event
    *  @apiParam {integer} id_event ID_Event
    *  @apiSuccess {string} status Status Response
    *  @apiSuccess {Object} data EventData
    *  @apiSuccess {string} message Message Response
    *  @apiSuccess {Number} Error of Request
    *  @apiSuccessExample Response
    *  {
    *    "status": 200,
    * "data": true,
    * "message": "Succesfully.",
    * "error": null
    *    }
     */
     
    public function delete($id)
    {
        $Id = $this->eventRepository->delete($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($eventId);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    
    /**
    * @api {get} http://line-matching.dev.bap.jp/api/v1/events ListEvent
    * @apiName ListEvent
    * @apiGroup Event
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data Event_Data
    * @apiSuccess {string} message Message Response
    * @apiSuccessExample Response
    * {
    * "status": 200,
    * "data": [
    * {
    * "id": 2,
    * "cat_id": "1",
    * "name": "Happy Birthday",
    * "address": "105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "Birth good",
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg",
    * "thumb": "uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg"
    * }
    * ],
    * "user_id": 0,
    * "long": "99.99999999",
    * "lag": "16.04922300",
    * "group_id": "0",
    * "status": "1",
    * "date_start": "0000-00-00 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "50",
    * "created_at": "2016-10-01 09:15:59",
    * "updated_at": "2016-10-01 09:16:00"
    *  },
    *  {
    * "id": 5,
    * "cat_id": "1",
    * "name": "SeaGame",
    * "address": "105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "Soccer, tennis",
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ],
    * "user_id": 1,
    * "long": "99.99999999",
    * "lag": "16.04922300",
    * "group_id": "1",
    * "status": "1",
    * "date_start": "0000-00-00 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "50",
    * "created_at": "2016-10-03 02:07:45",
    * "updated_at": "2016-10-03 02:07:45"
    *  }
    *  ],
    * "message": "Succesfully."
    *  }
    * */
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */
     public function getIndex()
    {
        $event = $this->eventRepository->index(0,['*']);
        return $this->buildResponseSuccess($event);
       
    }
     /**
    getDetailEvent
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
   /**
    * @api {get} http://line-matching.dev.bap.jp/api/v1/events/{id} GetDetailEvent
    * @apiName GetDetailEvent
    * @apiGroup Event
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data Data_Event
    * @apiSuccess {string} Message Response
    * @apiSuccess {Number} Error of request
    * @apiSuccessExample Response
    * {
    * "status": 200,
    * "data": {
    * "id": 1,
    * "cat_id": "1",
    * "name": "Happy New Year",
    * "address": "109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "25.1214581",
    * "images": [
    *  {
    *  "origin": "uploads/images/event/origin/1-1475312974iupLRHMHScNP8I86.jpg",
    *  "thumb": "uploads/images/event/thumb/1-1475312974iupLRHMHScNP8I86.jpg"
    *  }
    * ],
    * "user_id": 0,
    * "long": "12.25365000",
    * "lag": "25.12145810",
    * "group_id": "0",
    * "status": "1",
    * "date_start": "0000-00-00 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "50",
    * "created_at": "2016-10-01 09:09:33",
    * "updated_at": "2016-10-01 09:38:16"
    * },
    * "message": "Succesfully.",
    * "error": null
    * } 
    */
   
    
    public function getShow($id){
        
        $events = $this->eventRepository->show($id);
        if(!empty($events)){
         return $this->buildResponseSuccess($events);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }
   /**
     * Create a JoinEvent.
     *
     * @param CreateJoinEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
   /**
    *@api {post} http://line-matching.dev.bap.jp/api/v1/events/{id}/join CreatJoinEvent
    *@apiName CreatJoinEvent
    *@apiGroup Event
    *@apiParam {integer} id_event ID-Event
    *@apiParam {integer} is_join Stustus|1:join|0:leave|-2:block
    *@apiSuccess {string} status Status Response
    *@apiSuccess {Object} data Data
    *@apiSuccess {string} Message Response
    *@apiSuccess {Number} Error of Request
    *@apiSuccessExample Response 
    *{
    *"status": 201,
    *"data": null,
    *"message": "Succesfully.",
    *"error": 0
    * }
    */
   
    
    public function postCreateJoinEvent($id,CreateJoinEventRequest $request){  
        $user   = array(); // get_current_user_by_token();
        $event = $this->eventRepository->getBy('id',$id,['id','user_max']); 
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $JoinEvent  = $this->eventUserMapsRepository->createJoinEvent($event,array_merge($request->all(), ['user' => $user]));
        return $this->buildResponseCreated($JoinEvent); 
    }
     /**
     * Leave Events.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    *@api {delete} http://line-matching.dev.bap.jp/api/v1/events/join/{id} LeaveEvent
    *@apiName LeaveEvent
    *@apiGroup Event
    *@apiParam {integer} id_events_users_maps ID_events_users_maps
    *@apiSuccess {string} status Status Response
    *@apiSuccess {Object} data EventData
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} Error of Request
    *@apiSuccessExample Response
    *{
    *  "status": 200,
    *  "data": true,
    *  "message": "Succesfully.",
    * "error": null
    *  }
      */
     
      public function deleteLeaveEvent($id)
    {
        $Id = $this->eventUserMapsRepository->delete($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($JoinId);
    }
}

