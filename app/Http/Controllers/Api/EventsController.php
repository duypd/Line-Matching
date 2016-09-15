<?php


namespace App\Http\Controllers\Api;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
class EventsController extends Controller
{
    /**
     * @var eventRepository
     */
    private $eventRepository;

    /**
     * UsersController constructor.
     * @param EventRepository $userRepository
     */
    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
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
            'data'      => $this->eventRepository->eventsList(1),
            'message'   => trans('messages.success')
        ]);
    }




}
