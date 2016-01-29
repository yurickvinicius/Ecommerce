@extends('app')
@section('content')

    <div class="container">
        <h2>Editing Category {{ $category->name }}</h2>

        {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save Category', ['class'=>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection