@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <div class="container">
                <h2>Detail Berita</h2>


                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$berita->judul}}</h5>
                        <p class="card-text">{{$berita->isi}}</p>

                        <a href="/edit/{{$berita->id}}" class="btn btn-primary">Edit</a>

                        <form action="{{ $berita->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

@endsection