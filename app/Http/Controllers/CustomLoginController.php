<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Facades\Auth;


class CustomLoginController extends Controller
{
    $user=new User;

    $user->login=request('login');
    $user->password=Hash::make (request('password'));

}
