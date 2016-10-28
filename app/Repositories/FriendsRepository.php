<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use ConnectPlatform;

class FriendsRepository extends AbstractRepository
{
    /**
     * @var Event
     */
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
        $this->middleware('jwt.auth');
    }
    
    public function getFriends($uid, $page = 0,$attributes =['*'])
    {
       $friends = ConnectPlatform::getFriends($uid);
       $result = $friends->paginate(10);
       return $result->toArray();
    }
}
