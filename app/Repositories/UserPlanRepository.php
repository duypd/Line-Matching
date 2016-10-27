<?php

namespace App\Repositories;

use App\Models\UserPlan;
use App\Models\LogUserPlan;
class UserPlanRepository extends AbstractRepository 
{
    /**
     * @var User
     */
    protected $model;
   
    public function __construct(UserPlan $plan_user)
    {
        $this->model = $plan_user;
    }

    public function getList($page = 0,$attributes = ['* ']) 
    {
        $user_plan = $this->model;
        $count = $user_plan->count();
        $plan_user = $user_plan->paginate();
        return $result = [
            'plan_user' => $plan_user->toArray()
        ];
    }

     public function postBuyEvent($event_id) 
     {
        $event = $this->model->where('id', $event_id)->first();
        if ($event == null) {
            return $result = [
                'note' => -1,
            ];
        }
        $name_event = $event->name;
        $price = $event->amount;
        $buy_event = new LogUserPlan();
        $buy_event->event_id = $event_id;
        $buy_event->name = $name_event;
        $buy_event->price = $price;
        $buy_event->save();
        return $result = [
            'note' => 0,
            'buy_event' => $buy_event,
        ];
    }

}
