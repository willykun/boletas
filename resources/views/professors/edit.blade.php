@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($professor, ['route' => ['professors.update', $professor->id], 'method' => 'patch']) !!}

        @include('professors.fields')

    {!! Form::close() !!}
</div>
@endsection
