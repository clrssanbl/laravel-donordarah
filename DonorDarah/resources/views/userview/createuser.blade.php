@extends('admin.adminmaster')
@section('content')

        <div id="content">
            <br><br>
            <div class="container">
                <h2>Tambah User</h2>
                <form method="POST" action="{{route('storeuser')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" rows="3"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" rows="3"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" rows="3"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option value="member">Member</option>
                                <option value="admin">Admin</option>
                                <option value="rs">Rumah Sakit</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah User</button>
                </form>
            </div>
        </div>
@endsection