@extends('dashboard-admin.layout.master')

@section('title', 'Admin | Pengguna')

@section('content')
 
<head>
  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
           
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<style>

.kotak{
    padding-left: 2%;
    padding-right: 2%;
}
</style>


<body>


<div class="container mt-1">
<br>
<table style="width:100%;">
 
      <div class="card mt-25 width:50%" >
        <div class="card-header text-center">
        <h5>Data Pengguna</h5>
        </div>
        
        <form style="width:100%;">
           
            <div class="kotak">
              <table style="width:100%;" id="example1" class="table table-bordered table-striped">
                <thead align="center">
                        <tr>
                        <th width="1%">No</th>
                        <th width="20%">NAMA</th>
                        <th width="15%">EMAIL</th>
                        <th width="14%">OPSI</th>
                        </tr>
                </thead>
                <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>
                        
                        <a class="btn btn-danger btn-sm fas fa-trash-alt " title="Hapus Data"href="/pengguna/hapus/{{$user->id}}" onclick="return confirm('Yakin akan meghapus data ini?')"></a>
		
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </form>
      </div>
   

</table>
</div>


</div>
</body>



@stop