<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserHomeController extends Controller
{
    public function index() {
        return view('users.home', [
            "title" => "Home",
        ]);
    }
}
