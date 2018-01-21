<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flow: @yield('title')</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="/css/open-iconic-bootstrap.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">
    <script src="{{ mix('/js/app.js') }}" crossorigin="anonymous"></script>
    <script src="/js/fontawesome-all.js?v@php echo time(); @endphp" crossorigin="anonymous"></script>

    <style>
    	.logo {
    		font-family: 'Raleway', sans-serif;
    		font-weight: 100;
    	}
    </style>
</head>
<body>

	@if (Auth::check())
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:25px;">
		<a class="navbar-brand logo" href="#">FLOW</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						System Admin
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/users">Users</a>
						<a class="dropdown-item" href="/companies">Companies</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				@foreach ( NavBuilder::build_nav(1) as $nav )
				<li class="nav-item">
					<a class="nav-link" href="{{ $nav->route }}">{{ $nav->module_name }}</a>
				</li>
				@endforeach
			</ul>

			<ul class="navbar-nav ml-auto float-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="#">Settings</a>
						@role ('Administrator')
						<a class="dropdown-item" href="/admin/index">Adminstration</a>
						@endrole
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	@endif

	@yield('content')

	@include('sweet::alert')
</body>
</html>
