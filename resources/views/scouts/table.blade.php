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
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>

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
                            {{link_to_route('players.index','Add new Player',null,['class'=>'btn btn-success'])}}



                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="header">
                            <h4 class="title">Table on Plain Background</h4>
                            <p class="category">Here is a subtitle for this table</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover">
                                <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Country</th>
                                <th>City</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Doris Greene</td>
                                    <td>$63,542</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mason Porter</td>
                                    <td>$78,615</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection