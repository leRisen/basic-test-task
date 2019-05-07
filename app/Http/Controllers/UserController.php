<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index ($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
}
