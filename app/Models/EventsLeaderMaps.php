<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventsLeaderMaps  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events_leader_maps';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'event_id','user_id','is_join','id','status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
    ]; 
    public function Event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
