<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace App\Http\Controllers\Api;

use App\Repositories\EventCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventCategoriesRequest;
use App\Http\Requests\UpdateEventCategoriesRequest;
use App\Http\Controllers\Controller;
use Response;

class EventCategoriesController extends Controller
{
    /**
     * @var $eventCategoryRepository
     */
    private $eventCategoryRepository;

    /**
     * EventCategoriesController construct.
     * @param EventCategoryRepository $eventCategoryRepository
     */
    public function __construct(EventCategoryRepository $eventCategoryRepository)
    {
        $this->eventCategoryRepository = $eventCategoryRepository;
    }

    /**
     *
    * @api {post} http://line-matching.dev.bap.jp/api/v1/ecategories CreatEventCategory
    * @apiName CreateEventCategory
    * @apiGroup EventCategory
    * @apiParam {String} name Name eventCategory
    * @apiSuccess {Number} status Status Response
    * @apiSuccess {Object} data Data Response
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response:
    * {
    * "status": 201,
    * "data": {
    * "name": "Hayppy News Years",
    * "status": 1,
    * "updated_at": "2016-10-03 02:54:59",
    * "created_at": "2016-10-03 02:54:59",
    * "id": 1
    * },
    * "message": "Succesfully.",
    * "error": 0
    * }
    * }
     */
    

    /**
     * Create a EventCategories.
     *
     * @param CreateEventCategoriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate(CreateEventCategoriesRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $eCategories  = $this->eventCategoryRepository->create(array_merge($request->all(), ['user' => $user]));

        return $this->buildResponseCreated($eCategories);
    }
    /**
    * @api {put} http://line-matching.dev.bap.jp/api/v1/ecategories/{id} Update EventCategory
    * @apiName Update EventCategory
    * @apiGroup EventCategory
    * @apiParam {string} status Status
    * @apiParam {string}  name Name EventCategory
    * @apiSuccess {Number} status Status Reponse
    * @apiSuccess {Object}  data Data Reponse
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiExample Response:
    * {
    * "status": 201,
    * "data": {
    * "id": 1,
    * "name": "check_event",
    * "status": "1",
    * "created_at": "2016-10-03 02:54:59",
    * "updated_at": "2016-10-03 03:02:23"
    * },
    * "message": "Succesfully.",
    * "error": 0
    * }
    */
    
    /**
     * Update a EventCategories.
     *
     * @param UpdateEventCategoriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id,UpdateEventCategoriesRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];

        $UCategories  = $this->eventCategoryRepository->update($id,array_merge($request->all(), ['user' => $user] ));

        return $this->buildResponseCreated($UCategories);
    }

     /**
     * Delete a eventCategory.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
     /**
    *@api {delete} http://line-matching.dev.bap.jp/api/v1/ecategories/{id} Delete EventCategory
    *@apiName Delete EventCategory
    *@apiGroup EventCategory
    *@apiParam {integer} EventCategiry_id ID EventCategory        
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} date   Date Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiExample Response:
    *{    *  "status": 200,
    * "data": true,
    *  "message": "Succesfully.",
    *  "error": null
    * }
    */
     
    public function delete($id)
    {
        $Id = $this->eventCategoryRepository->delete($id);
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
    *@api {get} http://line-matching.dev.bap.jp/api/v1/ecategories ListEventCategory
    *@apiName getList
    *@apiGroup EventCategory
    *@apiSuccess {Number} status Status Response
    * @apiSuccess {Object} date   Date Response
    *@apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiExample Response:
    * {
    * "status": 200,
    * "data": {
    * "total": 22,
    * "per_page": 10,
    * "current_page": 1,
    * "last_page": 3,
    * "next_page_url": "http://line-matching.dev.bap.jp/api/v1/ecategories?page=2",
    * "prev_page_url": null,
    * "from": 1,
    * "to": 10,
    * "data": [
    *  {
    *  "id": 8,
    *  "name": "die",
    *  "status": "1",
    *  "created_at": "2016-09-19 09:10:37",
    *  "updated_at": "2016-09-19 09:10:37"
    *  },   
    *  {
    *  "id": 19,
    *  "name": "bycial",
    *  "status": "1",
    *  "created_at": "2016-09-20 06:53:21",
    *  "updated_at": "2016-09-20 06:53:21"
    *  }
    *  ]
    *  },
    * "message": "Succesfully.",
    * "error": null
    *}
     */
    
    public function getIndex()
    {
        $ecategories = $this->eventCategoryRepository->index(0,['*']);
        return $this->buildResponseSuccess($ecategories);
       
    }
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/ecategories/{id} GetDetailEventCategory
    *@apiName getDetailCategory
    *@apiGroup EventCategory
    * @apiParam {integer} id_eventcategory ID_EventCategoy
    * @apiSuccess {Number} status Status Response
    * @apiSuccess {Oject}  data Data Response
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiExample Response:
    * {
    * "status": 200,
    * "data": {
    * "id": 22,
    * "name": "check_event",
    * "status": "1",
    * "created_at": "2016-09-20 07:00:09",
    * "updated_at": "2016-09-28 03:04:19"
    * },
    * "message": "Succesfully.",
    * "error": null
    * }
     */
    
    public function getShow($id){
        $eCategory = $this->eventCategoryRepository->show($id);
        if(!empty($eCategory)){
         return $this->buildResponseSuccess($eCategory);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }

}
