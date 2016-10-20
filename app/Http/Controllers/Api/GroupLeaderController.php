<?php

namespace App\Http\Controllers\Api;

use App\Repositories\GroupLeaderRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use App\Http\Requests\RegisterRequest;

class GroupLeaderController extends Controller
{
    /**
     * @var UserRepository
     */
    private $groupLeaderRepository;

    /**
     * UsersController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(GroupLeaderRepository $groupLeaderRepository)
    {

        $this->groupLeaderRepository = $groupLeaderRepository;
    }


    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\JsonResponse
*/
    public function getLeaderGroup()
    {
        $leaderGroup = $this->groupLeaderRepository->LeaderGroup(0,['*']);
        return $this->buildResponseSuccess($leaderGroup);
    }
}
