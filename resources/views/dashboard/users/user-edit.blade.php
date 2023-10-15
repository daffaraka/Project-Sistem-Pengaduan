@extends('dashboard.layout')
@section('content')
    <div class="container">
        @include('dashboard.partials.flash-message')
        <h3 class="text-dark text-center mb-3">Edit Pengguna</h3>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="my-input">Nama Pegawai</label>
                <input id="my-input" class="form-control" type="text" name="name" value="{{ $user->name }}"
                    placeholder="Isi Pengaduan">

                @error('name')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror

            </div>

            <div class="form-group">
                <label for="my-input">Role</label>
                <select class="form-control" type="number" name="role">
                    <option value="admin" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                    <option value="user" {{ $user->role == 'USER' ? 'selected' : '' }}>USER</option>

                </select>


            </div>
            <div class="form-group">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control" type="email" name="email" value="{{ $user->email }}"
                    placeholder="Isi Pengaduan">

                @error('email')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="my-input">NIP</label>
                <input id="my-input" class="form-control" type="number" value="{{ $user->nip }}" name="nip"
                    placeholder="Isi Pengaduan">

                @error('nip')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="my-input">Status</label>
                <select class="form-control" type="number" name="status">
                    <option value="PENSIUN" {{ $user->status == 'PENSIUN' ? 'selected' : '' }}>PENSIUN</option>
                    <option value="AKTIF" {{ $user->status == 'AKTIF' ? 'selected' : '' }}>AKTIF</option>

                </select>


            </div>
            <div class="form-group">
                <label for="my-input">Password</label>
                <input id="my-input" class="form-control" type="password" name="password">

                @error('password')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="my-input">Konfirmasi Password</label>
                <input id="my-input" class="form-control" type="password" name="password_confirmation">
                @error('password_confirmation')
                    <div class="alert alert-danger alert-block">


                        <strong>{{ $message }}</strong>

                    </div>
                @enderror
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
