@extends('dashboard.layout')
@section('content')
    <div class="container">
        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary my-2">{{$caption}}</a>
        <h3 class="text-dark fw-bold text-center">Data Pengaduan</h3>
        <div class="table-responsive my-3">
            <table
                class="table table-striped
                table-hover
                table-dark
                align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Status</th>
                        <th>Nama Pengadu</th>
                        <th>Waktu Pengaduan</th>
                        <th>Judul</th>
                        <th>Deksripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduans as $pengaduan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><button
                                    class="btn btn-sm btn-{{ $pengaduan->status == 'ANTRIAN' ? 'warning' : ($pengaduan->status == 'PROSES' ? 'primary' : 'success') }}">
                                    {{$pengaduan->status }}</button>
                            </td>
                            <td>{{ $pengaduan->User->name }}</td>
                            <td>{{ $pengaduan->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                            <td>{{ $pengaduan->judul }}</td>
                            <td>{{ $pengaduan->isi }}</td>
                            <td>
                                <a href="{{ route('pengaduan.edit', $pengaduan->id) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('pengaduan.destroy', $pengaduan->id) }}"
                                    class="btn btn-sm btn-danger">Hapus</a>

                            </td>

                        </tr>
                    @endforeach


                </tbody>

            </table>

        </div>
    </div>
@endsection
