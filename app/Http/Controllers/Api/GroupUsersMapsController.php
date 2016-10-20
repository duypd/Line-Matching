<?php
namespace App\Http\Controllers\Api;

use App\Repositories\Upload;
use App\Repositories\GroupsUserMapsRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class GroupUsersMapsController extends Controller
{
    /**
     * @var groupUserMapsRepository
     */
    private $groupUserMapsRepository;
    /**
     * UsersController constructor.
     * @param EventRepository $userRepository
     */
    public function __construct(GroupsUserMapsRepository $groupUserMapsRepository)
    {
        $this->groupUserMapsRepository = $groupUserMapsRepository;
    }
   
    /**
    * Delete a event.
    * @param int $id
    * @param Request $request
    * @return \Illuminate\Http\JsonResponse
    */
     /**
    *  @api {delete} http://line-matching.dev.bap.jp/api/v1/events/{id} DeleteEvent
    *  @apiName DeleteEvent
    *  @apiGroup Event
    *  @apiParam {integer} id_event ID_Event
    *  @apiSuccess {string} status Status Response
    *  @apiSuccess {Object} data EventData
    *  @apiSuccess {string} message Message Response
    *  @apiSuccess {Number} Error of Request
    *  @apiSuccessExample Response
    *  {
    *    "status": 200,
    * "data": true,
    * "message": "Succesfully.",
    * "error": null
    *    }
     */
     
    public function delete($id)
    {
        $Id = $this->eventRepository->destroy($id);
        if(!empty($Id)){
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
    
   /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */
     public function getIndex()
    {
        $groupUserMaps = $this->groupUserMapsRepository->index(0,['*']);
        return $this->buildResponseSuccess($groupUserMaps);
    }
    
     /**
    getDetailGroupUserMaps
    @param int $id
    @return \Illuminate\Http\JsonResponse
    */  
    public function getShow($id)
    {
        $groupUserMaps = $this->groupUserMapsRepository->getDetailGroupUserMaps($id);
        if(!empty($groupUserMaps)) {
         return $this->buildResponseSuccess($groupUserMaps);   
        }
        else{
            return $this->buildResponseError();
        } 
    }
}


