@extends('dashboard-user.layout.app')


@section('title', 'Dashboard | Surat Masuk')

@section('content')


<div class="row row-cards row-deck mt-5">
    <div class="col-12">
        <div class="container">
        <div class="card">
            <div class="table-responsive">

            <div class="card-header text-center">
                    <h3>Laporan Surat Masuk</h3>
                </div>
        <div class="card-body">
                <table class="table table-bordered" id="example1">
               <thead>
               <tr>
			   		<td width="18%">No Surat</td>
                    <td width="21">Asal Surat</td>
                    <td width="18%">Tanggal Masuk</td>
                    <td width="11%">Tertuju</td>
                    <td width="20%">Peihal</td>
                    <td width="20%">File</td>
                   
                    
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
                    </tr>
                    @endforeach
               </tbody>
            </table>
            </div>
</div>
            </div>
        </div>
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