@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> User Administration</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Invite Code</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($companies as $user)
                <tr>

                    <td>{{ $user->company_name }}</td>
                    <td>{{ $user->invite_code }}</td>
                    <td>
                    <a href="{{ route('companies.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['companies.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('companies.create') }}" class="btn btn-success">Add User</a>

</div>
</div>
@endsection