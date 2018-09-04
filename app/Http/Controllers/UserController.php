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

    public function getListUser() {
        $users = User::paginate(config('app.paginates'));

        return view('admin.users.listUser', compact('users'));
    }

    public function getAddUser()
    {
        return view('admin.users.addUser');
    }

    public function postAddUser(UserRequest $req)
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
            $name = $file->getClientOriginalName();
            $nameAva = str_random(4)."_".$name;
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        $user->save();

        return redirect('admin/users/addUser')->with('message', trans('home_admin.success'));
    }

    public function getEditUser($id)
    {
        $user = User::find($id);

        return view('admin.users.editUser', compact('user'));
    }

    public function postEditUser(UserRequest $req, $id)
    {
        $user = User::findOrFail($id);

        if ($req->hasFile('avatar')) {
            $file = $req->file('avatar');
            $name = $file->getClientOriginalName();
            $nameAva = str_random(4) . "_". $name;
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }


        $user->name = $req->Username;
        $user->phone = $req->Phone;
        $user->address = $req->Address;
        $user->note = $req->Note;
        $user->role = $req->role;

        if (isset($req->Password)) {
            $user->password = bcrypt($req->Password);
        }
        $user->save();

        return redirect('admin/users/editUser/' . $id)->with('message', trans('home_admin.success'));
    }
    public function getDeleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users/listUser')->with('message', trans('home_admin.success'));
    }
}
