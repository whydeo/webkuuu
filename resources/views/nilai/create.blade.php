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
                <form action="{{ route('nilai.create') }}" method="GET" role="search">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-danger" type="submit">Button</button>
                        <select class="form-select" id="term" name=" keyword"value="{{$keyword}} aria-label="Example select with button addon">
                          <option selected >pilih kelas</option>
                          <option value="x RPL">X RPL</option>
                          <option value="X MM">XI RPL</option>
                          <option value="X BKP">XII RPL</option>
                          <option value="x TKRO">X MM</option>
                          <option value="XII">XI MM</option>
                          <option value="3">XII MM</option>
                          <option value="x RPL">X BKP</option>
                          <option value="2">XI BKP</option>
                          <option value="3">XII BKP</option>
                          <option value="3">X TKRO</option>
                          <option value="3">XI TKRO</option>
                          <option value="x RPL">XII TKRO</option>
                          <option value="2">X TB</option>
                          <option value="3">XI TB</option>
                          <option value="3">XII TB</option>
                        </select>
                       <a href="{{ route('nilai.create') }}" class=" mt-1">
                        <span class="input-group-btn">
                       <button class="btn btn-danger" type="button" title="Refresh page">
                        <span class="fas fa-sync-alt"></span>
                        </button>
                      </a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="float-right">
        <a class="btn btn-secondary" href="{{ route('siswa.index') }}"> Back</a>
    </div>
    <br>
    <center>  <span>form input nilai</span></center>
    <br>
    <div class=" box-body table-responsive ">
    <form name="add_item" id="add_item" >
      {{ csrf_field() }}
    
            
        <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                 
                <td colspan="5"  class="custom-tbl"><select id="guru" class="form-control " style="width:100%;" type="text" name="guru[]">guru
                    <option value="">guru</option>
                    @foreach ($guru as $item)
                    <option value="{{$item->id_guru}}">{{$item->guru}}</option>
                    @endforeach
                    </select></td>
                   <td colspan="8">
                    <textarea name="tambahan" placeholder="keterangan tambahan siswa."></textarea>
                   </td>
                   
              </tr>
          <tr>
              <th  ><center>absen</center></th>
              <th><center>nama</center></th>
              <th >jenis kelamin</th>
              <th  >id siswa</th>
              <th>id kelas </th>
              <th colspan="5">berkualitas</th>
              <th colspan="5">Berbudi</th>
              <th colspan="5">berdaya</th>
              <th colspan="5">berhasil</th>
              <th>keterangan</th>
          </tr>
          </thead>
         <tbody>    
     
            <tr>
                <td colspan="5"></td>
            </tr>
            @isset($keyword)
                
           
            @if ($siswa->count() > 0)
            @foreach ($siswa as $siswa)

                 <tr class="4b">
                           
                    <td>{{ $siswa->absen }}</td>
                    <td><input type="text " readonly  style="border:none;background:D1D3D5; background-color:rgb(243, 242, 237);"value="{{ $siswa->nama }}"></td>
                <td><input type="text"readonly  style="border:none;background:D1D3D5; background-color:rgb(243, 242, 237);" value="{{ $siswa->jk }}"></td>
               
                <td><input   name="id_siswa[]" value="{{ $siswa->id }}"  style="border:none;background:D1D3D5; background-color:rgb(243, 242, 237);" size="4" readonly ></td>
                <td><input   name="id_kelas[]" value="{{ $siswa->id_kelas }}"  style="border:none;background:D1D3D5; background-color:rgb(243, 242, 237);" size="4" readonly ></td>
             
					<td class="berbudi1 berbudi">
						<input type="text" value="3" size="1" value="3" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi2 berbudi">
						<input type="text" value="3" size="1" value="3" name="kualitas 1" class="4binput">
					</td>
					<td class="berbudi3 berbudi">
						<input type="text" value="3" size="1" value="3" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi4 berbudi">
						<input type="text" value="3" size="1" value="3" name="kualitas1" class="4binput">
					</td>
					<td class="berbudi5 berbudi">
						<input type="text" value="" size="1" name="berkualitas[]" class="4binput" readonly>
					</td>
					<td class="berdaya1 berdaya">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya2 berdaya">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya3 berdaya">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya4 berdaya">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="berdaya5 berdaya">
						<input type="text" value="" size="1" name="berbudi[]" class="4binput" readonly>
					</td>
					<td class="kualitas1 kualitas">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas2 kualitas">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas3 kualitas">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas4 kualitas">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="kualitas5 kualitas">
						<input type="text" value="" size="1" name="berdaya[]" class="4binput" readonly>
					</td>
                    <td class="hasil1 hasil">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="hasil2 hasil">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="hasil3 hasil">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="hasil4 hasil">
						<input type="text" value="3" size="1" name="kualitas1" class="4binput">
					</td>
					<td class="hasil5 hasil">
						<input type="text" value="" size="1" name="berhasil[]" class="4binput" readonly>
					</td>
                    <td class="hasil6 hasil">
						<input  value=""  name="keterangan[]" class="4binput" >
					</td>

					
		
                    {{-- <td class="rata6 rata">
						<input  value="" size="5" value="" class="ket" name="keterangan[]" >
					</td> --}}

              </tr>
        @endforeach
       
              </tr>
           
              </tbody>
              
      </table>
      <br>     
       <br>
      <br>
     
     
  
    
