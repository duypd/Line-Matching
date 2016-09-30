<?php
namespace App\Repositories;
use App\Models\GroupsUsersMaps;
use Illuminate\Database\Eloquent\Model;

class GroupsUserMapsRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(GroupsUsersMaps $groupUserMaps)
    {
        $this->model = $groupUserMaps;
    }
    
    /**
     *Creat join Events.
     * @return array
     *
     */
    public function createJoinGroup($group, array $param){
       
    	$gmap = $this->where('group_id','=',$group->id,'and')->getAll()->count();
	    if($gmap<(int)$group->user_max){
	    	\DB::transaction(function($q) use(&$joinGroup, $param,$group){
	            $joinGroup = new GroupsUsersMaps();
                $joinGroup->group_id    = $group->id;
	            $joinGroup->user_id   	= $param['user']['user']->id;
	            $joinGroup->is_join     = $param['is_join'];
	            $joinGroup->updated_at  = date('Y-m-d H:i:s');
	            $joinGroup->save();	      
	         });
	    } 	
   }
   /**
    *Leave Events
    * @param int $id
    * @param $JoinId
    * @return mixed
    *
    */
   public function destroy($id, $Id)
        {
            $LGroup = $this->where('JoinId', $Id)
                ->getBy('id', $id);
            return $LGroup->delete();
        }
}
