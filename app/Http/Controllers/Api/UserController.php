<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getUsers(){
    	$users = User::all();
    	return response()->json($users);
    }
}
