@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'schools.store']) !!}

        @include('schools.fields')

    {!! Form::close() !!}
</div>
@endsection
