<?php


namespace App\Http\Controllers\Api;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Repositories\Upload;
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
     * Create a Event.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate(CreateEventRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $event  = $this->eventRepository->create(array_merge($request->all(), ['user' => $user]));
        return $this->buildResponseCreated($event);
    }
    /**
     * Update a Event.
     *
     * @param UpdateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id,UpdateEventRequest $request)
    {   
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];

        $UEvent  = $this->eventRepository->update($id,array_merge($request->all(), ['user' => $user] ));

        return $this->buildResponseCreated($UEvent);
    }
     /**
     * Delete a event.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete($id)
    {
        $Id = $this->eventRepository->delete($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($eventId);
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
<<<<<<< HEAD
     /**
    getShow
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */
    public function getShow($id){
        $events = $this->eventRepository->show($id);
        if(!empty($events)){
         return $this->buildResponseSuccess($events);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }
=======

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




>>>>>>> origin/chauttn/general_core
}
