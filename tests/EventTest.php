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
    public function testPostEvent()
    {
      $this->json('POST', 'events', [
         'cat_id'=> '6',
         'name'=> 'test',
         'address'=> 'Dong Hoi',
         'user_id'=> '3',
         'lat'=> '1609866',
         'long'=> '108347268',
         'group_id'=> '4',
         'stats'=> '1'
        ]);
         return $event = DB::table('events')->where('name', 'test')->get();
             
    }

    /*public function testgetEventRelated()
    {
      $this->json('GET', 'related-event/1');
         return response([
                 'message' => true,
             ]);
    }

    public function testApplication()
  {
      $response = $this->call('GET', 'events');

      $this->assertEquals(404, $response->status());
  }

   public function testgetGroups()
    {
        $this->call('GET','groups')
             ->see('name')
             ->dontSee('Beta page');
    }*/
}