<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function __construct() {

    }

    public function getlistUser() {
        $users = User::all();
        return view('admin.users.listUser', compact('users'));
    }

    public function getaddUser()
    {
        return view('admin.users.addUser');
    }

    public function postaddUser(UserRequest $req)
    {
        $user = new User;
        $user->name = $req->Username;
        $user->email = $req->Email;
        $user->password = bcrypt($req->Password);
        $user->phone = $req->Phone;
        $user->address = $req->Address;
        $user->note = $req->Note;
        $user->role = $req->role;

        if ($req->hasFile('avatar')) {
            $file = $req->file('avatar');
            $format_ava = $file->getClientOriginalExtension();
            if($format_ava != 'jpg' && $format_ava != 'png' && $format_ava != 'jpeg')
            {
                return redirect('admin/users/addUser')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameAva = str_random(4)."_".$name;
            $file->move('storage/img/users/', $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        $user->save();
        return redirect('admin/users/addUser')->with('message', 'success');
    }

    public function geteditUser($id)
    {
        $user = User::find($id);
        return view('admin.users.editUser', compact('user'));
    }

    public function posteditUser(UserRequest $req, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $req->Username;
        $user->password = bcrypt($req->Password);
        $user->phone = $req->Phone;
        $user->address = $req->Address;
        $user->note = $req->Note;
        $user->role = $req->role;

        if ($req->hasFile('avatar')) {
            $file = $req->file('avatar');
            $format_ava = $file->getClientOriginalExtension();
            if($format_ava != 'jpg' && $format_ava != 'png' && $format_ava != 'jpeg')
            {
                return redirect('admin/users/editUser')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameAva = str_random(4) . "_". $name;
            $file->move('storage/img/users/', $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        $user->save();
        return redirect('admin/users/editUser' . $id)->with('message', 'success');
    }
    public function getdeleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/listUser')->with('message', 'delete success');
    }
}
