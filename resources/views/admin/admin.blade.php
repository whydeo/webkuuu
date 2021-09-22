@extends('adminlte::page')

@section('title', 'admin')

@section('content-admin')
            
    <h1>admin</h1>

@stop

@section('content')

   <body>
        <H1>HALAMAN ADMIN</H1>
   </body>
{{--    
      <h2 class="text-center">1221</h2>
      <h2 class="text-center"></h2>
      <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="5px">absen</th>
                      <th>nama</th>
                      <th>kelas</th>
                      <th>jenis kelamin</th>
                  
                  </tr>
              </thead>
              <tbody>
               
                    @foreach ($siswa as $siswa)
                    <tr>
                       
                        <td>{{ $siswa->absen }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jk }}</td>
                      
                  </tr>
                  @endforeach
            
              </tfoot>
          </table>
      </div><!-- /.box-body -->
  </div>  --}}
@stop
@section('css')
{{-- <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script> --}}
@stop
@section('js')
{{-- <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.js"></script> 
<script type="text/javascript">
    $(function() {
        $('#example1').dataTable();
    });
</script> --}}
@stop