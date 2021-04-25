@extends('master')
@section('content')
<br><br><br><br><br>
<section class="regervation_part mt-5">
    <div class="container">
        <div class="row align-items-center regervation_content mt">
            <div class="col-lg-7 col-md-6">
                <div class="regervation_part_iner">
                    <form action="/donor" method="post">
                        @csrf
                        <h2>Make an Appointment</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{auth()->user()->name}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="beratbadan" name="beratbadan" placeholder="Berat Badan">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="penyakit" name="penyakit" placeholder="Riwayat Penyakit">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="goldar" name="goldar">
                                    <option selected>Golongan Darah</option>
                                    @foreach($goldar as $g)
                                    <option value="{{$g->id}}">{{$g->goldar}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="lokasi" name="lokasi">
                                    <option value="" selected>Pilih Lokasi</option>
                                    @foreach($lokasi as $lks)
                                    <option value="{{$lks->id}}">{{$lks->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
							<div class="form-group col-md-6">
                                <input type="date" name="tanggal" id="tanggal" class="form-control"  required />
                            </div>
							
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="regerv_btn_iner">Make an Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="reservation_img">
                    <img src="img/reservation.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection