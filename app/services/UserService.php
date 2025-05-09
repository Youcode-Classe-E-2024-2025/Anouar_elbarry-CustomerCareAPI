<?php

namespace App\services;
use App;
use App\Repositories\UserRepository;
use Hash;
use Illuminate\Support\Facades\Auth;
class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
      $this->userRepository = $userRepository;
    }
    public function register(array $userData)
    {
        if($this->userRepository->isEmailUnique($userData['email'])){
           $userData['password'] = bcrypt($userData['password']);
           $user = $this->userRepository->createUser($userData);
           return $user;
        }
        return false;
    }

    public function login(array $userData)
    {    
        $user = $this->userRepository->findUserByEmail($userData['email']);
        if($user && Hash::check($userData['password'],$user->password)){
            $user->email_verified_at = now();
            Auth::login($user);
            return $user;
        }else{
            return false;
        }
    }
    public function logout()
    {
         $user = Auth::user();
         if($user){
            $user->tokens()->delete();
            return true;
         }
         return false;
    }

    public function  getUsers(){
        $users = $this->userRepository->getUsers();
        return $users;
    }
}
