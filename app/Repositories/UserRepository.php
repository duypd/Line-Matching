<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository extends AbstractRepository
{
    /**
     * @var User
     */
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

}
