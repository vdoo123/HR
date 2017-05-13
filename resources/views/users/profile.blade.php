@extends('layouts.app')
@section('content')
    <h1 class="text-primary">User Profile</h1>
    <hr>
    <p>
        User ID: {{$user->id}}

    </p>
    <p>
        Username: {{$user->username}}
    </p>
    <p>
        Email: {{$user->email}}
    </p>
    <p>
        Role: {{$user->role}}
    </p>
    <p>
        Password: {{$user->password}}
    </p>
    <form action="{{url('/profile/upload')}}" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-sm-4">
                {{csrf_field()}}
                Photo: <input type="file" name="photo" id="photo" class="form-control" onchange="loadFile(event)">
                <br>
                <img src="" alt="" id="preview" width="170">
                <br>
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </div>
    </form>
    <script>
        function loadFile(e){
            var output = document.getElementById('preview');
            output.src = URL.createObjectURL(e.target.files[0]);
        }
    </script>
@endsection