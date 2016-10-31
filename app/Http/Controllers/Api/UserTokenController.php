<?php
namespace App\Http\Controllers\Api;

use App\Repositories\UserTokenRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

class UserTokenController extends Controller {

    private $repo;

    public function __construct(UserTokenRepository $repo) 
    {
        $this->repo = $repo;
    }

     /**
     * @api {put} api/v1/user-profile/:id Update User Profile
     * @apiName Update User Profile
     * @apiVersion 1.0.0
     * @apiGroup UserProfile
     * @params(Integer) profile user id Profile User Id
     * @params(Integer) User id  User Id (form users table)
     * @params(String)  address of user Address User Profile
     * @params(String)  description of user Description User Profile
     * @apiSuccess {Number} status Status return
     * @apiSuccess {Array} data Data return
     * @apiSuccess {String} message Message return
     * @apiSuccess {String} error Error return
     * @apiSuccessExample Response:
     * {
     * "status": 201,
     * "data": {
     * "id": "1",
     * "user_id": "2",
     * "avatar": "abc.jpg",
     * "address": "America",
     * "description": "Test upload",
     * "on_groups": "1",
     * "on_chat": "0",
     * "on_event": "1",
     * "created_at": "-0001-11-30 00:00:00",
     * "updated_at": "2016-10-07 10:05:20"
     *  },
     * "message": "Succesfully.",
     * "error": 0
     *  }
     */

    public function postCreateToken(Request $request)
    {
        $params = $request->all();
        $token = $this->repo->CreateUser($params);
        return $this->buildResponseCreated(['token' => $token]);
    }   
}
