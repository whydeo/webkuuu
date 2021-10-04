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
                            <button class="btn btn-info" type="submit" title="Search kelas">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="keyword" value="{{ $keyword }}"  placeholder="Search kelasi" id="term">
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
                <td class="custom-tbl"><select id="kelas" class="form-control " style="width:100%;" type="text" name="kelas[]">
                    <option value="">guru</option>
                    @foreach ($user as $item)
                    <option value="{{$item->id_kelas}}">{{$item->kelas}}</option>
                    @endforeach
                    </select></td>
              </tr>
          <tr>
              <th  width="10px">absen</th>
              <th >nama</th>
              <th >jenis kelamin</th>
              <th >id</th>
              <th>id kelas </th>
              <th colspan="5">berkualitas</th>
              <th colspan="5">Berbudi</th>
              <th colspan="5">berdaya</th>
              <th colspan="5">berhasil</th>
              <th>keterangan</th>
          </tr>
          </thead>
         <tbody>    
     
            @if ($siswa->count() > 0)
            @foreach ($siswa as $siswa)

            <tr class="4b">
                           
                <td><label >{{ $siswa->absen }} </label></td>
                <td><label >{{ $siswa->nama }}</td>
                <td><label>{{ $siswa->jk }}</td>
                <td><input name="id_siswa[]" value="{{ $siswa->id }}"  style="border:none;background:D1D3D5;" size="1" readonly ></td>
                <td><input name="id_kelas[]" value="{{ $siswa->id_kelas }}"  style="border:none;background:D1D3D5;" size="1" readonly ></td>
              
             
					<td class="berbudi1 berbudi">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi2 berbudi">
						<input type="text" value="" size="5" name="kualitas 1" class="4binput">
					</td>
					<td class="berbudi3 berbudi">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi4 berbudi">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi5 berbudi">
						<input type="text" value="" size="5" name="berkualitas[]" class="4binput" readonly>
					</td>
					<td class="berdaya1 berdaya">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya2 berdaya">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya3 berdaya">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya4 berdaya">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya5 berdaya">
						<input type="text" value="" size="5" name="berbudi[]" class="4binput" readonly>
					</td>
					<td class="kualitas1 kualitas">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas2 kualitas">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas3 kualitas">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas4 kualitas">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas5 kualitas">
						<input type="text" value="" size="5" name="berdaya[]" class="4binput" readonly>
					</td>
                    <td class="hasil1 hasil">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="hasil2 hasil">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="hasil3 hasil">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="hasil4 hasil">
						<input type="text" value="" size="5" name="kualitas1" class="4binput">
					</td>
					<td class="hasil5 hasil">
						<input type="text" value="" size="5" name="berhasil[]" class="4binput" readonly>
					</td>

                    <td >
						<input  value="" size="5" name="keterangan[]" >
					</td>

					
		
               

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

@endif
</body>
       
@stop

@section('css')
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
   $(document).ready(function(){

				function nilai(b4){
					var b4t = b4;
					$(".4binput").change(function(){

						var b1 = $(this).val();
						var b2 = $(this).parent().parent().children("."+b4t+"2").children("input").val();
						var b3 = $(this).parent().parent().children("."+b4t+"3").children("input").val();
						var b4 = $(this).parent().parent().children("."+b4t+"4").children("input").val();
						var ave1 = b1*1 + +b2*1 + +b3*1 + +b4*1;
						var n1 = ave1/4;
						var n1

						if (n1 == 1) {
							var total1 = 'D';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
						}
				        else if (n1 == 2) {
							var total1 = 'C';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
						}
				      	else if (n1 == 3) {
							var total1 = 'B';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
					 	}
					   else if (n1 ==4) {
							var total1 = 'A';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
						}
                 
                      });
					
						}
					

						nilai("berbudi");
						nilai("berdaya");
						nilai("kualitas");
                        nilai("hasil");


						

					
			});
		</script>
     
  
</script>
@stop



