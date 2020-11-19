@extends('dashboard-user.layout.app')

@section('title', 'Laporan Surat Keluar Pekon Sukoharjo')

@section('content')


<div class="row row-cards row-deck mt-5">
    <div class="col-12">
        <div class="container">
        <div class="card">
            <div class="table-responsive">

            <div class="card-header text-center">
                    <h3>Laporan Surat Keluar</h3>
                </div>
        <div class="card-body">
                <table class="table table-bordered" id="laravel_datatable">
               <thead>
               <tr>
                    <td width="18%"> Nomor surat</td>
                    <td width="21">Tanggal Keluar</td>
                    <td width="18%">Tertuju</td>
                    <td width="11%">Alamat Surat</td>
                    <td width="20%">Perihal</td>
                    
                  </tr>
               </thead>
               <tbody>
                 @foreach($keluar as $p)
                    <tr>
                        <td>{{$p->no_surat}}</td>
                        <td>{{$p->tgl_keluar}}</td>
                        <td>{{$p->tertuju}}</td>
                        <td>{{$p->alamat_surat}}</td>
                        <td>{{$p->perihal}}</td>
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
$(document).ready( function () {
    $('table_id').DataTable();
} );

</script>

@stop