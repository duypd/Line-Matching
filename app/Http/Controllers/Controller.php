<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Response successfully
     *
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function buildResponseSuccess($data = [])
    {
        return Response::json([
            'status'    => config('status.ok'),
            'data'      => $data,
            'message'   => trans('messages.success'),
            'error'     => config('error.success')
        ]);
    }
    /**
     * Response Created
     *
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function buildResponseCreated($data = [])
    {
        return Response::json([
            'status'    => config('status.created'),
            'data'      => $data,
            'message'   => trans('messages.success'),
            'error'     => 0
        ], 201);
    }
    /**
     * Response error
     *
     * @param $status
     * @param $data
     * @param $message
     * @param $error
     * @return \Illuminate\Http\JsonResponse
     */
    protected function buildResponseError($status, $data = [], $message, $error)
    {
        return Response::json([
            'status'    => $status,
            'data'      => $data,
            'message'   => $message,
            'error'     => $error
        ]);
    }

}
