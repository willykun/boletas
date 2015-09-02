@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($school, ['route' => ['schools.update', $school->id], 'method' => 'patch']) !!}

        @include('schools.fields')

    {!! Form::close() !!}
</div>
@endsection
