@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>Dashboard</h1>
@stop

@section('content')
<body>
    <br>
    <br>

    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('nilai.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search nilai">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search nilai" id="term">
                        <a href="{{ route('nilai.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <center>  <span>form input nilai</span></center>
    <br>
    <form name="add_item" id="add_item" >
      {{ csrf_field() }}
      <table id="my_table_1" data-toggle="table" data-sort-stable="true">
          <thead>
          <tr>
              <th data-sortable="true" width="10px">absen</th>
              <th data-sortable="true">nama</th>
              <th data-sortable="true">kelas</th>
              <th data-sortable="false">jenis kelamin</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">berkualitas</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">berbudi</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">berdaya</th>
              <th data-sortable="true">C</th>
              <th data-sortable="false">D</th>
              <th data-sortable="true">A</th>
              <th data-sortable="true">B</th>
              <th data-sortable="true">berhasil</th>
              <th data-sortable="false">keterangan</th>
          </tr>
          </thead>
         <tbody>
            @foreach ($siswa as $siswa)
              <tr>                               
                <td><label >{{ $siswa->absen }} </label></td>
                <td><label >{{ $siswa->nama }}</td>
                <td><label >{{ $siswa->kelas }}</td>
                <td><label >{{ $siswa->jk }}</td>
                <td><input  type="number"  id="inputProductPrice" oninput="myFunction()" ></td>
                <td> <input type="number"  id="inputGST" oninput="myFunction()"> </td>
                <td><input type="number"  id="inputDelivery" oninput="myFunction()"> </td>
                <td> <input type="number"   id="bagi" oninput="myFunction()">
                <td><input  type="text" id="total"   name="berkualitas[]"></td>

                <td><input  type="number"  id="inputpiece" oninput="myFunction()" ></td>
                <td> <input type="number"  id="inputgift" oninput="myFunction()"> </td>
                <td><input type="number"  id="inputvery" oninput="myFunction()"> </td>
                <td> <input type="number"   id="bagii" oninput="myFunction()">
                <td><input  type="text" id="tatol"   name="berbudi[]"></td>

                <td><input  type="number"  id="inputpiece1" oninput="myFunction()" ></td>
                <td> <input type="number"  id="inputgift1" oninput="myFunction()"> </td>
                <td><input type="number"  id="inputvery1" oninput="myFunction()"> </td>
                <td> <input type="number"   id="bagii1" oninput="myFunction()">
                <td><input  type="text" id="tatol1"   name="berdaya[]"></td>
                
                <td><input  type="number" id="inputpiece2" oninput="myFunction()" ></td>
                <td> <input type="number" id="inputgift2" oninput="myFunction()"> </td>
                <td><input type="number"  id="inputvery2" oninput="myFunction()"> </td>
                <td> <input type="number" id="bagii2" oninput="myFunction()">
                <td><input  type="text"   id="tatol2"   name="berhasil[]"></td>
                <td> <input type="textarea">

               


              
              </tr>
        @endforeach
            
              </tr>
              </tbody>
      </table>
      <br>     
       <br>
      <br>
     

       <button type="button" id="submit" name="submit" class="btn btn-warning">Submit</button>
    </div>
</form>
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
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
        
         $('#submit').click(function () {
                $.ajax({
                    url: "{{route('nilai.store')}}",
                    method: "POST",
                    data: $('#add_item').serialize(),
                    type: 'json',
                  
                });
           
            });

     });
     function myFunction() {
        var price = document.getElementById("inputProductPrice").value;
        var gst = document.getElementById("inputGST").value;
        var delivery = document.getElementById("inputDelivery").value;
        var bagi = document.getElementById("bagi").value;
        var average = +price + +gst + +delivery + +bagi ;
        document.getElementById("total").value = average /4;
         
        var piece = document.getElementById("inputpiece").value;
        var gift = document.getElementById("inputgift").value;
        var very = document.getElementById("inputvery").value;
        var bagii = document.getElementById("bagii").value;
        var average = +piece + +gift + +very + +bagii ;
        document.getElementById("tatol").value = average /4;

        var piece1 = document.getElementById("inputpiece1").value;
        var gift1 = document.getElementById("inputgift1").value;
        var very1 = document.getElementById("inputvery1").value;
        var bagii1 = document.getElementById("bagii1").value;
        var average = +piece1 + +gift1 + +very1 + +bagii1 ;
        document.getElementById("tatol1").value = average /4;

        var piece2 = document.getElementById("inputpiece2").value;
        var gift2 = document.getElementById("inputgift2").value;
        var very2 = document.getElementById("inputvery2").value;
        var bagii2 = document.getElementById("bagii2").value;
        var average = +piece2 + +gift2 + +very2 + +bagii2 ;
        document.getElementById("tatol2").value = average /4;
    }

</script>
@stop



