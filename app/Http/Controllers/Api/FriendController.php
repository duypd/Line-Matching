<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use ConnectPlatform;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class FriendController extends Controller
{

    protected $model;
    
    /**
     * UsersController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(User $user)
    {
        $this->model = $user;
        $this->middleware('jwt.auth');
    }


    /**
    * Display a list friend.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getList($uid){
           $friends = ConnectPlatform::getFriends($uid);
           $allfirends = array();
           foreach($friends->list_friends as $values) {
                $listfriend = $this->model->select('id','username','email')->where('uid',$values)->get()->toArray();
                $allfirends[] = $listfriend;
            };
            return $allfirends; 
        }


     /**
    * list blocked friend.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getBlockFriends($uid){
           $block_friends = ConnectPlatform::getBlockFriends($uid);
            return[
            'block_friends' => $block_friends
        ];
    }

     /**
    * list request friends.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getRequestFriends($uid){
            $request = ConnectPlatform::getListIdFriendRequest($uid);
            return[
                'request' => $request
            ];
        }
         /**
    * list requesting friends.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getWaitingRequest($uid){
            $requesting = ConnectPlatform::getListIdFriendWaiting($uid);
            return[
                'requesting' => $requesting
            ];
        }

        // public function getCheckList($uid){
        //     $uids = [4, 29, 10, 51]; 
        //     $checklist = ConnectPlatform::isFriends($uid, array $uids);
        // }

}
