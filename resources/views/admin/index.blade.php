@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
  
@stop

@section('content')
<body>
    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('siswa.index') }}" method="GET" role="search">
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
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="3">Three</option>
                        </select>
                       <a href="{{ route('siswa.index') }}" class=" mt-1">
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
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
           
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('siswa.create') }}">  TAMBAH SISWA</a>
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
                        <th width="5px">absen</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>jenis kelamin</th>
                        <th>action</th>
                    
                    </tr>
                </thead>
                <tbody>
                        @isset($keyword)
                            
                        
                      @foreach ($siswa as $siswa)
                      
                      <tr>
                         

                          <td>{{ $siswa->absen }}</td>
                          <td>{{ $siswa->nama }}</td>
                          <td>{{ $siswa->kelas }}</td>
                          <td>{{ $siswa->jk }}</td>

                   
                    <td class="text-center">
                    <form action="{{ route('siswa.destroy',$siswa->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('siswa.show',$siswa->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('siswa.edit',$siswa->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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