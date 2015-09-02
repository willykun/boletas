@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Professors</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('professors.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($professors->isEmpty())
                <div class="well text-center">No Professors found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>F Name</th>
			<th>S Name</th>
			<th>F Lastname</th>
			<th>S Lastname</th>
			<th>Ci</th>
			<th>Username</th>
			<th>Active</th>
			<th>Contract Date</th>
			<th>Role</th>
			<th>Phone</th>
			<th>Email</th>
			<th>School Name</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($professors as $professor)
                        <tr>
                            <td>{!! $professor->f_name !!}</td>
					<td>{!! $professor->s_name !!}</td>
					<td>{!! $professor->f_lastname !!}</td>
					<td>{!! $professor->s_lastname !!}</td>
					<td>{!! $professor->CI !!}</td>
					<td>{!! $professor->username !!}</td>
					<td>{!! $professor->active !!}</td>
					<td>{!! $professor->contract_date !!}</td>
					<td>{!! $professor->role !!}</td>
					<td>{!! $professor->phone !!}</td>
					<td>{!! $professor->email !!}</td>
					<td>{!! $professor->school_name !!}</td><!--aaaaaaaa-->
                            <td>
                                <a href="{!! route('professors.edit', [$professor->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('professors.delete', [$professor->id]) !!}" onclick="return confirm('Are you sure wants to delete this Professor?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection