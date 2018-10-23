@extends('scouts.layout.admin')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">

                            <h4 class="title">Striped Table with Hover</h4>
                            <p class="category">Here is a subtitle for this table</p>
                            @if($success= Session::has('message'))
                                <div class="alert alert-success"><p>{{ $success }}</p></div>


                                @endif
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>FirstName</th>
                                <th>Lastname</th>
                                <th>Region</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th>Height</th>
                                <th>Stats</th>
                                </thead>
                                <tbody>
                                @foreach($players as $player)
                                <tr>

                                    <td>{{$player->Firstname}}</td>
                                    <td>{{$player->Lastname}}</td>
                                    <td>{{$player->Region}}</td>
                                    <td>{{$player->Age}}</td>
                                    <td>{{$player->Position}}</td>
                                    <td>{{$player->Height}}</td>
                                    <td>{{$player->Stats}}</td>
                                    <td> {!! Form::open(array('route'=>['players.destroy',$player->id],'method'=>'DELETE')) !!}
                                        {{link_to_route('players.edit','Edit',[$player->id],['class'=>'btn btn-primary'])}}
                                        |

                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                        </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
