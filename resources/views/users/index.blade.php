@extends('layouts.app')
@section('content')
    <h1 class="text-primary">User List <a href="{{url('/user/create')}}" class="btn btn-danger btn-xs">Add New</a></h1>
    <hr>
    <table class="table table-condensed table-hover table-bordered table-striped">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><img src="{{asset('uploads/'.$user->photo)}}" alt="Photo" width="45"></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection