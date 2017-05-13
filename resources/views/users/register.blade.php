@extends('layouts.app')
@section('content')
<h1 class="red">User Registration</h1>
<hr>
<form action="{{url('/user/doregister')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
 <div class="row">
     <div class="col-sm-6">
         <div class="form-group">
             <lable class="control-label col-sm-3">Username:</lable>
             <div class="col-sm-9">
                 <input type="text" class="form-control" name="username" required autofocus>
                 {{ csrf_field() }}
             </div>
         </div>
         <div class="form-group">
             <lable class="control-label col-sm-3">Email:</lable>
             <div class="col-sm-9">
                 <input type="email" class="form-control" name="email" required>
             </div>
         </div>
         <div class="form-group">
             <lable class="control-label col-sm-3">Role:</lable>
             <div class="col-sm-9">
                 <select name="role" id="role" class="form-control">
                     <option value="admin">Admin</option>
                     <option value="guest">Guest</option>
                 </select>
             </div>
         </div>
         <div class="form-group">
             <lable class="control-label col-sm-3">Password:</lable>
             <div class="col-sm-9">
                 <input type="password" class="form-control" name="password" required>
             </div>
         </div>
         <div class="form-group">
             <lable class="control-label col-sm-3">Photo:</lable>
             <div class="col-sm-9">
                 <input type="file" class="form-control" name="photo">
             </div>
         </div>
         <div class="form-group">
             <lable class="control-label col-sm-3">&nbsp;</lable>
             <div class="col-sm-9">
                 <button class="btn btn-primary" type="submit">Save</button>
             </div>
         </div>
     </div>

 </div>
</form>
@endsection