@extends('layouts.app')
@section('content')
    <h1 class="text-primary">New Department</h1>
    <hr>
    <form action="{{url('/department/save')}}" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    @if(Session::has('sms'))
                        <div class="alert {{session('type')=='ok'?"alert-success":"alert-danger"}}" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p>
                                {{session('sms')}}
                            </p>
                        </div>
                    @endif
                    <label for="dep" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required autofocus name="dep" id="dep">
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