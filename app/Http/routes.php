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
    get('events', ['as' => 'api.events.get.index', 'uses' => 'EventsController@index']);

    /*
     * Route Ecategories
     */
    post('/ecategories', ['as' => 'api.ecategories.post.create', 'uses' => 'EventCategoriesController@postCreate']);
   
    put('/ecategories/{id}', ['as' => 'api.ecategories.put.create', 'uses' => 'EventCategoriesController@putUpdate']);


    /*
    * Route Groups
    */
    post('/groups', ['as' => 'api.group.post.create', 'uses' => 'GroupsController@postCreate']);
    post('/groups/{id}/upload', ['as' => 'api.group.upload.image', 'uses' => 'GroupsController@postUploadImage']);

});
