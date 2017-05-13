@extends('layouts.app')
@section('content')
    <h1 class="text-primary">Department List <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">Add New</a></h1>
    <hr>
    {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
            {{--<form action="{{url('/search')}}" method="get">--}}
                {{--<input type="text" name="name">--}}
                {{--<button class="btn btn-primary btn-xs" type="submit">Search</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    <table class="table table-condensed table-bordered table-striped" id="myTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id="data">

        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Department</h4>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-horizontal" onsubmit="return false">
                        <div class="form-group">
                            <label for="dep" class="control-label col-sm-2">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="dep" id="dep">
                                {{csrf_field()}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dep" class="control-label col-sm-2">&nbsp;</label>
                            <div class="col-sm-9">
                                <div id="sms" class="text-danger"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-xs" id="btnClose">Close</button>
                    <button type="button" class="btn btn-primary btn-xs" id="btnSave">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            // close button on modal
            $("#btnClose").click(function () {
                $("#dep").val("");
                $("#sms").html("");
                $('#myModal').modal('hide');
            });
            $("#btnSave").click(function () {
                if($("#dep").val()!="")
                {
                    $.ajax({
                        url: burl + "/department/save",
                        type: 'POST',
                        data: {dep: $("#dep").val()},
                        beforeSend: function (request) {
                            return request.setRequestHeader('X-CSRF-Token', $("input[name='_token']").val());
                        },
                        success: function(sms){
                            if(sms)
                            {
                                $("#sms").html("Has been saved!");
                                $("#dep").val("");
                                $("#dep").focus();
                            }
                            else {
                                $("#sms").html("Cannot save data!");
                            }
                        }

                    });
                }
                else{
                    $("#sms").html("Please input department name!")
                }

            });
         $.ajax({
             type: "GET",
             url: burl + "/department/all",
             success: function (data) {
                 var tr ="";
                 for(var i=0;i<data.length;i++)
                 {
                     tr +="<tr>";
                     tr +="<td>" + data[i].id + "</td>";
                     tr += "<td>" + data[i].name + "</td>";
                     tr += "<td><a href='#' onclick='del(" + data[i].id + ", event, this)'>Delete</a></td>";
                     tr +="</tr>";
                 }
                 $("#data").html(tr);
             }
         });
        });

        // function delete
        function del(id, evt, obj) {
            evt.preventDefault();
            var con = confirm('You want to delete?');
            if(con)
            {
                $.ajax({
                    type: "GET",
                    url: burl + "/department/delete?id=" + id,
                    success: function (sms) {
                       if(sms)
                       {
                            $(obj).parent().parent().remove();
                       }
                    }
                });
            }
        }

    </script>
@endsection