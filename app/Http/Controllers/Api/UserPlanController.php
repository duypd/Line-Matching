<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserPlanRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagingRequest;
use Illuminate\Http\Request;
class UserPlanController extends Controller 
{

    public function __construct(UserPlanRepository $repo)
    {
        $this->repo = $repo;
    }

   
     /**
     * @api {get} api/v1/user_plan Get Event Packge
     * @apiName Get Event Packge
     * @apiVersion 1.0.0
     * @apiGroup UserPlan
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
     *  },
     * "plan_user": [
     * {
     * "name": "event 1",
     * "amount": "5000"
     *  },
     *  {
     * "name": "event 2",
     * "amount": "3"
     *  },
     *  {
     * "name": "event 3",
     * "amount": "2"
     *  },
     *  {
     * "name": "event 4",
     * "amount": "100000000"
     * }
     * ]
     * },
     * "message": "Succesfully.",
     * "error": 0
     *  }
     */
    
        public function getList(PagingRequest $request)
         {
            $banks = $this->repo->getList(0,['*']);
            return $this->buildResponseSuccess($banks, trans('messages.success'));
         }
        
     /**
     * @api {post} api/v1/event/:id/buy Buy Event Packge
     * @apiName Buy Event Packge
     * @apiVersion 1.0.0
     * @apiGroup UserPlan
     * @apiParam {Integer} user plans id Id User Plans
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Object} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": {
     * "note": 0,
     * "buy_event": {
     * "event_id": "1",
     * "name": "event 1",
     * "price": "5000",
     * "updated_at": "2016-10-11 07:50:29",
     * "created_at": "2016-10-11 07:50:29",
     * "id": 7
     * }
     * },
     * "message": "Succesfully.",
     * "error": 0
     *  }
     */
        public function postBuyEvent($event_id, Request $request)
        {
            $params = $request->all();
            $buy_event = $this->repo->postBuyEvent($event_id, $params);
            return $this->buildResponseCreated($buy_event, trans('messages.success'));
        }
}
