<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    public function postLoginPublic(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user=User::where([
            'email'=>$email,
            'provider_id'=>'',
        ]);
        if (!$user) {
            echo '<script type="text/javascript">alert("Bạn chưa đăng ký. Vui lòng đăng ký để tiếp tục học với E-Learning !!!");window.location="'.route("index.index").'"</script>';
        }
        if (Auth::attempt([
                'email' => $email,
                'password' => $password,
            ]))
        {
            return redirect()->route('index.index');
        } else {
            echo '<script type="text/javascript">alert("Username hoặc mật khẩu chưa đúng. Vui lòng nhập lại !!!");window.location="'.route("index.index").'"</script>';
        }
    }
}
