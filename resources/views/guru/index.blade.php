@extends('adminlte::page')

@section('title', 'admin')

@section('content-admin')
            
    <h1>admin</h1>

@stop

@section('content')

   <body>
       
   </body>
 
      <h2 class="text-center">form guru</h2>
      <h2 class="text-center"></h2>
      <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
           
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('guru.create') }}">  INPUT SISWA</a>
            </div>
        </div>
    </div>
      <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th >nama </th>
                      <th>mata pelajaran</th>
                 
                  
                  </tr>
              </thead>
              <tbody>
               
                    @foreach ($guru as $guru)
                    <tr>
                       
                        <td>{{ $guru->guru }}</td>
                        <td>{{ $guru->mapel }}</td>
                       
                      
                  </tr>
                  @endforeach
            
              </tfoot>
          </table>
      </div>
  </div>  
@stop
@section('css')
 <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script> 
@stop
@section('js')
 <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.js"></script> 
<script type="text/javascript">
    $(function() {
        $('#example1').dataTable();
    });
</script> 
@stop