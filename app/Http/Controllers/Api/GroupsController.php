<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace App\Http\Controllers\Api;

use App\Repositories\GroupRepository;
use App\Repositories\GroupsUserMapsRepository;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Http\Requests\CreateJoinGroupRequest;
use App\Http\Requests\UploadAlbumRequest;
use App\Http\Controllers\Controller;
use Response;
class GroupsController extends Controller
{
    /**
     * @var $groupRepository
     */
    private $groupRepository;

    /**
     * @var $groupUserMapsRepository
     */
    private $groupUserMapsRepository;

    /**
     * UsersController constructor.
     * @param GroupRepository $groupRepository
     */
    public function __construct(GroupRepository $groupRepository, GroupsUserMapsRepository $groupUserMapsRepository)
    {
        $this->groupRepository = $groupRepository;
        $this->groupUserMapsRepository =$groupUserMapsRepository;
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/groups ListGroup
    *@apiName ListGroup
    *@apiGroup Group
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data Data Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response:
    *{
    *"status": 200,
    *"data": [
    * {
    * "id": 1,
    * "name": "Group great",
    * "images": [
    * {
    * "origin": "uploads/images/groups/origin/1-1475464381NlUlKOiBRkLjqwra.jpg",
    * "thumb": "uploads/images/groups/thumb/1-1475464381NlUlKOiBRkLjqwra.jpg"
    *  }
    * ],
    * "leader_max": "50",
    * "user_max": "50",
    * "user_id": 1,
    * "description": "descripton of the group",
    * "status": "0",
    * "lag": "15.24554100",
    *  "long": "21.25400000",
    *  "created_at": "2016-10-03 10:12:49",
    *  "updated_at": "2016-10-03 03:13:01"
    *  },
    *  {
    * "id": 2,
    * "name": "Group great",
    *  "images": [
    *  {
    * "origin": "uploads/images/groups/origin/2-1475464541VXBznZso1uvK6oyn.jpg",
    * "thumb": "uploads/images/groups/thumb/2-1475464541VXBznZso1uvK6oyn.jpg"
    *  }
    * ],
    * "leader_max": "50",
    * "user_max": "50",
    * "user_id": 1,
    * "description": "descripton of the group",
    * "status": "1",
    * "lag": "15.24554100",
    * "long": "21.25400000",
    * "created_at": "2016-10-03 10:15:29",
    *  "updated_at": "2016-10-03 03:15:41"
    * }
    *  ],
    *  "message": "Succesfully."
    *  } 
    *   */
      
       public function getIndex()
    {
        $group = $this->groupRepository->index(0,['*']);
        return $this->buildResponseSuccess($group);
       
    }
    /**
     * Create a group.
     *
     * @param CreateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
     /**
    * @api {post} http://line-matching.dev.bap.jp/api/v1/groups CreatGroup
    * @apiName Creat Group
    * *@Group Group
    * @apiParam {string} name Name Group
    * @apiParam {integer} leader_max The maximum number people of Group
    * @apiParam {Number}  status Status of Group
    * @apiParam {integer} user_id ID of User
    * @apiParam {integer} user_max The maximum number people of Group
    * @apiParam {string} Description of Group
    * @apiParam {string} Image of Group
    * @apiParam {Number} long  Latitude
    * @apiParam {Number} lag   Longitude
    * @apiSuccess {Number}  status Status Response
    * @apiSuccess {Object} data Data Response
    * @apiSuccess {string} message Message Response
    * @apiSuccess {Number} error Error of request
    * @apiSuccessExample Response:
    * "status": 201,
    * "data": {
    * "user_id": 1,
    * "leader_max": "50",
    * "user_max": "50",
    * "name": "Group great",
    * "description": "descripton of the group",
    * "status": "0",
    * "lag": "15.245541",
    * "long": "21.254",
    * "updated_at": "2016-09-28 08:06:10",
    * "images": [
    *     {
    *         "origin": "uploads/images/groups/origin/-1475049970VCstKCBvpA0qynZu.jpg",
    *         "thumb": "uploads/images/groups/thumb/-1475049970VCstKCBvpA0qynZu.jpg"
    *     }
    * ],
    * "created_at": "2016-09-28 08:06:10",
    * "id": 83
    * },
    * "message": "Succesfully.",
    * "error": 0
    *     }
     */
    public function postCreate(CreateGroupRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];

        $group  = $this->groupRepository->create(array_merge($request->all(), ['user' => $user]));

        return $this->buildResponseCreated($group);
    }
        /**
     * Update a Event.
     *
     * @param UpdateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
       /**
    * @api {put} api.group.put.create ChangeGroup
    * @apiName ChangeGroup
    * @apiGroup Group
    * @apiParam {string} name Name of Group
    * @apiParam {integer} leader_max The maximum number people of Group
    * @apiParam {integer} user_max The maximum number people of Group
    * @apiParam {string}  description Description of Group
    * @apiParam {Number} long  Latitude
    * @apiParam {Number}  lag  Longitude 
    * @apiParam {integer} user_id ID_User
    * @apiSuccess{integer} group_id ID-Group
    * @apiSuccess {string} name Name of Group
    * @apiSuccess {integer} leader_max The maximum number people of Group
    * @apiSuccess {integer} user_max The maximum number people of Group
    * @apiSuccess {string}  description Description of Group
    * @apiSuccess {Number} long  Latitude
    * @apiSuccess {Number}  lag  Longitude 
    * @apiSuccess {integer} user_id ID_User
    * @apiSuccessExample Response:
    *  {
    * "status": 201,
    * "data": {
    * "id": 68,
    * "name": "Group 2",
    * "images": null,
    * "leader_max": "50",
    * "user_max": "100",
    * "user_id": 1,
    * "description": "Big Group",
    * "status": "30",
    * "lag": "0.00000000",
    * "long": "0.00000000",
    * "created_at": "2016-09-23 08:22:38",
    * "updated_at": "2016-09-28 08:11:04"
    * },
    * "message": "Succesfully.",
    * "error": 0
    *  */
         
