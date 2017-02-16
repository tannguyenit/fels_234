<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    /**
     * Redirect the user to the provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
     try {
        $socialUser = Socialite::driver($provider)->user();
    } catch (\Exception $e) {
        return redirect('/');
    }
    $socialProvider = User::where('provider_id',$socialUser->getId())->first();

    if(!$socialProvider)
    {
        $username=explode("@",$socialUser->getEmail())[0];
        $img = file_get_contents($socialUser->getAvatar());
        $file = $_SERVER['DOCUMENT_ROOT'].'/storage/app/images/'.$socialUser->getId().'.jpg';
        file_put_contents($file, $img);
        $user = User::firstOrCreate(array(
            'provider_id'=>$socialUser->getId(),
            'username' => $username,
            'password' => bcrypt(rand(1000,99999)),
            'fullname' => $socialUser->getName(),
            'email' => $socialUser->getEmail(),
            'avatar' => $socialUser->getId().'.jpg',
            'is_admin' => 2
            )
        );
    }else{
        $user = $socialProvider;
    }
    auth()->login($user);
    return redirect('/home');
}
}
