@extends('app')
@section('content')

    <div class="container">
        <h2>Create Categories</h2>

        {!! Form::open(['route' => 'categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Category', ['class'=>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection