@extends('layouts.admin')

@section('content')
 
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style type="text/css">
    .brand-text{
        margin-left: 10px;
    }
    .ab{
        margin-left: 20px;
    }
</style>

<!-- Gambar -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img class="ab" src="../images/psw.png" width="20px" height="30px">
      <span class="brand-text font-weight-light">Kaur Umum</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Beranda</p>
                </a>
          </li>

          <li class="nav-item">
                <a href="{{ url('suratkeluar') }}" class="nav-link active">
                  <i class="nav-icon fas fa-envelope-open-text"></i>
                  <p>Surat Masuk</p>
                </a>
          </li>
         
          
          <li class="nav-item has-treeview">
            <a href="{{ url('suratkeluar') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ url('cetaklap') }}" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./lapmasuk" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./lapkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Keluar</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<br>

<a href="/tambahmasuk" class="btn btn-secondary">Tambah Data</a>
<div class="card mt-3">
                <div class="card-header text-center">
                    <h3>Data Surat</h3>
                </div>
        <div class="card-body">
                <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                    <td width="18%">no surat</td>
                    <td width="21">tanggal keluar</td>
                    <td width="11%">tertuju</td>
                    <td width="21">alamat surat</td>
                    <td width="20%">perihal</td>
                    <td width="20%">Opsi</td>
                  </tr>
               </thead>
               <tbody>
                 @foreach($masuk as $p)
                    <tr>
                    
                        <td>{{$p->no_surat}}</td>
                        <td>{{$p->tgl_keluar}}</td>
                        <td>{{$p->tertuju}}</td>
                        <td>{{$p->alamat_surat}}</td>
                        <td>{{$p->perihal}}</td>
                        </td>
                        <td>
                        <a class="btn btn-warning btn-sm fas fa-edit" href="/keluar_edit/{{$p->id}}"></a>
                        <a class="btn btn-danger btn-sm fas fa-trash-alt" href="/hapus/{{$p->id}}"></a>
                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>
         </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!--Boostrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--DataTables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
  <!--DateRangePicker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  
  <script type="text/javascript"> 
   //fungsi untuk filtering data berdasarkan tanggal 
   var start_date;
   var end_date;
   var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
      var dateStart = parseDateValue(start_date);
      var dateEnd = parseDateValue(end_date);
      //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
      //nama depan = 0
      //nama belakang = 1
      //tanggal terdaftar =2
      var evalDate= parseDateValue(aData[2]);
        if ( ( isNaN( dateStart ) && isNaN( dateEnd ) ) ||
             ( isNaN( dateStart ) && evalDate <= dateEnd ) ||
             ( dateStart <= evalDate && isNaN( dateEnd ) ) ||
             ( dateStart <= evalDate && evalDate <= dateEnd ) )
        {
            return true;
        }
        return false;
  });

  // fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
  function parseDateValue(rawDate) {
      var dateArray= rawDate.split("-");
      var parsedDate= new Date(dateArray[2], parseInt(dateArray[1])-1, dateArray[0]);  // -1 because months are from 0 to 11   
      return parsedDate;
  }    

  $( document ).ready(function() {
  //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
   var $dTable = $('#laravel_datatable').DataTable({
    "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>"
   });

   //menambahkan daterangepicker di dalam datatables
   //$("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="glyphicon glyphicon-calendar"></i> </div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Search by date range.."> </div>');

   document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

   //konfigurasi daterangepicker pada input dengan id datesearch
  // $('#datesearch').daterangepicker({
   //   autoUpdateInput: false
   // });

   //menangani proses saat apply date range
   // $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
     //  $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
     //  start_date=picker.startDate.format('DD-MM-YYYY');
      // end_date=picker.endDate.format('DD-MM-YYYY');
      // $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
      // $dTable.draw();
  //  });

    $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
      start_date='';
      end_date='';
      $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
      $dTable.draw();
    });
  });
</script>
                <br>
        </div>
    </div>
    

@stop

