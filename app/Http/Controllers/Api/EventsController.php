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
        $Id = $this->eventRepository->destroy($id);
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
    "status": 200,
    "data": {
    * "total": 33,
    * "per_page": 10,
    * "current_page": 1,
    * "last_page": 4,
    * "next_page_url": "http://line-matching.dev.bap.jp/api/v1/events?page=2",
    * "prev_page_url": null,
    * "from": 1,
    * "to": 10,
    * "data": [
    * {
    * "id": 1,
    * "cat_id": "4",
    * "name": "birth day",
    * "address": "Cẩm Lệ",
    * "description": "Tiệc sinh nhật ",
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ],
    * "long": "108.23129100",
    * "lat": "16.04066400",
    * "group_id": "3",
    * "status": "1",
    * "date_start": "2016-10-06 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "0",
    * "created_at": "2016-10-06 13:33:32",
    * "updated_at": "2016-10-06 13:33:32"
    * },
    * {
    * "id": 2,
    * "cat_id": "4",
    * "name": "Thi chim canh",
    * "address": "109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "Xem những con chim chơi hay nhất",
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ],
    * "user_id": 3,
    * "long": "12.25365000",
    * "lat": "25.12145810",
    * "group_id": "0",
    * "status": "1",
    * "date_start": "2016-10-20 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "0",
    * "created_at": "2016-10-06 13:33:32",
    * "updated_at": "2016-10-06 13:33:32"
    * }, 
    * {
    * "id": 5,
    * "cat_id": "1",
    * "name": "SeaGame",
    * "address": "105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
    * "description": "Soccer, tennis",
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/event/origin/17-1476264116Nauzhcx5WOInr19D.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/event/thumb/17-1476264116Nauzhcx5WOInr19D.jpg"
    * }
    * ],
    * "user_id": 1,
    * "long": "108.22080800",
    * "lat": "16.04922300",
    * "group_id": "1",
    * "status": "1",
    * "date_start": "0000-00-00 00:00:00",
    * "date_end": "0000-00-00 00:00:00",
    * "user_max": "50",
    * "created_at": "2016-10-12 16:21:39",
    * "updated_at": "2016-10-12 09:21:56"
    * }
    * ]
    *},
    *"message": "Succesfully.",
    * "error": null
    * }
    */
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */
     public function getEvents()
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
   
    
    public function getEvent($id){
        
        $events = $this->eventRepository->show($id);
        if(!empty($events)){
         return $this->buildResponseSuccess($events);   
        }
        else{
            return $this->buildResponseSuccess();
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

     /**
     * @api {get} api/v1/related-event/:id Get Related Events
     * @apiName Get Related Events
     * @apiVersion 1.0.0
     * @apiGroup Events
     * @apiParam {Integer} event id Event Id
     * From event id, find group id and category id, continue get event
     * have the same group joined and category
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": {
     * "related_event": [
     *  {
     * "name": "Happy Birthday 1",
     * "images": [
     *  {
     * "origin": "uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg",
     * "thumb": "uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg"
     *  }
     *  ]
     *   },
     *  {
     * "name": "Apec",
     * "images": [
     *   {
     * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
     * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
     *   }
     *   ]
     * ]
     *  },
     * "message": "Succesfully.",
     *
     * }
     */
     public function getRelatedEvent($id){
         $related_events = $this->eventRepository->getRelatedEvent($id,0,['*']);
         if ($related_events['note'] == 0) {
            return $this->buildResponseCreated($related_events, trans('messages.not_found'));
        }
         return $this->buildResponseCreated($related_events, trans('messages.success'));
     }


     /**
     * @api {get} api/v1/took-place-events Get Events Took Place
     * @apiName Get Events Took Place
     * @apiVersion 1.0.0
     * @apiGroup Events
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 200,
     * "data": [
     *  {
     * "id": 3,
     * "date": "2016-10-05 00:00:00",
     * "name": "Open soon restaurant 2",
     * "cat_id": "20"
     * },
     *  {
     * "id": 7,
     * "date": "2016-10-06 00:00:00",
     * "name": "birth day",
     * "cat_id": "4"
     *  }
     *  ],
     * "message": "Succesfully.",
     * "error": null
     *  }
     */

     public function getTookPlaceEvents($group_id){
         $events = $this->eventRepository->getTookPlaceEvents($group_id, 0,['*']);
         return $this->buildResponseSuccess($events);
       
    }


     /**
     * @api {get} api/v1/events-plan Get Events will Take Place
     * @apiName Get Events will Take Place
     * @apiVersion 1.0.0
     * @apiGroup Events
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 200,
     * "data": {
     * "2": {
     * "id": 8,
     * "date": "2016-10-20 00:00:00",
     * "name": "event 1",
     * "cat_id": "4"
     *  }
     * },
     * "message": "Succesfully.",
     * "error": null
     * }
     */

    public function getEventsPlan($group_id){
         $events = $this->eventRepository->getEventsPlan($group_id,0,['*']);
         return $this->buildResponseSuccess($events);
       
    }

}


