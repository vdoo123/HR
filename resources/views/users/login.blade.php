<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<div class="container">
    <h1>User Login</h1>
    <hr>
    <div class="row">
        <div class="col-sm-5">
            <form action="{{url('/dologin')}}" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Username:</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" class="form-control" autofocus required>
                        {{ csrf_field() }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-9">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <a href="{{url('/user/register')}}" class="btn btn-info">Register</a>
                        @if(Session::has('sms'))
                            <p class="text-danger">
                                {{session('sms')}}
                            </p>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">

</div>
</body>
</html>