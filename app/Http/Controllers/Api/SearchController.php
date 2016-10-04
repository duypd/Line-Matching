<?php

namespace App\Http\Controllers\Api;
use App\Repositories\SearchEventsRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagingRequest;
use App\Http\Requests\SearchEventsRequest;
use Illuminate\Http\Request;
use Response;

class SearchController extends Controller {

    private $repo;

    public function __construct(SearchEventsRepository $repo) {
        $this->repo = $repo;

    }

     /**
     * @api {get} api/v1/search-events filter Find Events
     * @apiName filter Find Events
     * @apiVersion 1.0.0
     * @apiGroup Search
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

    public function searchEvents(SearchEventsRequest $request) {
        $params = $request->all();
        $events = $this->repo->searchEvents($params);
        return $this->buildResponseCreated($events, trans('messages.success'));
    }

    public function searchEventsGroup(Request $request) {
        $params = $request->all();
        $event_groups = $this->repo->searchEventGroups($params);
        return $this->buildResponseCreated($event_groups, trans('messages.success'));
    }

   
}
