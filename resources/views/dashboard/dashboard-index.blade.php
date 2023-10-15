@extends('dashboard.layout')
@section('content')
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">71,503</h2>
                    <p>Jumlah User</p>
                    <div class="chartjs-wrapper">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1">9,503</h2>
                    <p>Daftar Pengaduan</p>
                    <div class="chartjs-wrapper">
                        <canvas id="dual-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
