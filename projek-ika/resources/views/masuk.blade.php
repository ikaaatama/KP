@extends('layouts.app')

@section('content')
<body style="background:url('../images/bg.png')
    no-repeat center center fixed;background-size:cover;">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kirim </title>    
	
	<!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- Stroke 7 -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Skylith -->
    <link rel="stylesheet" href="assets/css/skylith-pink.css">

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<br>
<br>
<br>
<div class="container">
<a style="color: #1E90FF" href="/suratmasuk"><i class="nav-icon fas fa-long-arrow-alt-left fa-3x" ></i></a> 
        <div class="card mt-3">
            <div class="card-header text-center">
                    <h3>Tambah Data Surat Masuk</h3>
                </div>
            	<div class="card-body">
    

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

        <div class="col-sm-8">
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

    <p class="text-center">
        <input type="submit" value="Kirim" class="btn btn-primary btn-recaptcha">
        <a href="/home" class="btn btn-secondary">Cancel</a>
    </p>

</form>
		
 		</div>
    </div>
</div>


<br>
<br>

<!-- START: Scripts -->
<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Skylith -->
<script src="assets/js/skylith.min.js"></script>
<script src="assets/js/skylith-init.js"></script>
<!-- END: Scripts -->



</body>
@endsection
