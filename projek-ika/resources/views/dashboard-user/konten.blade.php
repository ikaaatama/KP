@extends('dashboard-user.layout.app')

@section('title', 'Artikel | User')

@section('content')
            
            <div class="my-3 my-md-5">
              <div class="container">
                 <div class="page-header">
                    <h1 class="page-title">
                       Artikel
                   </h1>
                 </div>
                 <div class="row row-cards row-deck">
                 @foreach ($artikel as $a)
              <div class="col-sm-6 col-xl-3">
              <div class="card">
                  <a href="#"><img class="card-img-top" src="{{ asset('Uploads/'.$a->gambar) }}" alt="And this isn&#39;t my nose. This is a false one." height="250px"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="{{ route('artikel.detail',$a->id) }}">{{$a->judul}}</a></h4>
                   <div class="text-muted">{{ substr(strip_tags($a->body), 0, 100) }}</div>
                   <div class="d-flex align-items-center pt-5 mt-auto">
                   <!-- <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div> -->
                      <div>
                            <a href="#" class="text-default">{{$a->kategori_artikel->nama_kategori}}</a>
                            <small class="d-block text-muted">{{$a->created_at->diffForHumans()}}</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

@endforeach

              </div>
           </div>
      </div>
</div>
 

      @endsection