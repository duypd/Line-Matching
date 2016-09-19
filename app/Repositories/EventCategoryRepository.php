<?php
namespace App\Repositories;

use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventCategoryRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(EventCategory $eventCategory)
    {
        $this->model = $eventCategory;
    }
     /**
     * Get list event categories.
     *
     *
     * @return array
     */
    public function getcategories(){
       
       $result =  $this->getAll();
       return  $result;
    }

    /**
     * create event categories.
     *
     *
     * @return array
     */
    public function create(array $param){
       \DB::transaction(function($q) use(&$eCategory, $param) {
            $eCategory = new EventCategory();   
            $eCategory->name = $param['name'];
            $eCategory->status = 1;
            $eCategory->updated_at = date('Y-m-d H:i:s');
            $eCategory->save();
        }); 
       return $eCategory;
    }
    /**
     * update event categories.
     *
     *
     * @return array
     */
    public function update($id, array $params)
    {
        $UCategory = $this->getBy('id', $id);
        $UCategory->name = !empty($params['name']) ? $params['name'] : $UCategory->name;
        $UCategory->status = !empty($params['status']) ? $params['status']: $UCategory->status;
        $UCategory->save();
        return $UCategory;
    }
    /**
     *  event categories.
     *
     *
     * @return array
     */
     public function destroy($id, $Id)
    {
        $eCategory = $this->where('EventId', $Id)
            ->getBy('id', $id);

        return $eCategory->delete();
    }
    
}
