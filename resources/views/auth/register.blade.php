@extends('layouts.app')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">REGISTER</h2>

                <div id="content" style="display: block;">
                    <div id="theloginform" style="display: block;">
                        <form name="register" method="post" id="login_form" action="{{ route('register') }}" target="_top" autocomplete="off" novalidate="novalidate">

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
                                <label for="username" class="label">Email</label>
                                <input class="input r4 wide mb16 mt8 username" type="email" value="" name="email" id="username" style="display: block;" required="">

                                <label for="password" class="label">Password</label>
                                <input class="input r4 wide mb16 mt8 password" type="password" id="password" name="password" autocomplete="off" required="">

                                <label for="password_confirmation" class="label">Retype Password</label>
                                <input class="input r4 wide mb16 mt8 password" type="password" id="password_confirmation" name="password_confirmation" autocomplete="off" required="">

                                <hr>
                                <h5>Personal Info</h5>

                                <label for="username" class="label">Your Name</label>
                                <input class="input r4 wide mb16 mt8 username" type="text" value="" name="name" id="name" required="">

                                <label for="address" class="label">Address</label>
                                <textarea class="input r4 wide mb16 mt8 username" id="address" name="address" autocomplete="off" required=""></textarea>

                                <hr>
                                <h5>Company Info</h5>

                                <label for="company" class="label">Company</label>
                                <input class="input r4 wide mb16 mt8 username" type="text" id="company" name="company" autocomplete="off" required="">

                                <input class="button r4 wide primary" type="submit" id="Register" name="Register" value="Register">
                            </div>

                        </form>
                        <div class="w0 links bt pt16 mb20">
                            <a id="forgot_password_link" class="fl small" href="{{ route('login') }}">Go Back</a>
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
