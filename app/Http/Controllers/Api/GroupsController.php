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
use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
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
     * UsersController constructor.
     * @param GroupRepository $groupRepository
     */
    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        return Response::json([
            'status'    => config('status.ok'),
            'data'      => $this->groupRepository->eventsList(1),
            'message'   => trans('messages.success')
        ]);
    }
    /**
     * Create a group.
     *
     * @param CreateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
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
    public function putUpdate($id,UpdateGroupRequest $request)
    {   
        $user   = array(); // get_current_user_by_token();
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

    public function delete($id)
    {
        $Id = $this->groupRepository->delete($id);
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

}