    public function putUpdate($id,UpdateGroupRequest $request)
    {   
        $user   = array(); //  get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $UGroup  = $this->groupRepository->update($id,array_merge($request->all(), ['user' => $user] ));
        return $this->buildResponseCreated($UGroup);
    }
     /**
     * Delete a Group.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
      /**
    *@api {delete} http://line-matching.dev.bap.jp/api/v1/groups/{id} DeleteGroup
    *@apiName DeleteGroup
    *@apiGroup Group
    *@apiParam {integer} group_id ID Group       
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} date   Date Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiExample Response:
    *{
    *  "status": 200,
    * "data": true,
    *  "message": "Succesfully.",
    *  "error": null
    * }
    */
    public function delete($id)
    {
        $Id = $this->groupRepository->destroy($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($groupId);
    }
    /**
    getShow
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
     /**
    getShow
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
    /**
    *@api {get} http://line-matching.dev.bap.jp/api/v1/groups/{id} getDetailGroup
    *@apiName getDetailGroup
    *@apiGroup Group
    *@apiParam {integer} id_group ID-Group
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data Date Response
    *@apiSuccess {string} message Message Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response:
    *{
    *"status": 200,
    *"data": {
    *"id": 2,
    * "name": "Group great",
    * "images": [
    * {
    * "origin": "uploads/images/groups/origin/2-1475464541VXBznZso1uvK6oyn.jpg",
    * "thumb": "uploads/images/groups/thumb/2-1475464541VXBznZso1uvK6oyn.jpg"
    * }
    * ],
    * "leader_max": "50",
    * "user_max": "50",
    * "user_id": 1,
    * "description": "descripton of the group",
    * "status": "1",
    * "lag": "15.24554100",
    * "long": "21.25400000",
    * "created_at": "2016-10-03 10:15:29",
    * *"updated_at": "2016-10-03 03:15:41"
    *},
    *"message": "Succesfully.",
    *"error": null
    *}
    **/
    
    public function getShow($id){
        $group = $this->groupRepository->show($id);
        if(!empty($group)){
         return $this->buildResponseSuccess($group);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }
    /**
     * Create a group Upload
     *
     * @param CreateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
     * @param array $beforeFilters
     */
    public function setCURL(Request $request)
    {
        $url = "http://maps.google.com/maps/api/geocode/json?address=UK+Hull&sensor=false&region=England";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = (object) curl_exec($ch);
        curl_close($ch);
    }
    /**
     * Create a group Upload
     *
     * @param CreateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public  function postUploadImage($id, UploadAlbumRequest $request){
        $result = $this->groupRepository->upload($id, $request->file('image'));

        return $this->buildResponseSuccess($result);
    }
    /**
     * Join a Group.
     *
     * @param CreateJoinGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
      /**
    *@api {post} http://line-matching.dev.bap.jp/api/v1/groups/{id}/join CreateJoinGroup
    *@apiName CreatJoinGroup
    *@apiGroup Group
    *@apiParam {integer} id_group ID_Group
    *@apiParam {integer} is_join  Status 1:join | 0:leave | -2:block
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data   Date Response
    *@apiSuccess {string} message status Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response:
    *{
    *"status": 201,
    *"data": null,
    *"message": "Succesfully.",
    *"error": 0
    * }
    * 
    * */
    public function postCreateJoinGroup($id, CreateJoinGroupRequest $request){
        $user = array();
        $group =$this->groupRepository->getBy('id',$id,['id','user_max']);
        $user['user']['id'] =1;
        $user['user'] =(object)$user['user'];
        $JoinGroup = $this->groupUserMapsRepository->createJoinGroup($group, array_merge($request->all(),['user'=>$user]));
        return $this->buildResponseCreated($JoinGroup);
    }
    /**
     * Leave Group.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
    *@api {delete} http://line-matching.dev.bap.jp/api/v1/groups/join/{id} LeaveGroup
    *@apiName LeaveGroup
    *@apiGroup Group
    *@apiParam {integer} groups_users_maps ID-groups_users_maps
    *@apiSuccess {Number} status Status Response
    *@apiSuccess {Object} data   Date Response
    *@apiSuccess {string} message status Response
    *@apiSuccess {Number} error Error of request
    *@apiSuccessExample Response:
    *{
    *"status": 201,
    *"data": true,
    *"message": "Succesfully.",
    *"error": 0
    * }  
    **/
      public function deleteLeaveGroup($id)
    {
        $Id = $this->groupUserMapsRepository->delete($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($JoinId);
    }

}
