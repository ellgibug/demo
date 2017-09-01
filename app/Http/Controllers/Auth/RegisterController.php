<?php

namespace App\Http\Controllers\Auth;

use App\Avatar;
use App\Notifications\RegisteredUser;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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

    public function showRegistrationForm()
    {
        $avatars = Avatar::all()->where('name', '!=', 'crown');
        return view('auth.register', compact('avatars'));
    }

    public function confirm($id, $token)
    {
        $user = User::where('id', $id)->where('token', $token)->first();

        if($user){
            $user->update(['token'=>null]);
            $user->update(['verified'=>1]);
            $this->guard()->login($user);
            return redirect($this->redirectPath())->withMessage('status', 'Verification completed.');
        }else{
            return redirect('/login')->withMessage('status', 'Something went wrong.');
        }

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
            'password' => 'required|string|min:3|confirmed',
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar_id'=>$data['avatar'],
            'password' => bcrypt($data['password']),
            'token' => str_random(16),
        ]);

        $user->attachRole(Role::where('name', 'user')->first());

        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $user->notify(new RegisteredUser());
        return redirect('login')->withMessage('status', 'Please, confirm your email.');
    }
}
