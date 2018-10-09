@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store','method'=> 'post','files'=>true]) !!}
            <div class="form-group">
                {{ Form::label('Name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Number', 'Number') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}


            {!! Form::close() !!}
        </div>
    </div>
@endsection