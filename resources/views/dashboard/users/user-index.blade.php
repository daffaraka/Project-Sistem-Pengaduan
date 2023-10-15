@extends('dashboard.layout')
@section('content')
    <div class="container">
        <a href="{{ route('user.create') }}" class="btn btn-primary my-2">Tambah User</a>
        <h3 class="text-dark fw-bold text-center">Data User</h3>
        <div class="table-responsive my-3">
            <table
                class="table table-striped
                table-hover
                table-dark
                align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama </th>
                        <th>Email </th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->nip }}</td>
                            <td>
                                <button
                                class="btn btn-sm btn-{{ $user->role == 'admin' ? 'primary' : 'dark' }}">
                                {{$user->role }}</button></td>

                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-sm btn-danger">Hapus</a>

                            </td>

                        </tr>
                    @endforeach


                </tbody>

            </table>

        </div>
    </div>
@endsection
