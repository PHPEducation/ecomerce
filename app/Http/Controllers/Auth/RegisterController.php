<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DumpProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $req)
    {
        $this->middleware('guest');
        $dumpProduct = new DumpProduct();
        try {
            $product = $dumpProduct->where('product_id', $req->addToCart)->firstOrFail();
            $product->soluong += isset($req->soluong) ? $req->soluong : 1;
            $product->save();
        } catch (ModelNotFoundException $e) {
            $dumpProduct->product_id = $req->addToCart;
            $dumpProduct->soluong = isset($req->soluong) ? $req->soluong : 1;
            $dumpProduct->save();
        }

        return back();

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:25',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role' => config('role.role.user'),
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role' => 3,
            'password' => Hash::make($data['password']),
        ]);
    }
}
