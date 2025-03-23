<?php
namespace App\Repositories;
use App\Models\User;
class UserRepository{
    protected $userModel;
    public function __construct(User $userModel){
        $this->userModel = $userModel;
    }

    public function findUserByEmail($email){
       return $this->userModel->where('email',$email)->first();
    }
    public function isEmailUnique($email){
       return $this->userModel->where('email',$email)->doesntExist();
    }

    public function createUser(array $userData){
        return $this->userModel->create($userData);
    }
    public function getUsers(){
        return User::all();
    }

}