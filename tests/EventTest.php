<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventTest extends TestCase
{
  /**
    * A basic test example.
    *
    * @return void
    */
   protected $params = array(
       'name' => 'TestEvent',
       'description' => 'Unit Test description',
       'address' => '108 Hourse',
       'user_max' => 50,
       'cat_id' => 1,
       'images[]' => 'Unit Test',
       'long' =>108.220808,
       'lat' =>16.049223,
       'status' => 1,
       'user_id' =>1,
       'group_id'=>1
       );  
   public function setupDatabase()
    {
        Artisan::call('migrate:refresh');
        Artisan::call('db:line_matching');
        $this->migrated = true;
    }

   public function testExample()
   {
       $this->post('/events',$this->params)
       ->seeJsonStructure([
              'status',
              'data' => ['project'],
              'message',
              'error'
          ])
       ->seeJson([
              'status' => 201,
              'message' => trans('event.create_event_success'),
              'error' => 0
          ]);
  }
}