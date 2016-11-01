<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
   public function setupDatabase()
    {
      Artisan::call('migrate:refresh');
      Artisan::call('db:line_matching_v2');
      $this->migrated = true;
    }
     public function testCreateEvent()
    {
      $params = array(
        'name'        => 'SeamGame',
        'description' => 'Unit Test',
        'address'     => '105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam',
        'user_max'    => 50,
        'cat_id'      => 1,
        'images'      => 'Unit.jpg',
        'long'        =>108.220808,
        'lat'         =>16.049223,
        'status'      =>1,
        'user_id'     =>1,
        'group_id'    =>1,
        );    
        $this->post('api/v1/events',$params)
        ->seeJsonStructure([
               'status',
               'data' => ['name'],
               'message',
               'error'          
           ])
        ->seeJson([
               'status' => 201,
               'message' => trans('Succesfully'),
               'error' => 0
           ]);
   }
}
