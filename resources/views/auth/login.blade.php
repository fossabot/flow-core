@extends('layouts.login')

@section('title', 'Login')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">FLOW</h2>

                <div id="content" style="display: block;">
                    <div id="theloginform" style="display: block;">
                        <form name="login" method="post" id="login_form" action="{{ route('login') }}" target="_top" autocomplete="off" novalidate="novalidate">

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
                                <label for="username" class="label">Username</label>
                                <input class="input r4 wide mb16 mt8 username" type="email" value="" name="email" id="username" style="display: block;">

                                <label for="password" class="label">Password</label>
                                <input class="input r4 wide mb16 mt8 password" type="password" id="password" name="password" autocomplete="off">

                                <input class="button r4 wide primary" type="submit" id="Login" name="Login" value="Log In">

                                <div class="w0 pr ln3 p16 remember">
                                    <input type="checkbox" class="r4 fl mr8" style="" id="rememberUn" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="rememberUn" class="fl pr db tn3">Remember me</label><br>
                                </div>
                            </div>

                        </form>
                        <div class="w0 links bt pt16 mb20">
                            <a id="forgot_password_link" class="fl small" href="#">Forgot Your Password?</a>
                        </div>
                    </div>
                </div>

                <div id="signup" class="tc mt24" style="display: block;">
                    <p class="di mr16">Not a customer?</p>
                    <a class="button secondary" id="signup_link" href="{{ route('register/invite') }}">Try for Free</a>
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