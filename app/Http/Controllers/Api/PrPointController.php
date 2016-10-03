<?php
namespace App\Http\Controllers\Api;
use App\Http\Requests\CreatEventsPrPointsRequest;
use App\Http\Requests\UpdatePrPointRequest;
use App\Repositories\Upload;
use App\Repositories\EventPrPointRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
class PrPointController extends Controller
{
    /**
     * @var eventPrPointRepository
     */
    private $eventPrPointRepository;
    /**
     * UsersController constructor.
     * @param EventPrPointRepository $eventPrPointRepository
     */
    public function __construct(EventPrPointRepository $eventPrPointRepository)
    {

        $this->eventPrPointRepository  = $eventPrPointRepository;
    }

    /**
     * Create a Prpoint.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    
    public function postCreate(CreatEventsPrPointsRequest $request)
    {  
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $prPoint  = $this->eventPrPointRepository->create(array_merge($request->all(), ['user' => $user]));
        return $this->buildResponseCreated($prPoint);
    }
    /**
     * Update a Prpoint.
     *
     * @param CreateEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUpdate($id, UpdatePrPointRequest $request)
    {   
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $UPrPoint  = $this->eventPrPointRepository->update($id,array_merge($request->all(), ['user' => $user] ));
        return $this->buildResponseCreated($UPrPoint);
    }
     /**
     * Delete a Prpoint.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
     public function delete($id)
    {
        $Id = $this->eventPrPointRepository->delete($id);
        if(!empty($Id))
        {
            return $this->buildResponseSuccess($Id);
        }else{
            return $this->buildResponseError();
        }

        return $this->buildResponseSuccess($DEPrPoint);
    }
}

