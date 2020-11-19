@extends('dashboard-user.layout.app')

@section('title', 'Dashboard | User')

@section('content')

        <div class="my-3 my-md-5 ">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
              </h1>
            </div>
            
            <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="card" style="background: #1E90FF;">
          <div class="col-12">
            <div class="callout callout-success">
            <br>
              <h3><b>Selamat Datang di SIPESU (Sistem Pengarsipan Surat Masuk dan Surat Keluar) Pekon Sukoharjo I</b></h3>
              Jl. Pujo Jatmiko No. 126 Pekon Sukoharjo I Kecamatan Sukoharjo Kabupaten Pringsewu
              <br>
              <br>
              <br>
              <br>
              <br>
              
              <div id="clock"></div>
		<script type="text/javascript">
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		</script>
		<script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
		</script>
    <br>
    <br>
            </div>
            </div>
            </div>
      </section>
              
              <div class="col-md-6 col-lg-12">
                <div class="row">
                  <div class="col-sm-6 col-lg-4">
                    <div class="card" style="background:#DDA0DD;">
                      <div class="card-body">
                        <h1 class="mb-1">{{$total_suratmasuk}}</h1>
                        <h5>Jumlah Surat Masuk</h5>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-1" style="height: 100%"></div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card" style="background: #98FB98;">
                      <div class="card-body">
                        <h1 class="mb-1">{{$total_suratkeluar}}</h1>
                        <h5>Jumlah Surat Keluar</h5>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-2" style="height: 100%"></div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card" style="background: #FFDAB9;">
                      <div class="card-body">
                        <h1 class="mb-1">{{$user}}</h1>
                        <h5>Jumlah Penguna</h5>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-3" style="height: 100%"></div>
                      </div>
                    </div>
                    
                   </div>
                    

                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      @endsection