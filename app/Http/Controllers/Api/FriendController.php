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

        public function getRelationship($uid, Request $request)
        {
            $params = $request->all();
            $friend_id = $params['friend_id'];
            $relation = ConnectPlatform::getRelation($uid, $friend_id);
            return [
                'relation' => $relation
            ];
        }

    /**
    * Display a list friend.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getList($uid)
        {
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

       public function getBlockFriends($uid)
       {
           $block_friends = ConnectPlatform::getBlockFriends($uid);
           $block = array();
           foreach($block_friends->list_friends as $values) {
                $listblock = $this->model->select('id','username','email')->where('uid',$values)->get()->toArray();
                $block[] = $listblock;
            };
            return $block;   
       }

     /**
    * list request friends.
    *
    * @return \Illuminate\Http\JsonResponse
    */
        public function getRequestFriends($uid)
        {
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
        public function getWaitingRequest($uid)
        {
            $requesting = ConnectPlatform::getListIdFriendWaiting($uid);
            return[
                'requesting' => $requesting
            ];
        }

        public function getCheckList($uid, Request $request)
        {
            $params = $request->all();
            $uids = array();
            $uids = $params['uids'];
            $checklist = ConnectPlatform::isFriends($uid, array($uids));
            return [
                    $checklist
                    ];
        }
}
