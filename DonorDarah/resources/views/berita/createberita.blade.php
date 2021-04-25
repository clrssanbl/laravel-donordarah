@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <div class="container">
                <h2>Tambah Berita</h2>
                <form method="POST" action="/berita" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <textarea class="form-control" id="judul" name="judul" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Berita</button>
                </form>
            </div>
@endsection
