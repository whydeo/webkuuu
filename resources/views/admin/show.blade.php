@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>show</h1>
@stop

@section('content')
    <p>selamat datang di website ku</p>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('siswa.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>absen:</strong>
                {{ $siswa->absen }}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama:</strong>
                    {{ $siswa->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelas:</strong>
                        {{ $siswa->kelas }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>jenis kelamin:</strong>
                            {{ $siswa->jk}}
                        </div>
                    </div>

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop