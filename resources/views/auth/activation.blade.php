@extends('layouts.login')

@section('title', 'Enable 2FA')

@section('content')

<link href="/css/login.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div id="left" class="pr">
    <div id="wrap">
        <div id="main">
            <div id="wrapper">
                <h2 id="header" class="mb12">Resend Activation Email</h2>

                <div id="content" style="display: block;">
                    <div id="theloginform" style="display: block;">
                        <form name="activate_acc" method="post" id="login_form" action="{{ route('account.activation.resend') }}" target="_top" autocomplete="off" novalidate="novalidate">

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
                                <label for="email" class="label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                
                                <br><button type="submit" class="btn btn-primary primary">Resend</button>
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