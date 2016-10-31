<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserToken  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_tokens';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = ['user_id','username','email', 'access_token', 'avatar', 'token'];
}
    
