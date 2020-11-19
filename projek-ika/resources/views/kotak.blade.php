<section class="content">
      <div class="container-fluid">
      <br>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               
                <h3>{{$total_suratmasuk}}</h3>
                <p>Surat Masuk</p>
                </div>
                <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <a href="/suratmasuk" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        
        <!-- ./col -->
      </div>   
     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$total_suratkeluar}}</h3>

              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="fas fa-file"></i>
            </div>
            <a href="/suratkeluar" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

       <div class="container">
        <div id="chart">
        </div>
      </div>  
      </div> 
      </div>
</section>