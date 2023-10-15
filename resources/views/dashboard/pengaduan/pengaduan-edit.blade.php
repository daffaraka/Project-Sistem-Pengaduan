@extends('dashboard.layout')
@section('content')
    <div class="container">
        <h3 class="text-dark text-center mb-3">Tambah Data Pengaduan</h3>
        <form action="{{route('pengaduan.update',$pengaduan->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="my-input">Judul Pengaduan</label>
                <input id="my-input" class="form-control" type="text" name="judul" value="{{$pengaduan->judul}}" placeholder="Isi Pengaduan">
            </div>
            <div class="form-group">
                <label for="my-input">Isi Pengaduan</label>
                <textarea id="my-input" class="form-control" type="text"  name="isi" >{{$pengaduan->isi}} </textarea>
            </div>
            <div class="form-group">
                <label for="my-input">Status Pengaduan</label>
                <select id="my-input" class="form-control" type="text"  name="status" >
                    <option value="ANTRIAN" {{$pengaduan->status == 'ANTRIAN' ? 'selected' : ''}} >ANTRIAN</option>
                    <option value="PROSES" {{$pengaduan->status == 'PROSES' ? 'selected' : ''}} >PROSES</option>
                    <option value="SELESAI" {{$pengaduan->status == 'SELESAI' ? 'selected' : ''}} >SELESAI</option>

                </select>
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
