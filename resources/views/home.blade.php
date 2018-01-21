@extends('layouts.app')

@section('title', 'Home')

@section('content')
<link href="/css/accounts.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div class="container-fluid">
	<div class="card d-none d-sm-none d-md-block">
	  	<div class="card-body">
	  		<div class="row no-gutters">
		  		<div class="col">
		  			<div class="card-title text-muted font-opensans mb-0">Welcome Back</div>
	    			<h5 class="card-subtitle mb-2 font-opensans">{{ Auth::user()->name }}</h5>
	    		</div>
    		</div>
	  	</div>
	</div>
</div>

<div class="container">
	<div class="row mt-5">
		<div class="col-8">
			<div class="card">
				<div class="container-fluid">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active font-opensans text-muted" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DETAILS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link font-opensans text-muted" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">NEWS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link font-opensans text-muted" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">RELATED</a>
				  </li>
				</ul>

				<div class="tab-content">
				  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	...
				  </div>
				  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
				  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
				</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<div class="container-fluid">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active font-opensans text-muted" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ACTIVITY</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link font-opensans text-muted" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">NEWS</a>
				  </li>
				</ul>

				<div class="tab-content">
				  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	...
				  </div>
				  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
