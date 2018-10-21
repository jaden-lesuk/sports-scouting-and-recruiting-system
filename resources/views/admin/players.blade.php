@extends('admin.layout.admin')
@section('content')
    <h3>Add Player</h3>

    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-2">
            {!! Form::open(['route' => 'players.store','method'=> 'post','files'=>true]) !!}
            <div class="form-group">
                {{ Form::label('Firstname', 'Firstname') }}
                {{ Form::text('Firstname', null, array('class' => 'form-control','required'=>'')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Lastname', 'Lastname') }}
                {{ Form::text('Lastname', null, array('class' => 'form-control', 'required'=>'')) }}
            </div>
            <div class="form-group">
                {{ Form::label('Region', 'Region') }}
                {{ Form::text('Region', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Age', 'Age') }}
                {{ Form::text('Age',  null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Position', 'Position') }}
                {{ Form::text('Position',null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Height', 'Height') }}
                {{ Form::file('Height',array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('Stats', 'Stats') }}
                {{ Form::file('Stats',array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Add Player', array('class' => 'btn btn-default')) }}


            {!! Form::close() !!}
        </div>
    </div>


    @endsection