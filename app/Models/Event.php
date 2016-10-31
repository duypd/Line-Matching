<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [

        'cat_id','name','description','user_id','address','images','lat','long','id'
    ];

    /**
     * @var string
     */
    public $path = 'uploads/images/event/';
    /**
     * @var int
     */
    public $width = 400;

    /**
     * @var int
     */
    public $height = 400;
    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'user_id'    => 'integer',
        'images'     => 'json'
    ];
    
    public function event_group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function groups()
    {
       return $this->belongsTo('\App\Models\Group','id');
    }

    public function category()
    {
       return $this->belongsTo('\App\Models\EventCategory','id');
    }

    public function event_category()
    {
        return $this->belongsTo(EventCategory::class, 'cat_id', 'id');
    }

    public function eventPoint()
    {
        return $this->hasMany(EventsPrPoint::class, 'event_id','id');
    }
    public function is_leader()
    {
        return $this->mapLeader();
    }
    public function mapleader()
    {
        return $this->hasMany(EventsLeaderMaps::class,'event_id','id');
    }

    /**
     * hasMany PrPoint
     */
    public function prPoint()
    {
        return $this->hasMany(EventsPrPoints::class,'event_id');
    }

    /**
     * hasMany to EventUsersMaps
     */
    public function eventUsersMaps()
    {
        return $this->hasMany(EventsUsersMaps::class, 'event_id','id');
    }
    /**
     * belongsTo
     */
    public function userProfile()
    {
        return $this->hasOne(UserProfile::class,'id');
    }

    public function eventspoints()
    {
        return $this->hasMany(EventsPrPoints::class, 'event_id', 'id');
    }
}

