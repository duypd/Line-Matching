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
     *  @api {post} http://line-matching.dev.bap.jp/api/v1/events Creat Events
     *  @apiName Creat Event
     *  @apiGroup Event
     *  @apiParam {integer} user_id ID-User
     *  @apiParam {integer} event_id ID- Event
     *  @apiSuccess {Number}  status Status Response
     *  @apiSuccess {Object} data Data Response
     *  @apiSuccessExample Response:
     *  {
     *  "status": 201,
     *  "data": {
     *     "name": "Thi chim canh",
     *     "description": "Xem những con chim chơi hay nhất",
     *     "long": "12.25365",
     *     "lag": "25.1214581",
     *     "address": "109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
     *     "cat_id": "1",
     *     "user_max": "50",
     *     "status": 1,
     *     "updated_at": "2016-09-28 06:42:01",
     *     "created_at": "2016-09-28 06:42:01",
     *     "id": 126,
     *     "images": [
     *         {
     *             "origin": "uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg",
     *             "thumb": "uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg"
     *         }
     *     ]
     *     },
     *  "message": "Succesfully.",
     *   "error": 0
     *    }   
     */
    
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
     *@api {put} http://line-matching.dev.bap.jp/api/v1/events/{id} Update Event
     *@apiName Upadate Event
     *@apiGroup Event
     *@apiParam {integer} user_id ID-User
     *@apiParam {integer} event_id ID- Event
     *@apiSuccess {Number} status  status Response
     *@apiSuccess {Object} data    Data Response
     *@apiSuccessExample  Response:
     *{
        "status": 201,
        "data": {
            "id": 126,
            "cat_id": "1",
            "name": "chan ga",
            "address": "123 BC",
            "description": "adfgfghsdf",
            "images": [
                {
                    "origin": "uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg",
                    "thumb": "uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg"
                }
            ],
            "user_id": 0,
            "long": "12.25365000",
            "lag": "25.12145810",
            "group_id": "0",
            "status": "1",
            "date_start": "0000-00-00 00:00:00",
            "date_end": "0000-00-00 00:00:00",
            "user_max": "40",
            "created_at": "2016-09-28 06:42:01",
            "updated_at": "2016-09-28 07:02:15"
        },
        "message": "Succesfully.",
        "error": 0
        }  
     */
    
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
      *@api {delete} api.events.get.delete Delete Event
      *@apiName Delete Event
      *@apiGroup Event
      *@apiParam {integer} Event_id ID Event       
      *@apiSuccess {Number} status Status Response
      *@apiSuccess {Object} date   Date Response
      *@apiExample Response:
      *{
      *  "status": 200,
      * "data": true,
      *  "message": "Succesfully.",
      *  "error": null
      * }
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
     *@api {get} api.events.get.index List Event
     *@apiName ListEvent
     *@apiGroup Event
        @apiParam {integer} user_id ID-User
        @apiParam {integer} event_id ID-Event
        @apiSuccess {Number} status Status Response
        @apiSuccess {Object} data Date Response
        @apiSuccess {string} name Name of Event
        @apiSuccess {string} address Address of Event
        @apiSuccess {string} description Description of Event
        @apiSuccess {string} images Images of Event
        @apiSuccess {Number} long  Latitude
        @apiSuccess {Number}  lag  Longitude
        @apiSuccess {integer} group_id Event of Group
        @apiSuccess {Number}  date_start Date start of Event
        @apiSuccess {Number}  date_end Date finish of Event
        @apiSuccess {integer} user_max The maximum number people of events

        @apiSuccessExample Response:
        {
        "status": 200,
         "data": [
          {
            "id": 126,
            "cat_id": "1",
            "name": "chan ga",
            "address": "123 BC",
            "description": "adfgfghsdf",
            "images": [
                {
                    "origin": "uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg",
                    "thumb": "uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg"
                }
            ],
            "user_id": 0,
            "long": "12.25365000",
            "lag": "25.12145810",
            "group_id": "0",
            "status": "1",
            "date_start": "0000-00-00 00:00:00",
            "date_end": "0000-00-00 00:00:00",
            "user_max": "40",
            "created_at": "2016-09-28 06:42:01",
            "updated_at": "2016-09-28 07:02:15"
        }
    ],
    "message": "Succesfully."
    }
     */
    
    public function index()
    {

        return Response::json([
            'status'    => config('status.ok'),
            'data'      => $this->eventRepository->eventsList(1),
            'message'   => trans('messages.success')
        ]);
    }
    
     /**
    getShow
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
    /**
     *@api {get} api.events.get.show View
     *@apiName View 
     *@apiGroup Event
     @apiParam {integer} user_id ID-User
     @apiParam {integer} event_id ID-Event
     @apiSuccess {Number} status Status Response
     @apiSuccess {Object} data Date Response
     @apiSuccess {string} name Name of Event
     @apiSuccess {string} address Address of Event
     @apiSuccess {string} description Description of Event
     @apiSuccess {string} images Images of Event
     @apiSuccess {Number} long  Latitude
     @apiSuccess {Number}  lag  Longitude
     @apiSuccess {integer} group_id Event of Group
     @apiSuccess {Number}  date_start Date start of Event
     @apiSuccess {Number}  date_end Date finish of Event
     @apiSuccess {integer} user_max The maximum number people of events
     @apiSuccessExample Response:
     {
    "status": 200,
    "data": {
        "id": 125,
        "cat_id": "1",
        "name": "Thi chim canh",
        "address": "109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
        "description": "Xem những con chim chơi hay nhất",
        "images": [
            {
                "origin": "uploads/images/event/origin/125-1474960304qb6Hb87UaEieHbrr.jpg",
                "thumb": "uploads/images/event/thumb/125-1474960304qb6Hb87UaEieHbrr.jpg"
            }
        ],
        "user_id": 0,
        "long": "12.25365000",
        "lag": "25.12145810",
        "group_id": "0",
        "status": "1",
        "date_start": "0000-00-00 00:00:00",
        "date_end": "0000-00-00 00:00:00",
        "user_max": "50",
        "created_at": "2016-09-27 07:11:44",
        "updated_at": "2016-09-27 07:11:44"
    },
    "message": "Succesfully.",
    "error": null
    }
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
      @api {post} api.events.join.post.create CreateJoinEvent
      @apiName CreatJoinEvent
      @apiGroup Event
      @apiParam {integer} is_join  Status 1:join | 0:leave | -2:block
      @apiSuccess {Number} status Status Response
      @apiSuccess {Object} data   Date Response
      @apiSuccess {string} message status Response
      @apiSuccessExample Response:
      {
        "status": 201,
        "data": null,
        "message": "Succesfully.",
        "error": 0
        }
     
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
      @api {delete} api.events.get.leave LeaveEvent
      @apiName LeaveEvent
      @apiGroup Event
      @apiParam {integer} id_events_users_maps ID-events_users_maps
      @apiSuccess {Number} status Status Response
      @apiSuccess {Object} data   Date Response
      @apiSuccess {string} message status Response
      @apiSuccessExample Response:
      {
        "status": 201,
        "data": true,
        "message": "Succesfully.",
        "error": 0
        }  
      */
     
      public function deleteleaveEvent($id)
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
}

