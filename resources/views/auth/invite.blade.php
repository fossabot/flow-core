@extends('layouts.login')

@section('title', 'Invite Code')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">REGISTER</h2>

                <div id="content" style="display: block;">
                    <div id="theloginform" style="display: block;">
                        <form name="register" method="post" id="login_form" action="{{ route('register/invite2') }}" target="_top" autocomplete="off" novalidate="novalidate">

                            {{ csrf_field() }}

                            @if (session('error'))
                            <div class="loginError" id="error" style="display: block;">
                                {{ session('error') }}
                            </div>
                            @endif

                            <div id="usernamegroup" class="inputgroup">
                                <label for="invite-code" class="label">Enter Your Company's Invite Code</label>
                                <input class="input r4 wide mb16 mt8 username" type="text" value="" name="invite-code" id="invite-code" style="display: block;" required="">

                                <input class="button r4 wide primary" type="submit" id="Register" name="Register" value="Continue">
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
