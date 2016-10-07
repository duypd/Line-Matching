<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventGroup  extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
   **/
    protected $fillable = [
        'id','name','images','leader_max','user_max','user_id','description','status','lag','log'
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
        'images'     => 'json',
    ];
    
    public function event(){
        return $this->hasMany(Event::class, 'group_id', 'id');
    }

}
   