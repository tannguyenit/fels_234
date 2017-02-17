<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Hash;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::Login($email);
        if (count($user) == 0) {
            return redirect()->action('IndexController@index')->with(['error' => trans('layout.not_register')]);
        } elseif (Auth::attempt([
                'email' => $email,
                'password' => $password,
            ])) {
            return redirect()->action('IndexController@index');
        } else {
            return redirect()->action('IndexController@index')->with(['error' => trans('layout.fail')]);
        }

    }

}
