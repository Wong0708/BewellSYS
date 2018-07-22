@extends('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Company Repreresentatives</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Email</th>
                            
                        </tr>
                        @foreach($bc_contacts as $bc_contact)
                        <tr>
                            <td>{{$bc_contact->company}}</td>
                            <td>{{$bc_contact->con_name}}</td>
                            <td>{{$bc_contact->con_number}}</td>
                            <td>{{$bc_contact->con_address}}</td>
                            <td>{{$bc_contact->con_email}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
