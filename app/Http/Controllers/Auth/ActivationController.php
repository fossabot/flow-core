<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;

class ActivationController extends Controller
{
    public function activate($token)
    {
        // find token based on id
        $user = User::where('activation_token', $token)->first();

        if ($user) {

            // update activation account details
            $user->activation_token = null;
            $user->activated_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();

            // login using id
            auth()->loginUsingId($user->id);

            // redirect to home
            return redirect('/home');
        } else {
            return 'invalid token provided';
        }
    }

    public function request()
    {
        return view('auth.activation');
    }

    public function resend()
    {
        $this->validate(request(), [
            'email' => 'required',
        ]);

        $user = User::where('email', request('email'))->first();
        $token = str_random(64);
        $user->activation_token = $token;
        $user->save();

        // send notification
        $user->notify(
            new SendActivationEmail($token)
        );

        return redirect()->route('account.activation.request')->with('notice', 'Please check your email for activation link');
    }
}