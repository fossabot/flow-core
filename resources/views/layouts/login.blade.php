<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flow: @yield('title')</title>

    <link href="/css/app.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">
    <script src="/js/app.js?v@php echo time(); @endphp" crossorigin="anonymous"></script>

    <style>
    	.logo {
    		font-family: 'Raleway', sans-serif;
    		font-weight: 100;
    	}
    </style>
</head>
<body>
	@yield('content')
</body>
</html>
