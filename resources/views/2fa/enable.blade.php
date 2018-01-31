@extends('layouts.login')

@section('title', 'Enable 2FA')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">Enable 2FA</h2>

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
                                <p class="label">Open up your 2FA mobile app and scan the following QR barcode:</p>
                                <img alt="Image of QR barcode" src="{{ $image }}" />
                                <p>If your 2FA mobile app does not support QR barcodes, 
                                enter in the following number: <code>{{ $secret }}</code></p>
                                
                                <br><a href="/register/complete"><btn class="btn btn-primary primary">Continue</btn></a>
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
