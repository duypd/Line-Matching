<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::pattern('id', '\d+');
/**
 * Route Api
 */
Route::group(['prefix' => '/api/v1', 'namespace' => 'Api'], function() {

    /*
     * Route Users
     */
    post('users', ['as' => 'api.users.post.index', 'uses' => 'UsersController@postCreate']);
    get('users', ['as' => 'api.users.get.index', 'uses' => 'UsersController@index']);

    /*
     * Route Events
     */

    get('/events', ['as' => 'api.events.get.index', 'uses' => 'EventsController@getEvents']);
    get('/event/{id}', ['as' => 'api.event.get.show', 'uses' => 'EventsController@getEvent']);
    post('/events', ['as' => 'api.events.post.create', 'uses' => 'EventsController@postCreate']);
    post('/event/{id}', ['as' => 'api.events.put.update', 'uses' => 'EventsController@postUpdate']);
    delete('/events/{id}', ['as' => 'api.events.get.delete', 'uses' => 'EventsController@delete']);
    post('/events/{id}/join', ['as' => 'api.events.join.post.create', 'uses' => 'EventsController@postCreateJoinEvent']);
    delete('/events/join/{id}', ['as' => 'api.events.delete.leave', 'uses' => 'EventsController@deleteLeaveEvent']);


    /*
     * Rout PrPoint
     */
    get('/prevents', ['as' => 'api.prevents.get.index', 'uses' => 'PrPointController@index']);
    get('/prevents/{id}', ['as' => 'api.prevents.get.show', 'uses' => 'PrPointController@getShow']);
    post('/prevents', ['as' => 'api.prevents.post.create', 'uses' => 'PrPointController@postCreate']);
    post('/prevents/{id}', ['as' => 'api.prevents.post.create', 'uses' => 'PrPointController@postUpdate']);
    delete('/prevents/{id}', ['as' => 'api.prevents.delete.create', 'uses' => 'PrPointController@delete']);

    /*
     * Route Ecategories
     */
    post('/ecategories', ['as' => 'api.ecategories.post.create', 'uses' => 'EventCategoriesController@postCreate']);
    put('/ecategories/{id}', ['as' => 'api.ecategories.put.create', 'uses' => 'EventCategoriesController@putUpdate']); 
    get('/ecategories', ['as' => 'api.ecategories.get.index', 'uses' => 'EventCategoriesController@getIndex']);
    get('/ecategories/{id}', ['as' => 'api.ecategories.get.show', 'uses' => 'EventCategoriesController@getShow']);
    delete('/ecategories/{id}', ['as' => 'api.ecategories.get.delete', 'uses' => 'EventCategoriesController@delete']);
    /*
    * Route Groups
    */
    get('/groups', ['as' => 'api.group.get.index', 'uses' => 'GroupsController@getIndex']);
    post('/groups', ['as' => 'api.group.post.create', 'uses' => 'GroupsController@postCreate']);
    post('/groups/{id}', ['as' => 'api.group.put.create', 'uses' => 'GroupsController@putUpdate']);
    get('/groups/{id}', ['as' => 'api.group.get.show', 'uses' => 'GroupsController@getShow']);
    delete('/groups/{id}', ['as' => 'api.group.get.delete', 'uses' => 'GroupsController@delete']);
    post('/groups/{id}/upload', ['as' => 'api.group.upload.image', 'uses' => 'GroupsController@postUploadImage']);
    post('/groups/{id}/join', ['as' => 'api.group.join.post.create', 'uses' => 'GroupsController@postCreateJoinGroup']);
    delete('/groups/join/{id}', ['as' => 'api.group.get.leave', 'uses' => 'GroupsController@deleteLeaveGroup']);

    /**
     *Rout MyPage
     */
     get('/mypage', ['as' => 'api.mypage.get.index', 'uses' => 'MyPageController@getIndex']);
     get('/mypage/event', ['as' => 'api.mypage.get.index', 'uses' => 'MyPageController@getAllEvent']);
     get('/mypage/event/{id}', ['as' => 'api.mypage.get.index', 'uses' => 'MyPageController@getDetailEvent']);

    /*
    * Search Event
    */
    get('search-events', ['as' => 'api.search-events.get', 'uses' => 'SearchController@searchEvents']);
    get('search-events-group', ['as' => 'api.search-events-group.get', 'uses' => 'SearchController@searchEventsGroup']);
    /*
    * Related Event
    */
    get('related-event/{id}', ['as' => 'api.related-event.get', 'uses' => 'EventsController@getRelatedEvent']);
    /*
    * update User Profile
    */
    post('user-profile/{id}', ['as' => 'api.user-profile.update', 'uses' => 'UserProfileController@postUpadte']);
    put('user-profile-notifi/{id}', ['as' => 'api.user-profile-notifi.update', 'uses' => 'UserProfileController@NotificationUpdate']);
    /*
    * Buy Event
    */

    get('user_plan', ['as' => 'api.user-plan.get', 'uses' => 'UserPlanController@getList']);
    post('event/{id}/buy', ['as' => 'api.buy-event.post', 'uses' => 'UserPlanController@postBuyEvent']);
    get('event-packges', ['as' => 'api.event-packges.get', 'uses' => 'UserPlanController@getList']);
    post('event/{id}/buy', ['as' => 'api.buy-event.post', 'uses' => 'UserPlanController@postBuyEvent']);
    /*
    * Took Place Event
    */
    get('took-place-events/{group_id}', ['as' => 'api.took-place-events.get', 'uses' => 'EventsController@getTookPlaceEvents']);
    /*
    * Events Plan
    */
    get('events-plan/{group_id}', ['as' => 'api.events-plan.get', 'uses' => 'EventsController@getEventsPlan']);



});
