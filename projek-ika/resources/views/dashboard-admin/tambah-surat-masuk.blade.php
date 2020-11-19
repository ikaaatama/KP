@extends('dashboard-admin.layout.master')

@section('title', 'Admin | Tambah Surat-Masuk')

@section('content')

<body id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
	
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="h5 mb-0 text-gray-800">Tambah Surat Masuk</h5>
			</div>
			<!-- Card Body -->
			<div class="card-body">
            <div class="container">
            <form method="post" action="/buat_surat/proses" enctype="multipart/form-data">
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
            <label for="inputJudul">Asal Surat</label>
            <input type="text" name="asal_surat" class="form-control @error('asal_surat') is-invalid @enderror" required autocomplete="asal_surat" autofocus>
            @error('asal_surat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


<div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Tanggal Masuk</label>
            <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" required autocomplete="tgl_masuk" autofocus>
            @error('tgl_masuk')
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



    

    <br>
    <div class="row form-group">
        <div class="col-sm-10">
            <label for="inputAttachments">Lampiran</label>
        </div>

        <div class="col-sm-12">
            <input type="file" name="file" class="form-control @error('pesan') is-invalid @enderror"  required autocomplete="file" autofocus>
            @error('file')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>


        <div class="col-sm-10 ticket-attachments-message text-muted">
            Ekstensi yang diperbolehkan: .jpg, .jpeg, .png
        </div>
    </div>

    <p class="text-right">
        <input type="submit" value="Kirim" class="btn btn-primary btn-recaptcha">
        <a href="/suratmasuk" class="btn btn-secondary">Cancel</a>
    </p>

</form><br><br>
</div>
				</div>
			</div>
		</div>

        
@endsection
@section('js')

@stop