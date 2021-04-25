@extends('rs.rsmaster')
@section('content')

            <h2>Request Darah</h2>
            <br>
            <form action="{{route('request')}}" method="post">
                @csrf
                <select class="form-control" id="goldar" name="goldar">
                    <option selected>Golongan Darah</option>
                    @foreach($goldar as $g)
                    <option value="{{$g->id}}">{{$g->goldar}}</option>
                    @endforeach
                </select>
                <br>
                <input type="number" name="qty" id="qty" class="form-control" required>
                <br>
                <button type="submit"class="btn btn-success">Request</button>
            </form>
            

@endsection