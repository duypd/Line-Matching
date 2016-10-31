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
   //Data valid
    protected $nameValid        = 'PlaySoccer';
    protected $descriptionValid = 'we always bring you anything unexpected';
    protected $addressValid     =  '105,Nguyen Huu Tho, Thanh Khe, Da Nang';
    protected $user_maxValid    = 50;
    protected $cat_idValid      = 1;
    protected $imagesValid      ='abc.jpg';
    protected $longValid        =108.220808;
    protected $latValid         =16.049223;
    protected $statusValid      =1;
    protected $user_idValid     =1;
    protected $group_idValid    =1;

    //Data invalid
    protected $nameInValid        = ['abc',-1];
    protected $descriptionInValid = ['abc',null];
    protected $addressInValid     = ['abc',null];
    protected $user_maxInValid    = ['abc',null];
    protected $cat_idInValid      = ['abc'];
    protected $imagesInVlid       = ['abc',null];
    protected $longInValid        = ['abc'];
    protected $latInValid         = ['abc'];
    protected $statusInValid      = ['abc'];
    protected $user_idInValid     = ['abc'];
    protected $group_idInValid    = ['abc'];

    //Data saved
    protected $nameSaved        = 'PlaySoccer';
    protected $descriptionSaved = 'we always bring you anything unexpected';
    protected $addressSaved     =  '105,Nguyen Huu Tho, Thanh Khe, Da Nang';
    protected $user_maxSaved    = 50;
    protected $cat_idSaved      = 1;
    protected $imagesSaved      ='abc.jpg';
    protected $longSaved        =108.220808;
    protected $latSaved         =16.049223;
    protected $statusSaved      =1;
    protected $user_idSaved     =1;
    protected $group_idSaved         =1;
    //This function run before each test
    public function setUp()
    {
    	parent::setUp();
    	Artisan::call('migrate');
    	factory(Event::class)->create([
          'name'        => $this->$nameSaved,
          'description' => $this->$descriptionSaved,
          'address'     => $this->$addressSaved,
          'user_max'    => $this->$user_maxSaved,
          'cat_id'		=> $this->$cat_idSaved,
          'long'        => $this->$longSaved,
          'lat'			=> $this->$latSaved,
          'status'      => $this->$statusSaved,
          'user_id'		=> $this->$user_idSaved,
          'group_id'    => $this->$group_idSaved,
    		]);
    }
    // This funtion run after each test

    public function tearDown()
    {
    	Artisan::call('migrate:reset');
    	parent::tearDown();
    }

    //print out your test
    public function testPrintOut()
    {
    	print("\n\n *************EventsTest***********\n\n");
    }

    /**
     *Test validate Event's name is required
     *Expected :Return false when save Event
     *
     */
    public function testNameRequired()
    {
    	print_r("testNameRequired\n");

    	$Event = factory(Event::class)->make([
    		'name' => null,
    		]);
    	$this->assertFalse($Event->save());
    }
    
}
