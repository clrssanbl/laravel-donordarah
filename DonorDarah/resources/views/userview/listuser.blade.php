@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <h2>List User</h2>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="form">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>                            
                            <form action="{{route('deleteuser', $user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <a href="{{route('createuser')}}" class="btn btn-primary my-3"> Tambah User</a>
                
            </div>


        </div>
@endsection