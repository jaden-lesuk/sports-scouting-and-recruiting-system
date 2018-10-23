@extends('scouts.layout.admin')
@section('content')


    <div class="row justify-content-center">
      <div class="container" style="margin-left: 250px;">
        <br>
        <h2 class="brand-text" style="margin-left:270px">Add Player</h2><br><br>
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
                {{ Form::text('Height',null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('Stats', 'Stats') }}
                {{ Form::text('Stats',null, array('class' => 'form-control')) }}
            </div>
            <div class="" style="margin-right:30px;margin-left:30px;font-size:20px;padding:20px;">
              {{ Form::submit('Add Player', array('class' => 'btn btn-primary btn-block btn-glow  mx-1')) }}
            </div><br><br>

            {!! Form::close() !!}
        </div>
      </div>
    </div>

    @endsection
