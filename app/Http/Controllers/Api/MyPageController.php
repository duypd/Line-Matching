<?php
namespace App\Http\Controllers\Api;

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
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/mypage ListGroupAndEvent
    *@apiName ListGroupAndEvent 
    *@apiGroup MyPage
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data Data Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response
    *{
    * "status": 200,
    * "data": [
    * {
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ],
    * "date_start": "2016-10-06 00:00:00",
    * "name": "birth day",
    * "user_max": "0",
    * "id": 1,
    * "is_leader": 1,
    * "groups": null,
    * "category": null
    * },
    * {
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
    * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
    * }
    * ],
    * "date_start": "2016-10-20 00:00:00",
    * "name": "Thi chim canh",
    * "user_max": "0",
    * "id": 2,
    * "is_leader": 1,
    * "groups": null,
    * "category": null
    * },
    * {
    * "images": [
    * {
    * "origin": "http://line-matching.dev.bap.jp/uploads/images/event/origin/17-1476264116Nauzhcx5WOInr19D.jpg",
    * "thumb": "http://line-matching.dev.bap.jp/uploads/images/event/thumb/17-1476264116Nauzhcx5WOInr19D.jpg"
    * }
    * ],
    * "date_start": "0000-00-00 00:00:00",
    * "name": "SeaGame",
    * "user_max": "50",
    * "id": 5,
    * "is_leader": 0,
    * "groups": null,
    * "category": {
    * "id": 5,
    * "name": "Chat hobby"
    * }
    * }
    * ],
    * "message": "Succesfully.",
    * "error": null
    * }
    **/

    public function getGroupAll()
    { 
       $group = $this->groupRepository->getGroupall(0,['*']);
       return $this->buildResponseSuccess($group);
    }

    /**
    *GetList Event
    *@return \Illuminate\Http\JsonResponse
    */
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/mypage/event ListEvent
    *@apiName ListEvent 
    *@apiGroup MyPage
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data Data Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response
    * {
    * "status": 200,
    * "data": [
    * {
    * "group_id": "2",
    * "images": [
    * {
    * "origin": "uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg",
    * "thumb": "uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg"
    * }
    * ],
    * "date_start": "0000-00-00 00:00:00",
    * "name": "Happy Birthday 1",
    * "user_max": "50",
    * "id": 2,
    * "cat_id": "2",
    * "groups": {
    * "id": 2,
    * },
    * "category": null
    * },
    * {
    * "group_id": "3",
    * "images": [
    *  {
    * "origin": "uploads/images/event/origin/3-1475313633mr9nKJM0ane0pLUw.jpg",
    * "thumb": "uploads/images/event/thumb/3-1475313633mr9nKJM0ane0pLUw.jpg"
    * }
    * ],
    * "date_start": "0000-00-00 00:00:00",
    * "name": "Open soon restaurant 2",
    * "user_max": "50",
    * "id": 3,
    * "cat_id": "20",
    * "groups": {
    * "id": 3,
    * "name": "Group 3"
    *  },
    * "category": {
    * "id": 3,
    * "name": "Sports, Fitness"
    * }
    * }
    * ],
    * "message": "Succesfully.",
    * "error": null
    * }
    *
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
     /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/mypage/event{id} ListDetailEvent
    *@apiName ListDetailEvent 
    *@apiGroup MyPage
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data Data Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response
    *{
    *"status": 200,
    *"data": {
    *"id": 2,
    *"cat_id": "2",
    *"name": "Happy Birthday 1",
    *"address": "504-508 Ông Ích Khiêm, Hải Châu 2, Đà Nẵng, Việt Nam",
    *"description": "Birth good",
    *"images": [
    *{
    *"origin": "uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg",
    *"thumb": "uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg"
    *}
    *],
    *"user_id": 0,
    *"long": "108.21574200",
    *"lat": "16.06317400",
    *"group_id": "2",
    *"status": "0",
    *"date_start": "0000-00-00 00:00:00",
    *"date_end": "0000-00-00 00:00:00",
    *"user_max": "50",
    *"created_at": "2016-10-01 09:15:59",
    *"updated_at": "2016-10-01 09:16:00"
    *},
    *"message": "Succesfully.",
    *"error": null
    *}
    */
     public function getDetailEvent($id)
     {
        $eventId = $this->eventRepository->show($id);
        if(!empty($eventId)){
         return $this->buildResponseSuccess($eventId);   
         }else{
            return $this->buildResponseError();
         }
        
    }
 
}

