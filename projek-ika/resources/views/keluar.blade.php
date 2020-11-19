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

    <!-- Gambar -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">
<body>
<br><br><br>
<div class="container">

<a style="color: #1E90FF" href="/suratmasuk"><i class="nav-icon fas fa-long-arrow-alt-left fa-3x" ></i></a>
        <div class="card mt-2">
            <div class="card-header text-center">
                    <h3>Tambah Surat Keluar </h3>
                </div>
                <div class="card-body">
    
<form method="post" action="/tambah/keluar" enctype="multipart/form-data">
{{ csrf_field() }}



    <div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">No Surat</label>
            <input type="text" name="no_surat" class="form-control @error('no_surat') is-invalid @enderror" required autocomplete="no_surat" autofocus>
            @error('judul')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12">
            <label for="inputJudul">Tanggal Keluar</label>
            <input type="date" name="tgl_keluar"  class="form-control @error('tgl_keluar') is-invalid @enderror" required autocomplete="tgl_keluar" autofocus>
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
            <label for="inputJudul">Alamat Surat</label>
            <input type="text" name="alamat_surat" class="form-control @error('alamat_surat') is-invalid @enderror" required autocomplete="asal_surat" autofocus>
            @error('alamat_surat')
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


    <p class="text-center">
        <input type="submit" value="Kirim" class="btn btn-primary btn-recaptcha">
        <a href="/suratkeluar" class="btn btn-secondary">Batal</a>
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

<!-- gambar -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="../js/main.js"></script>
</body>
@endsection
