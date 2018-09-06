<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\PasswordReset;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;
use Hash;

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

    public function forgetPwdEmail(Request $req) {
        $email = $req->email;
        $pwdReset = PasswordReset::where('email', $req->email)->delete();
        $user = User::where('email', $email)->first();
        if (!$user) {
            return 'failed';
        }
        $token = str_random(20);
        $now = Carbon::now();
        $pwdReset = new PasswordReset();
        $pwdReset->email = $req->email;
        $pwdReset->token = $token;
        $pwdReset->created_at = $now;
        $pwdReset->save();
        $url = url('/reset-pwd/' .$token);

        Mail::send('mail_tempate.reset-password-mail', compact('url', 'user'), function($message) use ($user) {
            $message->to($user->email, $user->name);
            $message->subject('Yeu cau cap lai mat khau');
        });

        return 'success!';
    }

    public function resetPwd($token) {
        $pwdReset = PasswordReset::where('token', $token)->first();
        if(!$pwdReset) {
            return "error! invalid token";
        }
        $thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
        $now = Carbon::now();
        $dif = $now->diffInHours($thatDay);
        if ($dif > 24) {
            $pwdReset->delete();
            return "error!";
        }
        return view('auth.reset-pwd', compact('token'));
    }

    public function authResetPassword(Request $req) {
        $pwdReset = PasswordReset::where('token', $req->token)->first();
        if(!$pwdReset) {
            return "error! invalid token";
        }
        $thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
        $now = Carbon::now();
        $dif = $now->diffInHours($thatDay);
        if ($dif > 24) {
            $pwdReset->delete();
            return "error!";
        }

        $user = User::where('email', $pwdReset->email)->first();
        $user->password = Hash::make($req->password);
        $user->save();
        return 'Bạn đã đổi mật khẩu thành công, mời bạn quay lại trang đăng nhập!';
    }
}
