@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <h2>List Request</h2>


            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="form">
                <table>
                    <tr>
                        <th>Nama RS</th>
                        <th>Golongan Darah</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all as $req)
                    <tr>
                        <td>{{$req->users->name}}</td>
                        <td>{{$req->goldars->goldar}}</td>
                        <td>{{$req->jumlah}}</td>
                        <td>{{$req->getStatus()}}</td>
                        <td>
                            @if($req->accepted())
                            @else
                            <form action="{{route('updaterequest', $req->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <button type="submit" class="btn btn-success">Accept</button>
                            </form>
                            <form action="{{route('deleterequest', $req->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Refuse</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

@endsection