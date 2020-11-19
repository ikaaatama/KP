@extends('dashboard-admin.layout.master')

@section('title', 'Admin | Beranda')

@section('content')

@section('css')
<style>
.ui-datepicker {
	width: 490px;
	height: 300px;
	background: #4E73DF;
	border: 1px solid #555;
	color: #EEE;
}


</style>
@stop

<body id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		</div>

		<!-- Content Row -->
		<div class="row">

			<!-- Pemasukan Hari ini Card Example -->
			<div class="col-xl-4 col-md-9 mb-4" style="padding-left: 34px;">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body" >
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-sm font-weight-bold text-primary mb-1">Jumlah Surat Masuk</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_suratmasuk}}</div>
							</div>
							<div class="col-auto">
								<i class="fa fa-inbox fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Pengeluaran Hari ini Card Example -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-sm font-weight-bold text-success mb-1">Jumlah Surat Keluar</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_suratkeluar}}</div>
							</div>
							<div class="col-auto">
								<i class="fa fa-envelope-open-text fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Pengeluaran Hari ini Card Example -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card border-left-info shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-sm font-weight-bold text-info mb-1">Jumlah Pengguna</div>
								<div class="row no-gutters align-items-center">
									<div class="col-auto">
									<div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<i class="fa fa-user fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>


		<!-- Content Row -->
<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
		<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body" style="padding-left: 12px;">
					<div class="col mr-2">
              <h1 class="m-0 text-dark">SIPESU</h1>
            </div><!-- /.col -->
        
      <!-- /.content-header -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
		<card>
          <div class="col-12">
            <div class="callout callout-success">
              <h4><b>Selamat Datang di SIPESU (Sistem Pengarsipan Surat Masuk dan Surat Keluar) Pekon Sukoharjo I</b></h4>
              
			  Jl. Pujo Jatmiko No. 126 Pekon Sukoharjo I Kecamatan Sukoharjo Kabupaten Pringsewu
              <br>
              <br>
              <br>
              <br>
			  <img src="images/potbar.jpeg" alt="" style="width: 50%;">
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
            </div>
			</div>
            </div>
      </section>
		

	

			</div>
		</div>

	</div>

	@endsection

	@section('js')
	
	<script>
    $(function () {
        $('#datetimepicker12').datepicker({
			inline: true, sideBySide: true
		});
    });
</script>

@stop

