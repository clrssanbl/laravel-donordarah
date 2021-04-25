@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <div class="container">
                <h2>List Berita</h2>


                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <a href="/berita/createberita" class="btn btn-primary my-3"> Tambah Berita</a>
                @foreach ($beritas as $berita)

                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$berita->judul}}</h5>
                        <p class="card-text">{{$berita->isi}}</p>
                        <a href="/berita/{{$berita->id}}" class="badge badge-info"> Detail</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
 @endsection