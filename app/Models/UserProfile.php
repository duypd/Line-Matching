<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserProfile extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'address', 'description','on_groups', 'on_chat', 'on_event'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}