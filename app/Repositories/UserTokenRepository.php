<?php
namespace App\Repositories;

use App\Models\UserToken;
use App\Models\UserDevice;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
class UserTokenRepository extends AbstractRepository
{
    /**
     * @var User
     */
    private $jwtauth;
	protected $model;
    protected $user_device;



    public function __construct(User $user, 
                                UserDevice $user_device)
    {

        $this->model = $user;
        $this->user_device = $user_device;
        
    }

    public function CreateUser($params)
     {
       $user = $this->model->where('uid',$params['uid'])->firstOrNew([]);
       $user->uid = $params['uid'];
       $user->username = $params['username'];
       $user->email = $params['email'];
       $user->images = $params['images'];
       $user->save();
       $token = JWTAuth::fromUser($user, [
           'device' => $params['devices'],
       ]);
       if(! $token) {
             throw new Exception("Token is required");
         }
       $devices = $this->user_device->where('user_id',$user->id)->firstOrNew([]);
       $devices->user_id = $user->id;
       $devices->access_token_platform = $params['access_token'];
       $devices->device = $params['devices'];
       $devices->token = $token;
       $devices->save();
       $result['data'] = $token;
       return $result;
   }
    
  

}


