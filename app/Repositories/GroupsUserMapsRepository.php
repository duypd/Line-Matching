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
    
    public function index($page = 0,$attributes =['*'])
    {
        $result = $this->paginate($attributes);
        return $result->toArray();
    }
    public function getDetailGroupUserMaps($id)
    {
        $groupUserMaps = $this->getBy('id',$id);
        return $groupUserMaps;
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
