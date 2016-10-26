<?php
namespace App\Repositories;

use App\Models\User;
use App\Utilities\Upload;

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
    public function Register($params)
    {
    	$UserCreat = new User();
    	$UserCreat->username  = $params['username'];
    	$UserCreat->email     = $params['email'];
    	$UserCreat->password  = $params['password'];
    	$UserCreat->telephone = $params['telephone'];
    	$UserCreat->save();   	    
    	if (!empty($params['images'])) {
             $upload = $this->__postImageEvent($UserCreat,$params['images']);
             $image = $UserCreat->images;
             $UserCreat->images =$upload;
             $UserCreat->images =  transfer_url_images([$UserCreat->images]); 
             $UserCreat->save();
              if (! empty($image)) {
                event(new DeleteImageEvent($image));
            }
         } 
    	return $UserCreat;
    }
     /**
     * Upload image
     *
     * @param $id
     * @param $file
     * @return mixed
     */
    public function __postImageEvent($UserCreat,$files){
        $data   =array();
        $upload = new Upload($UserCreat->path, $UserCreat->width, $UserCreat->height, $files);
        $data   = $upload->handle($UserCreat);
        return $data;
    }

}
	