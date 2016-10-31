<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupsUsersMaps  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups_users_maps';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'group_id','user_id','is_join','id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
    ]; 
    public function Group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
}
   