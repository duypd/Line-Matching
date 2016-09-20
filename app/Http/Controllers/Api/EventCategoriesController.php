<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace App\Http\Controllers\Api;

use App\Repositories\EventCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventCategoriesRequest;
use App\Http\Requests\UpdateEventCategoriesRequest;
use App\Http\Controllers\Controller;
use Response;

class EventCategoriesController extends Controller
{
    /**
     * @var $eventCategoryRepository
     */
    private $eventCategoryRepository;

    /**
     * EventCategoriesController construct.
     * @param EventCategoryRepository $eventCategoryRepository
     */
    public function __construct(EventCategoryRepository $eventCategoryRepository)
    {
        $this->eventCategoryRepository = $eventCategoryRepository;
    }

    /**
     * Create a EventCategories.
     *
     * @param CreateEventCategoriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate(CreateEventCategoriesRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];
        $eCategories  = $this->eventCategoryRepository->create(array_merge($request->all(), ['user' => $user]));

        return $this->buildResponseCreated($eCategories);
    }

    /**
     * Update a EventCategories.
     *
     * @param UpdateEventCategoriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id,UpdateEventCategoriesRequest $request)
    {
        $user   = array(); // get_current_user_by_token();
        $user['user']['id'] = 1;
        $user['user'] = (object) $user['user'];

        $UCategories  = $this->eventCategoryRepository->update($id,array_merge($request->all(), ['user' => $user] ));

        return $this->buildResponseCreated($UCategories);
    }

     /**
     * Delete a eventCategory.
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete($id)
    {
        $Id = $this->eventCategoryRepository->delete($id);
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
    public function getIndex()
    {
        $ecategories = $this->eventCategoryRepository->index(0,['*']);
        return $this->buildResponseSuccess($ecategories);
       
    }
    public function getShow($id){
        $eCategory = $this->eventCategoryRepository->show($id);
        if(!empty($eCategory)){
         return $this->buildResponseSuccess($eCategory);   
        }
        else{
            return $this->buildResponseError();
        }
        
    }

}
