<?php
namespace App\Repositories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;

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


}
