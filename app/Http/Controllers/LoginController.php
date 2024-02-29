<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\User;

class LoginController extends Controller
{
    public function render(){
        return view('login');
    }
}
 