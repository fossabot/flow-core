@extends('layouts.app')

@section('title', 'Home')

@section('content')
<link href="/css/accounts.css?v@php echo time(); @endphp" rel="stylesheet" type="text/css">

<div class="container">
	<div class="card d-none d-sm-none d-md-block">
	  	<div class="card-body">
	  		<div class="row no-gutters">
	  			<div class="col-1">
	  			</div>
		  		<div class="col">
		  			<div class="card-title text-muted font-opensans mb-0">ACCOUNT</div>
	    			<h5 class="card-subtitle mb-2 font-opensans">Haskal Systems</h5>
	    		</div>
	    		<div class="col">
	    			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
	    				<button type="button" class="btn btn-secondary">Edit</button>
	    				<button type="button" class="btn btn-secondary">New Contact</button>
	    				<button type="button" class="btn btn-secondary">New Case</button>
	    				<div class="btn-group btn-group-sm" role="group">
	    					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	    					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
	    						<a class="dropdown-item" href="#">Dropdown link</a>
	    						<a class="dropdown-item" href="#">Dropdown link</a>
	    					</div>
	    				</div>
	    			</div>
				</div>
    		</div>
	    	<div class="d-flex flex-row justify-content-around">
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Type</h6>
			  		<span class="font-opensans">Test</span>
			  	</div>
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Phone</h6>
			  		<span class="font-opensans">(+60) 11-1008 6242</span>
			  	</div>
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Website</h6>
			  		<span class="font-opensans"><a href="#">Test</a></span>
			  	</div>
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Account Owner</h6>
			  		<span class="font-opensans"><a href="#">Test</a></span>
			  	</div>
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Account Size</h6>
			  		<span class="font-opensans"></span>
			  	</div>
			  	<div class="p-2">
			  		<h6 class="text-muted font-opensans account-head font-weight-bold">Industry</h6>
			  		<span class="font-opensans"></span>
			  	</div>
			</div>
	  	</div>
	</div>

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
