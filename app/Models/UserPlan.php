<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserPlan extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'amount', 'description'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id', 'description', 'type', 'status','date_created','date_modified'];
}