<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreatEventsPrPointsRequest;
use App\Http\Requests\UpdatePrPointRequest;
use App\Repositories\Upload;
use App\Repositories\EventPrPointRepository;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class PrPointController extends Controller
{
    /**
     * @var eventPrPointRepository
     */
    private $eventPrPointRepository;
    /**
     * @var eventRepository
     */
    private $eventRepository;
    /**
     * UsersController constructor.
     * @param EventPrPointRepository $eventPrPointRepository
     */
    public function __construct(EventPrPointRepository $eventPrPointRepository, EventRepository $eventRepository)
    {
        $this->eventRepository         = $eventRepository;
        $this->eventPrPointRepository  = $eventPrPointRepository;
    }
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/prevents ListEventPrPoint
    *@apiName ListEventPrPoint 
    *@apiGroup Event
    *@apiSuccess {string} status Status Response
    *@apiSuccess {Object} data EventPrPoiny_Data
    *@apiSuccess {string} message Message Response
    *@apiSuccessExample Response
    * {
    * "status": 200,
    * "data": {
    * "total": 6,
    * "per_page": 10,
    * "current_page": 1,
    * "last_page": 1,
    * "next_page_url": null,
    * "prev_page_url": null,
    * "from": 1,
    * "to": 6,
    * "data": [
    * {
    * "id": 1,
    * "event_id": 3,
    * "content": "Quảng cáo Nhà Hàng",
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/13-1476167829PIqAofppp9PTaRf7.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/13-1476167829PIqAofppp9PTaRf7.jpg"
    * }
    * ],
    * "created_at": "2016-10-11 06:37:09",
    * "updated_at": "2016-10-11 06:37:09"
    * },
    * {
    * "id": 6,
    * "event_id": 6,
    * "content": "Content healthy, entertament",
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/14-1476167833WhgP0NLojINaiaJ0.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/14-1476167833WhgP0NLojINaiaJ0.jpg"
    * }
    * ],
    * "created_at": "2016-10-11 06:37:13",
    * "updated_at": "2016-10-11 06:37:13"
    * }
    * ]
    * },
    * "message": "Succesfully.",
    * "error": null
    * }
     */
    
    public function index()
    {
       $eventPrPoint = $this->eventPrPointRepository->eventsList(0,['*']);
       return $this->buildResponseSuccess($eventPrPoint);
    }
    /**
    getDetailEventPrPoint
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
    /**
    * @api {get} http://line-matching.dev.bap.jp/api/v1/prevents/{id} GetDetailEventPrPoint
    * @apiName GetDetailEventPrPoint
    * @apiGroup Event
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data Data_Event
    * @apiSuccess {string} Message Response
    * @apiSuccess {Number} Error of request
    * @apiSuccessExample Response
    * {
    * "status": 200,
    * "data": {
    * "id": 2,
    * "event_id": 2,
    * "content": "Store Telephone",
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/2-1475317232ymZDa1oT5epxaeqk.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/2-1475317232ymZDa1oT5epxaeqk.jpg"
    * }
    * ],
    * "created_at": "2016-10-01 10:20:32",
    * "updated_at": "2016-10-01 10:20:32"
    * },
    * "message": "Succesfully.",
    * "error": null
    * }   
     */
    
     public function getShow($id)
     {
        $eventPrPoint = $this->eventPrPointRepository->show($id);
        if (!empty($eventPrPoint)) {
         return $this->buildResponseSuccess($eventPrPoint);   
        } else {
            return $this->buildResponseError();
        }   
     }
    /**
     * Create a Prpoint.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    * @api {post} http://line-matching.dev.bap.jp/api/v1/prevents CreatEventPrPoint
    * @apiName CreatEventPrPoint
    * @apiGroup Event
    * @apiParam {string} images Images of EventPrPoint
    * @apiParam {string} content Content of EventPrPoint
    * @apiParam {integer} event_id ID_Event
    * @apiSuccess {Number} status Status Response
    * @apiSuccess {Object} date   Date Response
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response
    * {
    * "status": 201,
    * "data": {
    * "event_id": 1,
    * "content": "Quảng cáo Nhà Hàng",
    * "created_at": "2016-10-03 04:02:52",
    * "id": 4,
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/4-14754673726UJOqRPC0ErVRMJK.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/4-14754673726UJOqRPC0ErVRMJK.jpg"
    *  }
    * ]
    * },
    * "message": "Succesfully.",
    * "error": 0
    * }
     */
    
    public function postCreate(CreatEventsPrPointsRequest $request)
    {  
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $prPoint  = $this->eventPrPointRepository->create(array_merge($request->all(), ['user' => $user]));
        return $this->buildResponseCreated($prPoint);
    }
    
    /**
     * Update a Prpoint.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    * @api {post} http://line-matching.dev.bap.jp/api/v1/prevents/{id} UpdateEventPrPoint
    * @apiName UpdateEventPrPoint
    * @apiGroup Event
    * @apiParam {integer} id_events_pr_points ID-events_pr_points
    * @apiSuccess {Number} status Status Response
    * @apiSuccess {Object} date   Date Response
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response
    * {
    * "status": 201,
    * "data": {
    * "id": 1,
    * "event_id": 1,
    * "content": "Quảng cáo Nhà Hàng",
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/1-1475317169BOYNeuo5NYWGVKHx.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/1-1475317169BOYNeuo5NYWGVKHx.jpg"
    *  }
    * ],
    * "created_at": "2016-10-01 10:19:29",
    * "updated_at": "2016-10-01 10:19:29"
    *  },
    * "message": "Succesfully.",
    * "error": 0
    *    }  
     */
    
    public function postUpdate($id, UpdatePrPointRequest $request)
    {   
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $UPrPoint  = $this->eventPrPointRepository->update($id,array_merge($request->all(), ['user' => $user] ));
        return $this->buildResponseCreated($UPrPoint);
    }
     /**
     * Delete a Prpoint.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
     /**
    * @api {delete} http://line-matching.dev.bap.jp/api/v1/prevents/{id} DeleteEventPrPoint
    * @apiName DeleteEventPrPoint
    * @apiGroup Event
    * @apiParam {integer} id_events_pr_points ID-events_pr_points
    * @apiSuccess {string} status Status Response
    * @apiSuccess {Object} data EventData
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} Error of Request
    * @apiSuccessExample Response
    * {
    * "status": 200,
    *"data": true,
    *"message": "Succesfully.",
    *"error": null
    * }
      */
     public function delete($id)
    {
        $Id = $this->eventPrPointRepository->delete($id);
        if (!empty($Id)) {
            return $this->buildResponseSuccess($Id);
        } else {
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($DEPrPoint);
    }
}

