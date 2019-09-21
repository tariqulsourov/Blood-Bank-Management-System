<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:direct_donor')->except('logout');
        $this->middleware('guest:donor_at_blood_bank')->except('logout');
        $this->middleware('guest:external_blood_bank')->except('logout');
    }


    /**
     * login control for admin
     */

    public function showAdminLoginForm()
    {
        return view('frontend.login.adminlogin', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * login control for admin end
     */

    /**
     * login control for direct_donor
     */

    public function showDirect_donorLoginForm()
    {
        return view('frontend.login.direct_donorlogin', ['url' => 'direct_donor']);
    }

    public function direct_donorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('direct_donor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/direct_donor');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * login control for direct_donor end
     */

    /**
     * login control for donor_at_blood_bank
     */

    public function showDonor_at_blood_bankLoginForm()
    {
        return view('frontend.login.donor_at_blood_banklogin', ['url' => 'donor_at_blood_bank']);
    }

    public function donor_at_blood_bankLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('donor_at_blood_bank')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/donor_at_blood_bank');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * login control for donor_at_blood_bank end
     */

    /**
     * login control for external_blood_bank
     */

    public function showExternal_blood_bankLoginForm()
    {
        return view('frontend.login.external_blood_banklogin', ['url' => 'external_blood_bank']);
    }

    public function external_blood_bankLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('external_blood_bank')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/external_blood_bank');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * login control for admin end
     */
}
