<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\User;

class UserController extends Controller
{
	public function index()
	{
	   return view('user/index')
	           ->with('users', User::paginate());
	}
}
