@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>Dashboard</h1>
@stop

@section('content')
<body>
    <br>
    <br>

    <div class="container">  
        <form action="nilai/nilai" method="GETR">
    <div class="input-group mb-3">
    <input type="text" class="form-control" name="search" >
    <button class="btn btn-outline-secondary" type="submit" ">search</button>
    </div>  
    </form>      
    </div>
    <center>  <span>form input nilai</span></center>
    <br>

      <table id="my_table_1" data-toggle="table" data-sort-stable="true">
          <thead>
          <tr>
              <th data-sortable="true">absen</th>
              <th data-sortable="true">nama</th>
              <th data-sortable="true">kelas</th>
              <th data-sortable="false">jenis kelamin</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="false">keterangan</th>
          </tr>
          </thead>
         <tbody>
            @foreach ($siswa as $siswa)
              <tr>
                  
                    <td>{{ $siswa->absen }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jk }}</td>
                      <td>
                        <select>
                        <option val="1">A</option>
                        <option val="2" selected>B</option>
                        <option val="3">C</option>
        
                    </select>
                    </td>
                    <td>
                        <select>
                        <option val="1">A</option>
                        <option val="2" selected>B</option>
                        <option val="3">C</option>
        
                    </select>
                    </td>
                  </select>
                  </td>
                 
              </tr>
        @endforeach
            
              </tr>
              </tbody>
      </table>
      
    
    </div>

</body>
       
@stop

@section('css')
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      console.log('ready');
      $('#my_table_1').find('input[type="date"]').change(function() {
        console.log('Table 1.Date was changed. Need to check if table is sorted by column C.If so - call the table sort.');
      });
      $('#my_table_1').find('select').change(function() {
        console.log('Table 1.Selection was changed. Need to check if table is sorted by column B.If so - call the table sort.');
      });
     });
</script>
@stop



