@extends('layouts.login')

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
                                <label for="username" class="label">Invite Code: {{ $invite_code }}</label>
                                <input class="input r4 wide mb16 mt8 username" type="image" id="qr-image" style="display: block;" src="{{ $QR_Image }}">

                                <a href="/register/complete"><btn class="button r4 wide primary" value="Register"></btn></a>
                            </div>

                        </form>
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
