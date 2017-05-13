@extends('layouts.app')
@section('content')
<h1 class="red">HR Management System</h1>
<hr>
<img src="{{asset('img/coding.jpg')}}" alt="Test Image">
<form action="#">
    <p>
        {!! $fname !!}
    </p>
    <p>
        based url: {{URL::to('/')}}
    </p>
    <p>
        Based url: {{$app->make('url')->to('/')}}
    </p>
    <p>
        Based url: {{$app['url']->to('/')}}
    </p>
    <p>
        Based url: {{App::make('url')->to('/')}}
    </p>
    <p>
        Based url: {{url('/user/logoin?id=234efw342342340sdf234234')}}
    </p>
    {{--<p>--}}
        {{--First Name: <input type="text" value="{{$fname}}">--}}
    {{--</p>--}}
    {{--<p>--}}
        {{--Last Name: <input type="text" value="{{$lname}}">--}}
    {{--</p>--}}
    {{--<p>--}}
        {{--Gender: <input type="text" value="{{$gender}}">--}}
    {{--</p>--}}
</form>
@endsection