<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listUserController extends Controller
{
    public function getlistUser() {
        return view('admin.users.listUser');
    }
}
