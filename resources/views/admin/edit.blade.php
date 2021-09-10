@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>edit</h1>
@stop

@section('content')
    <p>selamat datang di website ku</p>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('siswa.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>absen:</strong>
                    <input type="text" name="title" value="{{ $siswa->absen }}" class="form-control" placeholder="Title">
                </div>
            </div>
          
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nama:</strong>
                        <input type="text" name="title" value="{{ $siswa->nama }}" class="form-control" placeholder="Title">
                    </div>
                </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>kelas:</strong>
                            <input type="text" name="title" value="{{ $siswa->kelas }}" class="form-control" placeholder="Title">
                        </div>
                    </div>
               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jenis kelamin:</strong>
                                <input type="text" name="title" value="{{ $siswa->jk }}" class="form-control" placeholder="Title">
                            </div>
                        </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop