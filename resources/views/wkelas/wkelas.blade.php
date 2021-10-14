@extends('adminlte::page')

@section('title', 'show')

@section('content_siswa')
    <h1>show</h1>
@stop

@section('content')
<body>
    <br>
    <br>
    
    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('wkelas') }}" method="GET" role="search">

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-danger" type="submit">Button</button>
                        <select class="form-select" id="term" name=" keyword"value="{{$keyword}} aria-label="Example select with button addon">
                          <option selected >pilih kelas</option>
                          <option value="x RPL">X RPL</option>
                          <option value="X MM">Two</option>
                          <option value="X BKP">Three</option>
                          <option value="x TKRO">X RPL</option>
                          <option value="XII">XII</option>
                          <option value="3">Three</option>
                          <option value="x RPL">X RPL</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="3">Three</option>
                          <option value="3">Three</option>
                          <option value="x RPL">X RPL</option>
                          <option value="x">x</option>
                          <option value="3">Three</option>
                          <option value="3">Three</option>
                        </select>
                       <a href="{{ route('wkelas') }}" class=" mt-1">
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
 
    
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
        <div class=" box-body table-responsive ">
            
            <table id="example1" class="table table-bordered table-striped">
               
                <thead>
                    <tr>
                 
                        </td>
                    </tr>
                    <tr>
                        <th width="5px">absen</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>jenis kelamin</th>
                        <th>berbudi</th>
                        <th>berkualitas</th>
                        <th>berdaya</th>
                        <th>berhasil</th>
                        <th>keterangan</th>

                       
                    
                    </tr>
                </thead>
                
                <tbody>
                        @isset($keyword)
                            
                      @foreach ($nilai as $data)
                      
                      <tr>
                         

                        <td>{{ $data->absen }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>{{ $data->jk }}</td>
                        <td>{{ $data->berbudi }}</td>
                        <td>{{ $data->berkualitas }}</td>
                        <td>{{ $data->berdaya }}</td>
                        <td>{{ $data->berhasil }}</td>
                        <td>{{ $data->keterangan }}</td>

                   
                    
                    
 
                   
                   
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endisset
 
    {{-- {!! $siswa->links() !!} --}}
</body>
@stop

@section('css')
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>

@stop

@section('js')

<script type="text/javascript">
    $(function() {
        $('#example1').dataTable();
    });
</script>
@stop



