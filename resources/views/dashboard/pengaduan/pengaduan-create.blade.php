@extends('dashboard.layout')
@section('content')
    <div class="container">
        <h3 class="text-dark text-center mb-3">{{$caption}}</h3>
        <form action="{{route('pengaduan.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="my-input">Judul Pengaduan</label>
                <input id="my-input" class="form-control" type="text" name="judul" placeholder="Isi Pengaduan">
            </div>
            <div class="form-group">
                <label for="my-input">Isi Pengaduan</label>
                <textarea id="my-input" class="form-control" type="text" name="isi" > </textarea>
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
