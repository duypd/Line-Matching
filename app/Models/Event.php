<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'cat_id','name','description','user_id','address','images'
    ];

    /**
     * @var string
     */
    public $path = 'uploads/images/event/';
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
        'images'     => 'json'
    ];
    
    public function event_group(){
        return $this->belongsTo(EventGroup::class, 'group_id', 'id');
    }


    public function event_category(){
        return $this->belongsTo(EventCategory::class, 'cat_id', 'id');
    }
}
    