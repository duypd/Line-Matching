<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventsUsersMaps  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events_users_maps';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'event_id','user_id','status','is_join'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
    ]; 
}
   