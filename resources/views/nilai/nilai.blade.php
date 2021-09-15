@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_siswa')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
           
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
     
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <button type="submit">Submit form</button>
    <table id="example" class="display" style="width:">
        <thead>
            <tr>
                <th>absen</th>
                <th>nama</th>
                <th>kelas</th>
                <th>jenis kelamin</th>
                <th>berkualitas</th>
                <th>berbudi</th>
                <th>berdaya</th>
                <th>berhasil</th>
                <th>keterangan</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                
            </tr>
                
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>




     
       
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    
@stop

@section('js')
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    var table = $('#example').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [1,2,3]
        }]
    });
 
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
} );
</script>



@stop





<script type="text/javascript">$('#add-transaksi').on('click', function(e){
    var maxTr = 30;
    var count = document.getElementById("table-kas").getElementsByTagName("tr").length;
    if(count <= maxTr){
        e.preventDefault();
        var images = `
        <tr>
            <td>
                <input name="absen[]" class="form-control" type="text" required>
            </td>
            <td>
                <input name="nama[]" class="form-control" type="text" required>
            </td>
            <td>
                <input name="kelas[]" class="form-control" type="text" required>
            </td>
            <td>
                <input name="jk[]" class="form-control" type="text" required>
            </td>
            <td>
                <a class="fa fa-trash btn-danger btn-sm delete" href="javascript:void(0)"></a>
            </td>
        </tr>
        `;
        $(".select2").select2();
        i++;
    }else {
        toastr.error("Maksimal 30 item !!")
        return false;
    }
});

$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $('#save').on('click', function(e){
            e.preventDefault();
            var dataString = $("#siswa, #form-item ").serialize();
            $.ajax({
                type:'POST',
                url: `{{ route('siswa.store') }}`,
                data: dataString,
                success: function(data)
                {
                    if(data.error){
                        toastr.error(data.error);
                    }else {
                        window.location.href = data.route
                    }
                }, error: function(err){
                    toastr(data.error);
                }
            });
        });
    </script>