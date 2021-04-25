@extends('master')
    @section('content')

  <!-- breadcrumb start-->
  <br><br><br><br><br><br><br>
  <br>
  <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Lokasi Donor</h2>
                            <p>Home<span>/</span>Lokasi Donor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- breadcrumb start-->

    <!-- our_ability part start-->
        <br><br>
        <div class="container">
        <form class="form-inline my-2 my-lg-0" method="get" action="/search">
        <input class="form-control mr-sm-2" type="text" name="q" id="q" placeholder="Lokasi Donor" aria-label="Search" value="{{request('q')}}">
            <button class="btn btn-primary" type="submit">Cari Lokasi</button>
    </form> <br>
  
            <div class="row justify-content-between align-items-center">
            @foreach ($search as $lks)
            <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="/img/hospital.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="mt-0 mb-1">{{$lks->nama}}</h5>
                    <p class="card-text">{{$lks->alamat}}  </div>
                </div>
                </div>
                {{ $search->links() }}
            @endforeach
            </div>
        </div>
        
 
@endsection
    