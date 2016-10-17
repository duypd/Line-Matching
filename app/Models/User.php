<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','images','telephone','id','status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
      /**
     * @var string
     */
    public $path = 'uploads/images/User/';
    /**
     * @var int
     */
    public $width = 400;

    /**
     * @var int
     */
    public $height = 400;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'user_id'    => 'integer',
        'images'     => 'json',
    ];

    public function groupleadermap()
    {
        return $this->hasMany(GroupsLeaderMaps::class,'user_id');
    }
    public function event()
    {
        return $this->belongsTo(Event::class,'user_id');
    }   
    /*Join To Event Leader*/
    public function eventLeaderMap()
    {
        return $this->hasOne(EventLeaderMaps::class,'user_id');
    }

    /**
     * hasOne to UserProfile
     */
    public function userProfile()
    {
        return $this->hasOne(UserProfile::class ,'user_id','id');
    }
}
