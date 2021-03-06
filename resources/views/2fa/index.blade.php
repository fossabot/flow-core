@extends('layouts.login')

@section('title', 'One-time Password')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">FLOW</h2>

                <div id="content" style="display: block;">
                    <div id="theloginform" style="display: block;">
                        <form name="login" method="post" id="login_form" action="{{ route('2fa') }}" target="_top" autocomplete="off" novalidate="novalidate">

                            {{ csrf_field() }}

                            @isset ($errors)
                            <div class="loginError" id="error" style="display: block;">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endisset

                            <div id="usernamegroup" class="inputgroup">
                                <label for="password" class="label">One-time Password</label>
                                <input class="input r4 wide mb16 mt8 password" type="password" id="password" name="one_time_password" autocomplete="off" data-toggle="tooltip" data-placement="top" title="The OTP or One-time Password is either your employee ID or a unique code from the Google Authenticator App">

                                <input class="button r4 wide primary" type="submit" id="Login" name="Login" value="Continue">
                            </div>

                        </form>
                        <div class="w0 links bt pt16 mb20">
                            <a id="forgot_password_link" class="fl small" href="#">Forgot Your OTP?</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div id="footer">© @php echo date("Y"); @endphp Haskal Systems. All rights reserved. | <a id="privacy-link" href="#" target="_blank" "="">Privacy</a>
        </div>

    </div>
</div>

<div id="right">
</div>
@endsection