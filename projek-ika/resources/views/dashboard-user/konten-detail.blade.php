@extends('dashboard-user.layout.app')

@section('title', 'Artikel | User')

@section('content')
            
<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Detail Artikel
              </h1>
            </div>
            <div class="row">
              <div class="col-lg-3 order-lg-1 mb-4">
                
                <!-- Getting started -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="#" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Kategori</a>
                </div>
                <!-- Components -->
                <div class="list-group list-group-transparent mb-0">
                @foreach ($categori as $c)
                  <a href="#" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-list"></i></span>{{$c->nama_kategori}}<span>{{$c->artikel_count}}</span></a>
                 @endforeach
                </div>
               
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="text-wrap p-lg-6">  
                      <h2 class="mt-0 mb-4">{{$artikel_detail->judul}}</h2>
                      <img class="card-img-top" src="{{ asset('Uploads/'.$artikel_detail->gambar) }}" alt="And this isn&#39;t my nose. This is a false one." height="450px" width="350px"> <br>
                      <!-- <h3 id="setup-environment">Deskripsi</h3> -->
                      <p>Pada Tanggal : {{$artikel_detail->created_at}}</a>.</p><br>
                      {!! $artikel_detail->body !!}
                      
                      
                      
 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 

      @endsection