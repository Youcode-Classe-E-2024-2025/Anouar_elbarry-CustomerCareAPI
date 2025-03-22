<?php

namespace App\Http\Controllers;

use App\services\UserService;
use Illuminate\Http\Request;
use App\services;
class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(Request $request){
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
}
