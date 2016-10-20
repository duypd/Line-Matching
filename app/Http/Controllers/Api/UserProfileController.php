<?php
namespace App\Http\Controllers\Api;
use App\Repositories\UserProfileRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Http\Request;
use App\Repositories\Upload;
use Response;
class UserProfileController extends Controller {

    private $repo;

    public function __construct(UserProfileRepository $repo) {
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

    public function postUpadte($id, UserProfileRequest $request){
        $params = $request->all();
        $user_pro = $this->repo->putUpdate($id,$params);
        return $this->buildResponseCreated($user_pro, trans('messages.success'));
    }   

     /**
     * @api {put} api/v1/user-profile-notifi/:id Update Notification User Profile
     * @apiName Update Notification User Profile
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
     * "data": [
     * {
     * "on_groups": "0",
     * "on_chat": "1",
     * "on_event": "0"
     * }
     * ],
     * "message": "Succesfully.",
     * "error": 0
     *  }
     */

    public function NotificationUpdate($id, UserProfileRequest $request) {
        $params = $request->all();
        $user_pro = $this->repo->NotificationUpdate($id,$params);
        return $this->buildResponseCreated($user_pro, trans('messages.success'));
    }   
}
