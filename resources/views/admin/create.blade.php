@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>Dashboard</h1>
@stop

@section('content')  <body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Add Items</h3></div>
                    <div class="panel-body">

                        <form name="add_item" id="add_item" class="form-inline">
                            {{ csrf_field() }}


                            <div class="table-responsive">
                                <table class='table table-bordered table-hover' id="tab_logic">
                                    <thead>
                                        <tr class='info'>
                                            <th style='width:10%;'></th>
                                            <th style='width:10%;'>absen</th>
                                            <th style='width:30%;'>nama</th>
                                            <th style='width:10%;'>kelas</th>
                                            <th style='width:10%;'>jenis kelamin</th>
                                            <th style='width:10%;'>ACTION</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr id="addr0">
                                            <td class="custom-tbl"><input class='form-control input-sm'style='width:100%;' type="text" value="1" id="" name="" readonly required></td>
                                            <td class="custom-tbl"><input class='form-control input-sm' style='width:100%;' type="text" id="absen"  name="absen"></td>
                                            <td class="custom-tbl"><input class='form-control input-sm' style='width:100%;' type="text" id="nama" name="nama"></td>
                                            <td class="custom-tbl"><input class='form-control input-sm' style='width:100%;' type="text" id="kelas" name="kelas"></td>
                                            <td class="custom-tbl"><input class=' form-control input-sm' id="jk" style='width:100%;' type="text" name="jk"></td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stop

@section('js')
<script src="{{asset('js/main.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script> console.log('Hi!'); </script>
    <script type="text/javascript">



        $(document).ready(function () {
            var i = 1;
        
        
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row' + i 
                        + '" class="dynamic-added"><td class="custom-tbl"><input id="pr_item' + i 
                        + '" class="form-control input-sm"style="width:100%;" type="text" value="' + i 
                        + '" name="" readonly required></td><td class="custom-tbl"><input id="absen' + i 
                        + '"class="form-control input-sm" style="width:100%;" type="text"' + i 
                        + ');" name="absen"></td><td class="custom-tbl"><input id="nama"' + i 
                        + '"class="form-control input-sm" style="width:100%;" type="text" name="nama"></td><td class="custom-tbl"><input id="kelas' + i 
                        + '" class="form-control input-sm" style="width:100%;" type="text" name="kelas"></td><td class="custom-tbl"><input id="jk' + i 
                        + '" class="form-control input-sm" style="width:100%;" type="text" ' + i 
                        + ');" name="jk"></td</td><td class="custom-tbl"><button type="button" name="remove" id="' + i 
                        + '" class="btn btn-danger btn-sm btn_remove"><span class="glyphicon glyphicon-remove"></span></button></td></tr>');
            });
        
        
            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
        
            $('#submit').click(function () {
                $.ajax({
                    url: "{{route('siswa.store')}}",
                    method: "POST",
                    data: $('#add_item').serialize(),
                    type: 'json',
        


                });
            });
        
        });
                </script>
        
           
@stop