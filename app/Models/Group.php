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
        'id','name','leader_max','user_max','description','status','lat','long','images','cat_id','user_id'
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
    public function groupcategory(){
        return $this->belongsTo(GroupCategory::class,'cat_id');
    } 
    public function is_leader(){
        return $this->mapLeaders()->where('user_id','=',1);/*Not complate*/
    }
    public function mapLeaders(){
        return $this->hasMany(GroupsLeaderMaps::class,'group_id');
    }
    /*public function groupusermap()
    {
        return $this->hasMany(GroupsUsersMaps::class,'group_id','id');
    }*/
}
