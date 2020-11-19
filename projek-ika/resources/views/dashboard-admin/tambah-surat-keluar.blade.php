@extends('dashboard-admin.layout.master')

@section('title', 'Admin | Tambah Surat-Keluar')

@section('content')

<body id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
	
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="h5 mb-0 text-gray-800">Tambah Surat Keluar</h5>
			</div>
			<!-- Card Body -->
			<div class="card-body">
            <div class="container">
            <form method="post" action="/buat_surat_keluar/proses" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="row">
  
        <div class="form-group col-sm-12">
            <label for="inputJudul">No Surat</label>
            <input type="text" name="no_surat" class="form-control @error('no_surat') is-invalid @enderror" required autocomplete="no_surat" autofocus>
            @error('no_surat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

<div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Tanggal Keluar</label>
            <input type="date" name="tgl_keluar" class="form-control @error('tgl_keluar') is-invalid @enderror" required autocomplete="tgl_keluar" autofocus>
            @error('tgl_keluar')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

<div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Tertuju</label>
            <input type="text" name="tertuju" class="form-control @error('tertuju') is-invalid @enderror" required autocomplete="tertuju" autofocus>
            @error('tertuju')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

<div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Perihal</label>
            <input type="text" name="perihal" class="form-control @error('perihal') is-invalid @enderror" required autocomplete="perihal" autofocus>
            @error('perihal')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required autocomplete="alamat" autofocus>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div><br>

    <p class="text-right">
        <input type="submit" value="Kirim" class="btn btn-primary btn-recaptcha">
        <a href="/suratkeluar" class="btn btn-secondary">Cancel</a>
    </p>

</form><br><br>
</div>
				</div>
			</div>
		</div>

        
@endsection
@section('js')

@stop