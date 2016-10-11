<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventsPrPoints  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events_pr_points';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'event_id','content'
    ];
    /**
     * @var string
     */
    public $path = 'uploads/images/prpoint/';
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
        'images'     => 'json',
        'event_id'    => 'integer',
    ]; 
    public function event()
    {
        return $this->belongsTo(Event::class,'id');
    }
}
   