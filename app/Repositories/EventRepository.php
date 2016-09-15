<?php
namespace App\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class EventRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(Event $event)
    {
        $this->model = $event;
    }
    function eventsList($userId){

        return $this->prepareQuery()->get();
    }

}
