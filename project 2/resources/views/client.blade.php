@extends('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
            @endif
            {{-- hello? --}}

            <div class="panel panel-default">
                <div class="panel-heading">Client</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Company</th>
                            <th>Office Address</th>
                            <th>Email</th>
                            
                        </tr>
                        @foreach($clients as $client)
                        <tr>
                        <td>{{$client->company}}</td>
                        <td>{{$client->com_address}}</td>
                        <td>{{$client->com_email}}</td>
                            <td>
                                {!! Form::open(array('route'=>['client.delete',$client->id],'method'=>'DELETE')) !!}
                                    {{link_to_route('client.edit','Edit',[$client->id],['class'=>'btn btn-primary'])}}
                                | 
                                    {!! Form::button('Delete',['type'=>'submit','class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td> 
                        </tr>
                        @endforeach
                    </table>
                    {{-- {{link_to_roe('task.create','Add New Task',null,['class'=>'btn btn-primary'])}} --}}
                </div>
                
            </div>
        </div>
    </div>
</div>
