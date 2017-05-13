@extends('layouts.app')
@section('content')
    <h1 class="text-primary">Edit Department</h1>
    <hr>
    <form action="{{url('/department/update')}}" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="dep" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" name="id" value="{{$department->id}}">
                        <input type="text" class="form-control" required autofocus name="dep" id="dep" value="{{$department->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="#" class="control-label col-sm-2">&nbsp;</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{url('/department')}}" class="btn btn-info">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection