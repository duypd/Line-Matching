<?php

namespace App\Http\Controllers\Api;
use App\Repositories\SearchEventsRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagingRequest;
use Illuminate\Http\Request;
use Response;

class SearchController extends Controller {

    private $repo;

    public function __construct(SearchEventsRepository $repo) {
        $this->repo = $repo;

    }

     /**
     * @api {get} api/v1/search-events  Find Events
     * @apiName Find Events
     * @apiVersion 1.0.0
     * @apiGroup Search screen
     * @apiParam {Integer} category id Category Id
     * or @apiParam {Integer} user_max Maximun User of event
     * or @apiParam {String} name Name Event
     * or @apiParam {String} address Event Location
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": {
     * "meta": {
     * "page": 1,
     * "perPage": 10,
     * "total": 1
     * },
     * "events": [
     *  {
     * "id": 5,
     * "cat_id": "1",
     * "name": "SeaGame",
     * "address": "Quảng Bình ",
     * "description": "Soccer, tennis",
     * "images": [
     * {
     * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
     * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
     * }
     *  ],
     * "user_id": 1,
     * "long": "99.99999999",
     * "lag": "16.04922300",
     * "group_id": "1",
     * "status": "1",
     * "date_start": "0000-00-00 00:00:00",
     * "date_end": "0000-00-00 00:00:00",
     * "user_max": "100",
     * "created_at": "2016-10-03 02:07:45",
     * "updated_at": "2016-10-03 02:07:45"
     *  }
     * ]
     * },
     * "message": "Succesfully.",
     * "error": 0
     * }
     */

    public function searchEvents(Request $request) {
        $params = $request->all();
        $events = $this->repo->searchEvents($params);
        return $this->buildResponseSuccess($events, trans('messages.success'));
    }


     /**
     * @api {get} api/v1/search-events-group  Find Events by Group
     * @apiName Find Events by Group
     * @apiVersion 1.0.0
     * @apiGroup Search screen
     * @apiParam {String} name Name Group
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": {
     * "meta": {
     * "page": 1,
     * "perPage": 10,
     * "total": 1
     *   },
     * "event_groups_f": [
     * {
     * "id": 1,
     * "name": "Group 1",
     * "images": [
     *    {
     * "origin": "http://line-matching.dev.bap.jp/uploads/images/groups/origin/1-1475562593kOYgkujKkeWuCC1n.jpg",
     * "thumb": "http://line-matching.dev.bap.jp/uploads/images/groups/thumb/1-1475562593kOYgkujKkeWuCC1n.jpg"
     *   }
     *   ],
     * "leader_max": "2",
     * "user_max": "50",
     * "user_id": 1,
     * "description": "Entermation",
     * "status": "1",
     * "lat": "16.04922300",
     * "long": "108.22080800",
     * "updated_at": "2016-10-04 06:29:53",
     * "event": [
     * {
     * "id": 5,
     * "cat_id": "3",
     * "name": "SeaGame 3",
     * "address": "Quảng Bình ",
     * "description": "Soccer, tennis",
     * "images": [
     * {
     * "origin": "uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg",
     * "thumb": "uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg"
     *   }
     *  ],
     * "user_id": 1,
     * "long": "108.21707200",
     * "lat": "16.05770300",
     * "group_id": "1",
     * "status": "1",
     * "date_start": "0000-00-00 00:00:00",
     * "date_end": "0000-00-00 00:00:00",
     * "user_max": "100",
     * "created_at": "2016-10-03 02:07:45",
     *     }
     *    ]
     *   }
     *  ]
     *   },
     * "message": "Succesfully.",
     * "error": 0
     * }
     */




    public function searchEventsGroup(Request $request) {
        $params = $request->all();
        $event_groups = $this->repo->searchEventGroups($params);
        return $this->buildResponseSuccess($event_groups);
    }

    /**
     * @api {get} api/v1/event-detail/:id Get Detail Event
     * @apiName Get Detail Event
     * @apiVersion 1.0.0
     * @apiGroup Search screen
     * @apiParam {Integer} event id Event Id
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Array} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": [
     * {
     * "id": 2,
     * "cat_id": "2",
     * "name": "Happy Birthday",
     * "address": "105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam",
     * "description": "Birth good",
     * "images": [
     *   {
     * "origin": "uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg",
     * "thumb": "uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg"
     * }
     * ],
     * "user_id": 0,
     * "long": "99.99999999",
     * "lag": "16.04922300",
     * "group_id": "2",
     * "status": "1",
     * "date_start": "0000-00-00 00:00:00",
     * "date_end": "0000-00-00 00:00:00",
     * "user_max": "50",
     * "created_at": "2016-10-01 09:15:59",
     * "updated_at": "2016-10-01 09:16:00",
     * "event_group": {
     * "id": 2,
     * "name": "Group 2",
     * "images": [
     * {
     * "origin": "http://line-matching.dev.bap.jp/uploads/images/groups/origin/2-1475562769mOeJN2Xuastu6Hde.jpg",
     * "thumb": "http://line-matching.dev.bap.jp/uploads/images/groups/thumb/2-1475562769mOeJN2Xuastu6Hde.jpg"
     * }
     * ],
     * "leader_max": "1",
     * "user_max": "50",
     * "user_id": 1,
     * "description": "Food And Drinks",
     * "status": "1",
     * "lag": "16.04922300",
     * "long": "108.22080800",
     * "created_at": "2016-10-04 13:47:41",
     * "updated_at": "2016-10-04 06:32:49"
     * },
     * "event_category": null
     *  }
     * ],
     * "message": "Succesfully.",
     * "error": 0
     * }
     */
     public function getEvent($id) {
        $event = $this->repo->getEvent($id);
        return $this->buildResponseSuccess($event, trans('messages.success'));

    }
   
}
