<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Direct_donor;
use App\Donor_at_blood_bank;
use App\External_blood_bank;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
        $this->middleware('guest:admin');
        $this->middleware('guest:direct_donor');
        $this->middleware('guest:donor_at_blood_bank');
        $this->middleware('guest:external_blood_bank');
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
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    /**
     * Registration form
     */

    public function showAdminRegisterForm()
    {
        return view('frontend.reg.adminreg', ['url' => 'admin']);
    }

    public function showDirect_donorRegisterForm()
    {
        return view('frontend.reg.direct_donorreg', ['url' => 'direct_donor']);
    }

    public function showDonor_at_blood_bankRegisterForm()
    {
        return view('frontend.reg.donor_at_blood_bankreg', ['url' => 'donor_at_blood_bank']);
    }

    public function showExternal_blood_bankRegisterForm()
    {
        return view('frontend.reg.external_blood_bankreg', ['url' => 'external_blood_bank']);
    }

    /**
     * Registration form end
     */

    /**
     * ADMIN Registration
     */

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }

    /**
     * ADMIN Registration end
     */

    /**
     * DIRECT_DONOR Registration
     */

    protected function createDirect_donor(Request $request)
    {
        $this->validator($request->all())->validate();
        $direct_donor = Direct_donor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'blood_type' => $request['blood_type'],
            'phone_no' => $request['phone_no'],
            'NID' => $request['NID'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'police_station' => $request['police_station'],
            'post_office' => $request['post_office'],
            'post_code' => $request['post_code'],
            'city' => $request['city'],
            'division' =>$request['division'],
        ]);
        return redirect()->intended('login/direct_donor');
    }

    /**
     * DIRECT_DONOR Registration end
     */

    /**
     * DONOR_AT_BLOOD_BANK Registration
     */

    protected function createDonor_at_blood_bank(Request $request)
    {
        $this->validator($request->all())->validate();
        $donor_at_blood_bank = Donor_at_blood_bank::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'blood_type' => $request['blood_type'],
            'phone_no' => $request['phone_no'],
            'NID' => $request['NID'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'police_station' => $request['police_station'],
            'post_office' => $request['post_office'],
            'post_code' => $request['post_code'],
            'city' => $request['city'],
            'division' =>$request['division'],
        ]);
        return redirect()->intended('login/donor_at_blood_bank');
    }

    /**
     * DONOR_AT_BLOOD_BANK Registration end
     */

    /**
     * EXTERNAL_BLOOD_BANK Registration
     */

    protected function createExternal_blood_bank(Request $request)
    {
        $this->validator($request->all())->validate();
        $external_blood_bank = External_blood_bank::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone_no' => $request['phone_no'],
            'police_station' => $request['police_station'],
            'post_office' => $request['post_office'],
            'post_code' => $request['post_code'],
            'city' => $request['city'],
            'latitude' =>$request['latitude'],
            'longitude' =>$request['longitude'],
        ]);
        return redirect()->intended('login/external_blood_bank');
    }

    /**
     * EXTERNAL_BLOOD_BANK Registration end
     */

}
