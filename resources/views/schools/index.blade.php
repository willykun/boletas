@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Schools</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('schools.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($schools->isEmpty())
                <div class="well text-center">No Schools found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>School Name</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($schools as $school)
                        <tr>
                            <td>{!! $school->school_name !!}</td>
                            <td>
                                <a href="{!! route('schools.edit', [$school->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('schools.delete', [$school->id]) !!}" onclick="return confirm('Are you sure wants to delete this School?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection