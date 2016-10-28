<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use ConnectPlatform;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use App\Http\Requests\RegisterRequest;


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
        $this->middleware('jwt.auth');
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


    /**
    * Display user-profile from platform.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function ShowProfiles(){      

            $atributes = ['id','username','email','telephone'];
            $user_po = ConnectPlatform::profile($atributes);
            return $user_po;
    }

    /**
     *Creat a User
     * 
     *@return \Illuminate\Http\JsonResponse
     */
    public function postCreate(RegisterRequest $request)
    {
        $params = $request->all();
        $register = $this->userRepository->Register($params);
        return $this->buildResponseCreated($register, trans('messages.success'));
    }


}
