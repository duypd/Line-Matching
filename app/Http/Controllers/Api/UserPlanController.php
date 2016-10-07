<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserPlanRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagingRequest;
use Illuminate\Http\Request;
class UserPlanController extends Controller {

    public function __construct(UserPlanRepository $repo) {
        $this->repo = $repo;
    }

   
     /**
     * @api {get} api/v1/banks Get Banks
     * @apiName Get Banks
     * @apiVersion 1.0.0
     * @apiGroup Platform
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Array} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * 
     *  }
     */
    
    public function getList(PagingRequest $request) {
        $page = isset($request->page) ? $request->page : 1;
        $perPage = isset($request->perPage) ? $request->perPage : 10;
        $banks = $this->repo->getList($page, $perPage);
        return $this->buildResponseCreated($banks, trans('messages.success'));
    }
    
    public function postBuyEvent($event_id, Request $request){
        $params = $request->all();
        $buy_event = $this->repo->postBuyEvent($event_id, $params);
        return $this->buildResponseCreated($buy_event, trans('messages.success'));
    }
}
