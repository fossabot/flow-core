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
		  			<h5 class="card-title font-opensans mb-0">ACCOUNT</h5>
	    			<h6 class="card-subtitle mb-2 text-muted font-opensans">Manage Your Company's Accounts</h6>
	    		</div>
	    		<div class="col">
	    			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
	    				<button type="button" class="btn btn-secondary">New Account</button>
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
	  	</div>
	</div>

	<div class="row mt-5">
		<div class="col-8">
			<div class="card">
				<div class="container1">
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">Account Name</th>
					      <th scope="col">Type</th>
					      <th scope="col">Industry</th>
					      <th scope="col">Account Owner</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($accounts as $acc)
					    <tr>
					      <th scope="row">{{ $acc->id }}</th>
					      <td>{{ $acc->acc_name }}</td>
					      <td>{{ $acc->type }}</td>
					      <td>{{ $acc->industry }}</td>
					      <td>{{ $acc->acc_owner }}</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
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