</form>
</div>

<div class="container">
<button type="button" id="submit" name="submit" class="btn btn-warning">Submit</button>
</div>
@endif
</body>
@endisset
@stop

@section('css')
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

@stop

@section('js')
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
                responsive: true
            });
     });
     
   $(document).ready(function(){

				function nilai(b4){
					var b4t = b4;
					$(".4binput").click(function(){

						var b1 = $(this).val();
						var b2 = $(this).parent().parent().children("."+b4t+"2").children("input").val();
						var b3 = $(this).parent().parent().children("."+b4t+"3").children("input").val();
						var b4 = $(this).parent().parent().children("."+b4t+"4").children("input").val();
						var ave1 = b1*1 + +b2*1 + +b3*1 + +b4*1;
						var n1 = ave1/4;
						var n1

						if (n1 >0  && n1<1.89) {
							var total1 = 'D';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
						}
				        else if (n1 >1.9 && n1 <2.89) {
							var total1 = 'C';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
						}
				      	else if (n1 >2.9&& n1 <3.89) {
							var total1 = 'B';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
					 	}
					   else if (n1 >3.9&& n1 < 4.1) {
							var total1 = 'A';
							$(this).parent().parent().children("."+b4t+"5").children(".4binput").val(total1);
				
                		}
                    
                    var n2=n1*4/4;

                        if (n2 > 0 && n2<1.89) {
                            var total2 ='SANGAT KURANG';
                            $(this).parent().parent().children("."+b4t+"6").children(".4binput").val(total2);
                        }
                        else if (n2>1.9&&n2<2.89) {
                            var total2 = 'CUKUP';
                            $(this).parent().parent().children("."+b4t+"6").children(".4binput").val(total2);
                        }
                        else if (n2 >2.9&&n2<3.89) {
                            var total2='BAIK';
                            $(this).parent().parent().children("."+b4t+"6").children(".4binput").val(total2);
                        }
                        else if (n2>3.9&&n2<4.1) {
                            var total2='SANGAT BAIK';
                            $(this).parent().parent().children("."+b4t+"6").children(".4binput").val(total2);
                        }
                    });		
                }
                nilai("berbudi");
                nilai("berdaya");
                nilai("kualitas");
                nilai("hasil");
            });
                
            const tx = document.getElementsByTagName("textarea");
for (let i = 0; i < tx.length; i++) {
  tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
  tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}     
		</script>
     
  
</script>
@stop



