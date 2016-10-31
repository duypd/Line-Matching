<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUserPlan extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'log_user_plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id', 'name','price'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}