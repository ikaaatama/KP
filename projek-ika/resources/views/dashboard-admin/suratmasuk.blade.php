@extends('dashboard-admin.layout.master')

@section('title', 'Admin | Surat-Masuk')

@section('content')

<body id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Surat Masuk</h1>
		</div>
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<a href="/tambahmasuk" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Tambah Data</a>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table table-striped table-bordered" border="0" style="width:100%">
						<thead>
                        <tr>
                    <td width="18%">No Surat</td>
                    <td width="20">Asal Surat</td>
                    <td width="18%">Tanggal masuk</td>
                    <td width="11%">Tertuju</td>
                    <td width="20%">Perihal</td>
                    <td width="20%">File</td>
                    <td width="20%">Opsi</td>
                  </tr>
						</thead>
                        <tbody>
                        @foreach($masuk as $p)
                    <tr>
                    
                        <td>{{$p->no_surat}}</td>
                        <td>{{$p->asal_surat}}</td>
                        <td>{{$p->tgl_masuk}}</td>
                        <td>{{$p->tertuju}}</td>
                        <td>{{$p->perihal}}</td>
                        <td><a href="{{ url('/data_file/'.$p->file) }}"><img width="150px" src="{{ url('/data_file/'.$p->file) }}"></a>

                    

                        </td>
                        <td>
                        <a class="btn btn-info btn-sm fas fa-edit" href="/masuk_edit/{{$p->id}}"></a>
                        <a class="btn btn-danger btn-sm fas fa-trash-alt" href="/hapus/{{$p->id}}" onclick="return confirm('Yakin akan menghapus data ini?')"></a>
                        </td>
                    </tr>
                    @endforeach

                        </tbody>
					</table>
				</div>
			</div>
		</div>

        
@endsection
@section('js')
<script>
    $(function () {
        $('#example2').DataTable()
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
							{
								extend: 'pdf',
								footer: true,
								exportOptions: {
										columns: [0,1,2,3,4]
									}
							},
							{
								extend: 'csv',
								footer: false,
								exportOptions: {
										columns: [0,1,2,3,4]
									}
							},
							{
								extend: 'excel',
								footer: false,
								exportOptions: {
										columns: [0,1,2,3,4]
									}
							},
							{
								extend: 'print',
								footer: false,
								exportOptions: {
										columns: [0,1,2,3,4]
									}
							},
							{
								extend: 'copy',
								footer: false,
								exportOptions: {
										columns: [0,1,2,3,4]
									}
							}           
							],

                            
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
@stop