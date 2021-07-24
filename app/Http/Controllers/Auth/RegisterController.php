<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    /* protected function create(array $data)
    {
        dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    } */
    protected function create(array $data){
        $profilePic = asset('assets/images/user/user.png');
        // dd($data);
        $name = $data['name'];
        $fullName = explode(" ", $name);
        if(count($fullName ) > 1 ){
            $lastname = array_pop($fullName);
            $firstName = implode(" ", $fullName);
        } else{
            $firstName = $name;
            $lastname = " ";
        }
        // dd($firstName. '+' . $lastname);
        return User::create([
            'user_type' => '3',
            'first_name' => $firstName,
            'surname' => $lastname,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'county' => '',
            'country' => '',
            'uberSwitch' => '',
            'profile_pic_path' => $profilePic,
            'password' => Hash::make($data['password'])
        ]);
    }
}
