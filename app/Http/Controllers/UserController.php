<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getlistUser() {
        return view('admin.users.listUser');
    }
    public function getaddUser()
    {
        return view('admin.users.addUser');
    }
    public function geteditUser()
    {
        return view('admin.users.editUser');
    }
}
