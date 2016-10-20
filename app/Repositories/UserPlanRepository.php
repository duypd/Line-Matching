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

    public function getList($page, $perPage) 
    {
        $user_plan = $this->model;
        $count = $user_plan->count();
        $page = isset($params['page']) ? $params['page'] : 1;
        $perPage = isset($params['perPage']) ? $params['perPage'] : 10;
        $plan_user = $user_plan->forPage($page, $perPage)->get();
        $meta = [
            'page' => $page,
            'perPage' => $perPage,
            'total' => ceil($count / $perPage)
        ];
        return $result = [
            'meta' => $meta,
            'plan_user' => $plan_user
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
