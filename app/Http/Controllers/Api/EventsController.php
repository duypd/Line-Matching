<?php


namespace App\Http\Controllers\Api;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
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

    /**
     * Create a EventCategories.
     *
     * @param CreateEventCategoriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate(CreateEventRequest $request)
    {
        $user   =  array(); //get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $event  = $this->eventRepository->create(array_merge($request->all(), ['user' => $user]));

        return $this->buildResponseCreated($event);
    }




}
