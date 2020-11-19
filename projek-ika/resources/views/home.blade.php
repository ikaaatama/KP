@extends('layouts.app')

@section('content')
<body>
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Skylith -->
    <link rel="stylesheet" href="assets/css/skylith-pink.css">

    <!-- jQuery -->

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- Stroke 7 -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Skylith -->
    <link rel="stylesheet" href="assets/css/skylith-pink.css">

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">






<style type="text/css">
    .carousel-item{
        height:-50px;
        position: cover;
        margin-top:50px;
    }
    .corousel-item img{
        margin-top:10px;
    }
    .card{
        position :absolute;
    }
    .nk-header-title{
        margin-top: -450px;
    }
    .nk-footer{
        margin-top: -20px;
    }
    .nk-shop-products{
        margin-top:10px;
    }
    .nk-footer-cont{
        margin-top: -20px;
        height: 50px;
    }
    .nk-box{
        height: 190px;
        margin-top: -20px;
    }
    .nk-btn{
        margin-top: -10px;
    }
    
</style>


<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

  <ol class="carousel-indicators">
    <li class="slide bg-primary"  data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li class="slide bg-primary" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="slide bg-primary" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/skj.jpg" height="680px"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/potbar.jpeg" height="680px"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/aula.jpeg" height="680px"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        
<div class="nk-header-title">
    
    <div class="nk-header-content">
              
            <a class="nk-header-title-scroll-down nk-anchor text-white" style="background-color: #1E90FF" href="#nk-header-title-scroll-down">
            <span class="pe-7s-angle-down" ></span><h4><font face="Arial" size="3" color="#ffffff">klik</font></h4></a>
    </div>
    
</div>

<div id="nk-header-title-scroll-down"></div>

<!-- END: Header Title -->
                        
    <br>
    <div class="container">
    <div class="row" style="padding-left:20px;">
    
    <div class="col">
        <div class="nk-shop-products"> 
                <div class="nk-shop-product-thumb">
                    <a href="{{ url('lapmasuk') }}"><img src="images/buat.png" alt="Silver-Toned Plimsolls"></a>  
                </div>
                <div class="nk-shop-product-btn">
                    <div class="nk-shop-product-price" style="color: #1E90FF;">Surat Masuk</div>
                        <a href="{{ url('lapmasuk') }}" class="nk-shop-product-add-to-cart" style="color: #1E90FF;">Lihat</a>
                </div>
            </div>
</div>


            <div class="col">  
            <div class="nk-shop-product">
                <div class="nk-shop-product-thumb">
                    <a href="{{ url('lapmasuk') }}"><img src="images/buat.png" alt="Silver-Toned Plimsolls"></a>  
                </div>
                <div class="nk-shop-product-btn">
                    <div class="nk-shop-product-price" style="color: #1E90FF;">Surat Keluar</div>
                        <a href="{{ url('lapmasuk') }}" class="nk-shop-product-add-to-cart" style="color: #1E90FF;">Lihat</a>
                </div>
            </div>
</div>
</div>

        
        <div class="col">
            <div class="nk-shop-product">
                <div class="nk-shop-product-thumb">
                    <a href="/list_pengaduan"><img src="images/list.png"  height="300px"></a>  
                </div>
                <div class="nk-shop-product-btn">
                    <div class="nk-shop-product-price" style="color: #1E90FF;">Laporan</div>
                        <a href="/list_pengaduan" class="nk-shop-product-add-to-cart" style="color: #1E90FF;">Cetak</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    
    

    <!-- START: Let's Work Together -->
    <div class="nk-box text-center">
        <div class="nk-gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-dark">ARSIP</h2>
                    <div class="nk-gap-1 mnt-20"></div>
                    <p class="text-dark">
                Ayo Rawat Semua Informasi Penting</p>
                    
            </div>
        </div>
        <div class="nk-gap-1"></div>
    </div>
    <br>
    <!-- END: Let's Work Together -->

    <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- body modal -->
              <div class="modal-body">
                  
        
                    <div class="form-group">
                      <b>WhatsApp</b>
                      <input class="form-control" type="text" value="08121" disabled="disabled">
                    </div>

                    <div class="form-group">
                      <a href="https://www.google.com/maps/place/DINAS+KOMINFO+DAN+STATISTIK+PROVINSI+LAMPUNG/@-5.4399721,105.2576774,16.16z/data=!4m8!1m2!2m1!1sDINAS+KOMINFO+KOTA+provinsi+lampung!3m4!1s0x2e40da2eedc16655:0xcdf9f2e564356a73!8m2!3d-5.4411!4d105.2586829" target="_blank"><img src="../images/alamat.png" width="470px" height="300px" ></a>
                    </div>

                    <div class="form-group">
                      <b>Alamat</b>
                      <textarea rows="3" class="form-control " disabled="disabled">Jl. WR.Mongonsidi No.69 Teluk Betung Telp.Fax (0721) 475270</textarea>
                    </div>

                    
              </div>
            </div>
          </div>
        </div>


    
        <!--
    START: Footer

    Additional Classes:
        .nk-footer-transparent
-->
<footer class="nk-footer " style="background-color: #1E90FF;">
    

    <div class="nk-footer-cont nk-footer-cont-md">
        <div class="container text-center">
            <div class="row vertical-gap sm-gap align-items-center">

               

                

                <div class="col-lg-5 text-lg-left">
                    <div class="nk-footer-text text-white">
                        <p> &copy; SIPESU</p>
                    </div>
                </div>

                <div class="col-lg-2">
                    
                        <a class="nk-footer-scroll-top-btn-2 nk-anchor  text-white" href="#top">
                            Go To Top
                        </a>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

<!-- START: Scripts -->
<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Skylith -->
<script src="assets/js/skylith.min.js"></script>
<script src="assets/js/skylith-init.js"></script>
</body>
@endsection