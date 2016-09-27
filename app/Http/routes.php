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
    get('users', ['as' => 'api.users.get.index', 'uses' => 'UsersController@index']);

    /*
     * Route Events
     */
    get('/events', ['as' => 'api.events.get.index', 'uses' => 'EventsController@index']);
    get('/events/{id}', ['as' => 'api.events.get.show', 'uses' => 'EventsController@getShow']);
    post('/events', ['as' => 'api.events.post.create', 'uses' => 'EventsController@postCreate']);
    put('/events/{id}', ['as' => 'api.events.put.create', 'uses' => 'EventsController@putUpdate']);
    delete('/events/{id}', ['as' => 'api.events.get.delete', 'uses' => 'EventsController@delete']);
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
    get('/groups', ['as' => 'api.group.get.index', 'uses' => 'GroupsController@index']);
    post('/groups', ['as' => 'api.group.post.create', 'uses' => 'GroupsController@postCreate']);
    put('/groups/{id}', ['as' => 'api.group.put.create', 'uses' => 'GroupsController@putUpdate']);
    get('/groups/{id}', ['as' => 'api.group.get.show', 'uses' => 'GroupsController@getShow']);
    delete('/groups/{id}', ['as' => 'api.group.get.delete', 'uses' => 'GroupsController@delete']);
    post('/groups/{id}/upload', ['as' => 'api.group.upload.image', 'uses' => 'GroupsController@postUploadImage']);

});
