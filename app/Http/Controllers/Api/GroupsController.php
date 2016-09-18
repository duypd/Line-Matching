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

use App\Http\Requests\CreateGroupRequest;
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
