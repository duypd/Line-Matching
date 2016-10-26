<?php
namespace App\Repositories;

use Cache;
use App\Models\Group;
use App\Models\GroupCategory;
use App\Models\GroupsUsersMaps;
use App\Models\GroupsLeaderMaps;
use App\Utilities\Upload;
use App\Events\DeleteImageEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GroupRepository extends AbstractRepository
{
    /**
     * @var Group
     */
    protected $model;
     /**
     * @var GroupsUsersMaps
     */
    protected $groupsUsersMaps;
    /**
     * @var GroupsUsersMaps
     */
    protected $groupLeaderMaps;

    public function __construct(Group $group, GroupsUsersMaps $groupsUsersMaps,
        GroupsLeaderMaps $groupLeaderMaps)
    {
        $this->model = $group;
        $this->groupsUsersMaps = $groupsUsersMaps;
        $this->groupLeaderMaps = $groupLeaderMaps;
    }
   /* function eventsList($userId){

        return $this->prepareQuery()->get();
    }*/
        /**
     * Get list event categories.
     *
     *
     * @return array
     */

    public function index($page = 0, $attributes = ['*'])
    {
       $result = $this->paginate($attributes); 
       return  $result->toArray();
    }
    /**
     * Create a group
     *
     * @param array $param
     * @return mixed
     */
    public function create(array $param)
    {
            $group = new Group();
            $group->user_id     = $param['user']['user']->id;
            $group->leader_max  = $param['leader_max'];
            $group->user_max    = $param['user_max'];
            $group->name        = $param['name'];
            $group->description = $param['description'];
            $group->status      = $param['status'];
            $group->lat         = $param['lat'];
            $group->long        = $param['long'];
            $group->updated_at  = date('Y-m-d H:i:s');
            $group->save();
            if (!empty($param['images'])) {
                 $upload = $this->__postImageGroup($group,$param['images']);
                 $image = $group->images;
                 $group->images =$upload;  
                 $group->images =  transfer_url_images($group->images); 
                 $group->save();
                 if (! empty($image)) {
                    event(new DeleteImageEvent($image));
            }
         }         
        return $group;
    }
     /**
     * update Group.
     *
     *
     * @return array
     */
    public function update($id, array $params)
    {
        $UGroup = $this->getBy('id', $id);
        Cache::forget('group_'.$id);
        $UGroup->name = !empty($params['name']) ? $params['name'] : $UGroup->name;
        $UGroup->description = !empty($params['description']) ? $params['description'] : $UGroup->description;
        $UGroup->user_id = !empty($params['user_id']) ? $params['user_id'] : $UGroup->user_id;
        $UGroup->user_max = !empty($params['user_max']) ? $params['user_max'] : $UGroup->user_max;
        $UGroup->status = !empty($params['status']) ? $params['status']: $UGroup->status;
        $UGroup->status = !empty($params['long']) ? $params['long']: $UGroup->status;
        $UGroup->status = !empty($params['lat']) ? $params['lat']: $UGroup->status;
        $UGroup->status = !empty($params['leader_max']) ? $params['leader_max']: $UGroup->status;
        $UGroup->save();
        return $UGroup;
        $upload = $this->__postImageGroup($UGroup,$params['images']);
        if(!empty($params['images'])){
            $image = $UGroup->images;
            $UGroup->images =$upload;
            $UGroup->save();
        }
    }
    /**
     * Delete a record Group.
     *
     * @param int $id
     * @param $eventId
     * @return mixed
     */
    public function destroy($id)
        {
            Cache::forget('group_'.$id);
            $DGroup = $this->model->where('id', $id);
            return $DGroup->delete();
        }
      /**
     * show Group.
     *
     * @param $id
     * @return object $group
     */

    public function show($id){ 
              $group =  Cache::remember('group_'.$id,3600,function()use($id){
              return 
              $this->model->where('status',1)->where('id', $id)->get();
          });
         return $group;
    }
     /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */

    public function __postImageGroup($group,$files)
    {
        $data =array();
        foreach ($files as $file)
        {
            $upload = new Upload($group->path, $group->width, $group->height, $file);
            $data[] = $upload->handle($group);
        }      
         return $data;
    }
    /**
     * Get list group.
     * @return array
     */
    /**
     * Get list event in my Page
     * @return array
     */
     function getGroupall($page = 0, $attributes = ['*'])
     {
            
        $filtergroup = ['images','name','id','cat_id'];
        $resultgroup = $this->model->select($filtergroup)
                                    ->with(['groupcategory' => function($a){
                                        $a->select('id','name');}])
                                   ->paginate(5);
        $resultleader = $this->groupLeaderMaps->select('group_id')->get()->toArray();
        foreach($resultgroup as $key => $values) {
            if(in_array(['group_id' => $values['id']],$resultleader)){
                $resultgroup[$key]['is_leader'] = 1;   
            }else {
                $resultgroup[$key]['is_leader'] = 0; 
            }
        }
        return $resultgroup->toArray();
    }
}