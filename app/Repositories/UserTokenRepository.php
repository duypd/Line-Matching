<?php
namespace App\Repositories;

use App\Models\UserToken;
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


    public function __construct(User $user, JWTAuth $jwtauth)
    {

        $this->model = $user;
        $this->jwtauth = $jwtauth;
        
    }

    public function CreateToken($params){
    	$user = $this->model->where('platform_user_id', $params['platform_user_id'])->first();
    	$token = JWTAuth::fromUser($user);
    	$user_id = $user->id;
    	$user_token = new UserToken();
    	$user_token->user_id = $user_id;
    	$user_token->username = $params['username'];
    	$user_token->email = $params['email'];
    	$user_token->access_token = $params['access_token'];
    	$user_token->avatar = $params['avatar'];
    	$user_token->save();
    
    	if(! $token) {
            throw new Exception("Token is required");
        }

        $user_token->token = $token;
        $user_token->save();

     	return $token;
    }
    

}


