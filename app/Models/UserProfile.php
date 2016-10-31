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

    protected $fillable = ['user_id', 'address', 'description','on_groups', 'on_chat', 'on_event','images'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    /**
     *
     * belongsTo User
     *
     */
    public function infouser()
    {
        return  $this->belongsTo('\App\Models\User','id');
    }   

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
    /**
     * @var string
     */
    public $path = 'uploads/images/user_profiles/';
    /**
     * @var int
     */
    public $width = 400;

    /**
     * @var int
     */
    public $height = 400;

}