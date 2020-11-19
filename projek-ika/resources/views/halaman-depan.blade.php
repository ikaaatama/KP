<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Beranda</title>
    <link rel="stylesheet" href="{{asset('assets/user/fontawesome-5.5/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/user/slick/slick.css') }}">
    <link rel="stylesheet" href="{{asset('assets/user/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{asset('assets/user/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/user/css/templatemo-style.css') }}" />
 
    <!--
	The Town
	https://templatemo.com/tm-525-the-town
	-->
  </head>
  <body>    
    <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar navbar-dark bg-primary">              
        <div class="container">   
          <div class="tm-next">
          <a href=""><img src="images/psw.png" width="30px" height="40px" ></a>
          <a class="navbar-brand" href="{{ url('/') }}"><font size="5">SIPESU</font></a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#introduction">Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Layanan</a>
              </li>   
              @guest
                            <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="{{url('/home')}}">Dashboard</a>
                        </li> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link tm-nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} &nbsp;<i class="fas fa-caret-down tm-nav-link"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                        Sunting Profil
                                    </a>

                                    <a href="/changePassword" class="dropdown-item">
                                        Ubah Sandi
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest                 
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">Selamat Datang</h2>
            <p class="tm-hero-subtitle">
            SISTEM PENGARSIPAN SURAT MASUK DAN SURAT KELUAR
              <br />Pekon Sukoharjo I 
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#introduction" class="text-center tm-down-arrow-link">
          <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>

    <section id="introduction" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="images/potbar.jpeg" alt="Image" class="img-fluid tm-intro-img" />
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Profile</h2>
                <p class="mb-4 tm-intro-text">
                  <strong>SIPESU</strong> merupakan sistem pengarsipan surat yaitu surat masuk dan surat keluar di kantor Pekon Sukoharjo I. 
              </p><br>
                
                <div class="tm-next">
                  <a href="#work" class="tm-intro-text tm-btn-primary">Selengkapnya</a>
                </div>
            </div>
          </div>
        </div>

        <div class="row tm-section-pad-top">
          <div class="col-lg-4">
            <i class="fas fa-4x fa-inbox text-center tm-icon"></i>
            <h4 class="text-center tm-text-primary mb-4">Surat Masuk</h4>
            <p align="center"> 
            Layanan ini adalah berisi surat yang masuk kedalam kantor pekon sukoharjo I, baik yang berasal dari instansi/perusahaan lain atau dari bagian lain pada kantor yang sama.
            </p>
          </div>
        
        <div class="col-lg-4 mt-5 mt-lg-0">
          <i class="fas fa-4x fa-envelope-open-text text-center tm-icon"></i>
          <h4 class="text-center tm-text-primary mb-4">Surat Keluar</h4>
          <p align="center"> 
          Layanan ini adalah berisi surat yang dikirim oleh kantor pekon sukoharjo I atau antar bagian dalam kantor pekon sukoharjo I tersebut. Ditujukan kepada instansi/ perusahaan lain atau ke bagian lain dalam kantor yang sama.
          </p>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
          <i class="fas fa-4x fa-print text-center tm-icon"></i>
          <h4 class="text-center tm-text-primary mb-4">Cetak</h4>
          <p align="center"> 
          Layanan ini adalah layanan mencetak laporan seluruh surat pengarsipan di kantor pekon sukoharjo I, mulai dari laporan surat masuk dan laporan surat keluar.
          </p>
        </div>
      </div>
    </section><br><br><br>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title">ARSIP</h2>
                <div class="mb-5 tm-underline">
                  <div class="tm-underline-inner"></div>
                </div>
                <p class="mb-5">
                Ayo Rawat Semua Informasi Penting.
                </p>
            </div>
            
            
        </div>
      </div>
      
    </section>
    <script src="{{asset('assets/user/js/jquery-1.9.1.min.js') }}"></script>     
    <script src="{{asset('assets/user/slick/slick.min.js') }}"></script>
    <script src="{{asset('assets/user/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('assets/user/js/jquery.singlePageNav.min.js') }}"></script>     
    <script src="{{asset('assets/user/js/bootstrap.min.js') }}"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        $(window).scroll(function(){
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav();        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 400, function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  </body>
</html>