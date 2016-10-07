<?php

namespace App\Repositories;

use App\Models\UserProfile;

class UserProfileRepository extends AbstractRepository {

    /**
     * @var User
     */
    protected $model,$a;

    public function __construct(UserProfile $user_pro) {
        $this->model = $user_pro;
    }



    public function putUpdate($id,  array $params) {
        $user_pro = $this->getBy('id',$id);
        $user_pro->user_id = isset($params['user_id']) ? $params['user_id'] : $user_pro->user_id;
        $user_pro->address = isset($params['address']) ? $params['address'] : $user_pro->address;
        $user_pro->description = isset($params['description']) ? $params['description'] : $user_pro->description;
        $user_pro->save();
        return $user_pro;
    }

     public function NotificationUpdate($id,  array $params) {
        $user_pro = $this->getBy('id',$id);
        $user_pro->on_groups = isset($params['on_groups']) ? $params['on_groups'] : $user_pro->on_groups;
        $user_pro->on_chat = isset($params['on_chat']) ? $params['on_chat'] : $user_pro->on_chat;
        $user_pro->on_event = isset($params['on_event']) ? $params['on_event'] : $user_pro->on_event;
        $user_pro->save();
        $user_pro_f = $user_pro->select(['on_groups', 'on_chat', 'on_event'])->where('id', $id)->get();
        return $user_pro_f;
    }
}