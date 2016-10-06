<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group  extends Model
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
   */
    protected $fillable = [
        'id','name','leader_max','user_max','description','status','lag','long','images'
    ];
    /**
     * @var string
     */
    public $path = 'uploads/images/groups/';

    /**
     * @var int
     */
    public $width = 400;

    /**
     * @var int
     */
    public $height = 600;
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
       return $this->hasMany(Event::class,'group_id');
    }

}
