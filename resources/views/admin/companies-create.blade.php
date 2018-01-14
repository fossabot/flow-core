@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Add Company</h1>
    <br>

    {{ Form::open(array('url' => 'companies')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address"></textarea>
    </div>
    <div class="form-group">
        {{ Form::label('telnum', 'Telephone') }}
        {{ Form::text('telnum', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('faxnum', 'Fax') }}
        {{ Form::text('faxnum', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('website', 'Website') }}
        {{ Form::text('website', '', array('class' => 'form-control')) }}
    </div>
    <div class='form-group'>
        <p>Role</p>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>
    <div class="form-group">
        <p>Invite Code</p>
        @foreach ($invites as $invite)
            {{ Form::checkbox('invites[]',  $invite->code ) }}
            {{ Form::label($invite->code, ucfirst($invite->code)) }}<br>

        @endforeach
    </div>
    <br>
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection