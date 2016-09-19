<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    public function responseJson()
    {
        return Response::json([
            'status'    => config('status.ok'),
            'data'      => $this->userRepository->getAll(),
            'message'   => trans('messages.success')
        ]);
    }

}

