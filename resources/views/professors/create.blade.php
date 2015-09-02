@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'professors.store']) !!}

        @include('professors.fields')

    {!! Form::close() !!}
</div>
@endsection
