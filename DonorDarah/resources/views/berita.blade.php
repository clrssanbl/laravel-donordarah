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
                            <h2>News</h2>
                            <p>Home<span>/</span>News</p>
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
            <div class="row justify-content-between align-items-center">
              @foreach ($berita as $brt)
              
               <div class="card" style="width: 100rem;">
                    <div class="card-body">
                        <img src="images/{{$brt->gambar}}" style="height: 130px" alt="logo">
                        <h5 class="card-title">{{$brt->judul}}</h5>
                        <p class="card-text">{{$brt->isi}}</p>
                        <a href="#" class="card-link">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
 
@endsection
    