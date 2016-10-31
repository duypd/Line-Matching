<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDevice  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_devices';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = ['user_id','token','device'];
}
    
