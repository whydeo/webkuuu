@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>Dashboard</h1>
   
@stop

@section('content')  
<body>
    <div class="float-right">
        <a class="btn btn-secondary" href="{{ route('guru.index') }}"> Back</a>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
       
       
                <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Add GURU</h3></div>
                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                       {{ session('status') }}
                    </div>
                    @endif
                        <form name="add_item" id="add_item" class="form-inline">
                            {{ csrf_field() }}
               
                            <div class="table-responsive">
                                <table class='table table-bordered  table-hover' id="tab_logic" style="width: 100%;">
                                    <thead>                     
                                        <tr class='info'>
                                            <th >kelas</th>
                                            <th >wali kelas</th>
                                            <th>kode kelas</th>
                                            <th >ACTION</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr id="addr0">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                       
                                            <td class="custom-tbl"><button type="button" id="add" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span></button></td>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamic_field">
                                    <tbody>
                                </table>
                            </div>
                            <button type="button" id="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@stop
@section('js')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
 <meta name="_token"  content="{{csrf_token()}}">
  <script> console.log('Hi!'); </script>
    <script type="text/javascript">
        $(document).ready(function () {
            var i = 1;
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row' + i 
                        + '" class="dynamic-added">' + i 
                        + '"' + i 
                        + '"<td class="custom-tbl"><input id="kelas' + i 
                        + '"class="form-control input-sm" style="width:100%;" type="text"' + i 
                        + ');" name="kelas[]"></td><td class="custom-tbl"><input id="wkelas"' + i 
                        + '"class="form-control input-sm" style="width:100%;" type="text" name="wkelas[]"></td>' + i 
                        + '" <td class="custom-tbl">' + i 
                        + '<button type="button" name="remove" id="' + i 
                        + '" class="btn btn-danger btn-sm btn_remove"><span class="glyphicon glyphicon-remove"></span></button></td></tr>');
            });
        
            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
            'use strict';
        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
        
         $('#submit').click(function () {
                $.ajax({
                    url: "{{route('kelas.store')}}",
                    method: "POST",
                    data: $('#add_item').serialize(),
                    type: 'json',
                  
                });
           
            });
        
        });
      
 


      
                </script>
        
           
@stop
{{-- .then((response)=>{
    console.log("response:",response,response.headers);
    console.log("succes");
})
.catch((error)=>{
    console.log(error);
    console.log("ERRRR::",error.response.data);
}) --}}