<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\services\UserService;
use Illuminate\Http\Request;
use App\services;
class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(RegisterUserRequest $request){
        $validated = $request->validated();
        $user = $this->userService->register($validated);

        if($user){
            return response()->json([
                'message' => 'user registered seccussfully',
                'User' => $user
            ],201);
        }

        return response()->json([
            'message' => 'User registration failed. Email exists.'
        ],422);
        }
    public function login(Request $request){
        $validated = $request->validated();
        $user = $this->userService->login($validated);
        if($user){
            return response()->json([
                'message' => 'user loged successfully',
                'user' => $user
            ],200);
        }
        return response()->json([
            'message' => 'user login failed.'
        ],401);
      
    }


}
