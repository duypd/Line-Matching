<?php
namespace App\Repositories;

use App\Models\EventsPrPoints;
use App\Utilities\Upload;
use Illuminate\Database\Eloquent\Model;

class EventPrPointRepository extends AbstractRepository
{
    /**
     * @var EventsPrPoints
     */
    protected $model;
    
    public function __construct(EventsPrPoints $eventPrPoints)
    {
        $this->model = $eventPrPoints;
    }
     function eventsList($page =0, $attributes = ['*']){
        $result = $this->paginate($attributes);
        return $result->toArray();
    }
     /**
     * get DetailEventPrPoint.
     * @param $id
     * @return object EventPrPoint
     */

    public function show($id)
    {
        $EventPrPoint = $this->getBy('id', $id);
        return $EventPrPoint;
    }
     /**
     * create eventPrPoint.
     *
     *
     * @return array
     */
    public function create(array $param)
    {

            $prPoint = new EventsPrPoints();   
            $prPoint->event_id = $param['event_id'];
            $prPoint->content  =$param['content'];
            $prPoint->updated_at = date('Y-m-d H:i:s');
            $prPoint->save();
            if (!empty($param['images'])) {
            $upload = $this->__postImageEvent($prPoint,$param['images']);
            $image = $prPoint->images;
            $prPoint->images =$upload;
            $prPoint->images =  transfer_url_images([$prPoint->images]);
            $prPoint->save();
            if (! empty($image)) {
                event(new DeleteImageEvent($image));
            }
        }           
       return $prPoint;
    }

     /**
     *Update a PrPoint
     *
     * @return array
     */
    public function update($id, array $params)
    {
        $UPrPoint = $this->getBy('id', $id);
        $UPrPoint->content = !empty($params['content']) ? $params['content'] : $UEvent->content;
        $UPrPoint->save();
        return $UPrPoint;
        $upload = $this->__postImageEvent($UPrPoint,$params['images']);

        if (!empty($params['images'])) {
            $image = $UPrPoint->Images;
            $UPrPoint->images = $upload;
            $UPrPoint->save();
        }
    } 

    /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */
    public function __postImageEvent($prPoint,$files)
    {  
            $data =array();  
            $upload = new Upload($prPoint->path, $prPoint->width, $prPoint->height, $files);
            $data = $upload->handle($prPoint);        
            return $data;

    }

    /**
    *Delete a EventPrPoing
    * @param int $id
    * @param $DEPrPoint
    * @return mixed
    *
    */
   public function destroy($id, $Id)
        {
            $DEPrPoint = $this->where('DEPrPoint', $Id)->getBy('id', $id);
            return $DEPrPoint->delete();
        }
}
