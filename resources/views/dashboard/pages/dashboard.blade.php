@extends('dashboard.layouts.main')

@section('title')
    Dashboard
@endsection

@section('titlePanelHeader')
    Dashboard
@endsection

@section('subTitlePanelHeader')
    {{-- <p style="font-size: 15px">Tahun :
        @php
            if ($tahun != '' && $tahun != 'Semua') {
                echo $tahun;
            } else {
                echo 'Semua';
            }
        @endphp
    </p> --}}
@endsection

@section('buttonPanelHeader')
@endsection

@push('styles')
    <style>
        .circles-text {
            font-size: 15px;
        }
    </style>
@endpush

@section('contents')
    <div class="row mt-5">
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="icon-big text-center">
                                <i class="fas fa-thermometer-full"></i>
                            </div>
                        </div>
                        <div class="col-10 col-stats">
                            <div class="numbers">
                                <p class="card-category">Gejala</p>
                                <h4 class="card-title">{{ $gejala }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="icon-big text-center">
                                <i class="fas fa-spa"></i>
                            </div>
                        </div>
                        <div class="col-10 col-stats">
                            <div class="numbers">
                                <p class="card-category">Hama dan Penyakit</p>
                                <h4 class="card-title">{{ $penyakit }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="icon-big text-center">
                                <i class="fas fa-cog"></i>
                            </div>
                        </div>
                        <div class="col-10 col-stats">
                            <div class="numbers">
                                <p class="card-category">Aturan</p>
                                <h4 class="card-title">{{ $aturan }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endpush
