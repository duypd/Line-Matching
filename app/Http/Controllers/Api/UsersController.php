<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UsersController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
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
            'data'      => $this->userRepository->getAll(),
            'message'   => trans('messages.success')
        ]);
    }

}
