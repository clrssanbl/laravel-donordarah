@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <h2>Stock Darah</h2>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="form">
                <table>
                    <tr>
                        <th>Golongan Darah</th>
                        <th>Stock Tersedia</th>
                    </tr>
                    @foreach ($stocks as $s)
                    <tr>
                        <td>{{$s->goldars->goldar}}</td>
                        <td>{{$s->stockdarah}}</td>
                    </tr>
                    @endforeach
                </table>                
            </div>


        </div>
@endsection