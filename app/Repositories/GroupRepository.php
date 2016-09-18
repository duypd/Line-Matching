<?php
namespace App\Repositories;

use App\Models\Group;
use App\Utilities\Upload;
use App\Events\DeleteImageEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GroupRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(Group $group)
    {
        $this->model = $group;
    }
    /**
     * Create a group
     *
     * @param array $param
     * @return mixed
     */
    public function create(array $param)
    {
        \DB::transaction(function($q) use(&$group, $param) {
            $group = new Group();
            $group->user_id = $param['user']['user']->id;
            $group->leader_max = 50;
            $group->user_max = 50;
            $group->name = $param['name'];
            $group->description = !empty($param['description']) ? $param['description']: '';
            $group->status = 1;
            $group->lag = !empty($param['lag']) ? $param['lag']: null;
            $group->long = !empty($param['long']) ? $param['long']: null;
            $group->updated_at = date('Y-m-d H:i:s');
             $group->save();

        });
        if(!empty($group)){
            $result = $this->upload($group->original['id'], $param->file('image'));
        }

        return $group;
    }
    /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */
    public function upload($id, $file)
    {
        $group = $this->getBy('id', $id);

        $upload = new Upload($group->path, $group->width, $group->height, $file);

        $image = $group->image;
        $group->image = $upload->handle($group);

        $group->save();

        $group->image = transfer_url_images([$group->image]);

        if (! empty($image)) {
            event(new DeleteImageEvent($image));
        }
        dump($group); die;
        return $group;
    }


}
