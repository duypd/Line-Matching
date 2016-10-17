<?php
namespace App\Repositories;
use App\Models\Group;
use App\Models\GroupsLeaderMaps;
use App\Models\User;
use App\Utilities\Upload;
use App\Events\DeleteImageEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GroupLeaderRepository extends AbstractRepository
{
    /**
     * @var Group
     */
    protected $model;
    /**
     * @var GroupsUsersMaps
     */
    protected $groupLeaderMaps;

    public function __construct(Group $group,GroupsLeaderMaps $groupLeaderMaps)
    {
        $this->model = $group;
        $this->groupLeaderMaps = $groupLeaderMaps;
    }
   /* function eventsList($userId){

        return $this->prepareQuery()->get();
    }*/
    /**
     * Get list event in my Page
     * @return array
     */
     function LeaderGroup($page = 0, $attributes = ['*'])
     {
        $leaderGroup = $this->groupLeaderMaps->select('id','user_id')->with(['user'=>function($q){
        $q->select('id','username','images','email');
        }])->get();
          return $leaderGroup; 
     }
}