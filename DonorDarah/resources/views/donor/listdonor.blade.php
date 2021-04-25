@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <h2>List Donor</h2>


            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="form">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Berat Badan</th>
                        <th>Golongan Darah</th>
                        <th>Riwayat Penyakit</th>
                        <th>Lokasi Donor</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($donors as $donor)
                    <tr>
                        <td>{{$donor->users->name}}</td>
                        <td>{{$donor->umur}}</td>
                        <td>{{$donor->beratbadan}}</td>
                        <td>{{$donor->goldars->goldar}}</td>
                        <td>{{$donor->penyakit}}</td>
                        <td>{{$donor->lokasis->nama}}</td>
                        <td>{{$donor->tanggal}}</td>
                        <td>{{$donor->getStatus()}}</td>
                        <td>
                            @if(!$donor->done())
                            @if($donor->accepted())
                            <form action="{{route('selesaidonor', $donor->id)}}" method="post">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-success">Selesai</button>
                            </form>
                            @else
                            <form action="{{route('updatedonor', $donor->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <button type="submit" class="btn btn-success">Accept</button>
                            @endif
                            </form>
                            <form action="{{route('deletedonor', $donor->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

@endsection