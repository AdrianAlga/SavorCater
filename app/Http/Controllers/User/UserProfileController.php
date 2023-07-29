<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index() {
        return view('users.profile.index', [
            "title" => "Profile",
        ]);
    }

    public function edit() {
        return view("users.profile.edit", [
            "title" => "Profile Edit",
        ]);
    }
}
