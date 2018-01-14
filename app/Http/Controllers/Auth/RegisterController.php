<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use Clarkeash\Doorman\Facades\Doorman;

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

    use RegistersUsers {
     // change the name of the name of the trait's method in this class
     // so it does not clash with our own register method
        register as registration;
    }

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'company' => 'required|string|max:255',
            'address' => 'required|string'
        ]);
    }

    public function checkInvite(Request $request) {
        $invite_data = $request->all();

        if(Doorman::check($invite_data['invite-code'])){
            //Doorman::redeem($invite_data['invite-code']);

            $company = DB::table('companies')->where('invite_code', $invite_data['invite-code'])->value('company_name');
            //$request->session()->flash('invite_code', $invite_data['invite-code']);
            session(['invite_code' => $invite_data['invite-code']]);
            return redirect('/register')->with('company_name', $company);
        }else{
            return back()->with('error', 'Code is invalid');
        }
    }

    public function register(Request $request)
    {
        //Validate the incoming request using the already included validator method
        $this->validator($request->all())->validate();

        // Initialise the 2FA class
        $google2fa = new Google2FA();

        // Save the registration data in an array
        $registration_data = $request->all();

        $registration_data["invite_code"] = session('invite_code');

        // Add the secret key to the registration data
        $registration_data["google2fa_secret"] = $google2fa->generateSecretKey();

        // Save the registration data to the user session for just the next request
        $request->session()->flash('registration_data', $registration_data);

        // Generate the QR image. This is the image the user will scan with their app
     // to set up two factor authentication
        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $registration_data['email'],
            $registration_data['google2fa_secret']
        );

        // Pass the QR barcode image to our view
        return view('2fa.register', ['QR_Image' => $QR_Image, 'secret' => $registration_data['google2fa_secret'], 'invite_code' => $registration_data['invite_code']]);
    }

    public function completeRegistration(Request $request)
    {        
        // add the session data back to the request input
        $request->merge(session('registration_data'));

        // Call the default laravel authentication
        return $this->registration($request);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Doorman::redeem($data['invite_code']);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'company' => $data['company'],
            'address' => $data['address'],
            'use_twofactor' => true,
            'is_trial' => false,
            'twofactor_key' => $data['google2fa_secret']
        ]);
    }
}
