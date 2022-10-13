@extends('landingPage.layouts.main')

@section('title')
    Naive Bayes
@endsection

@push('style')
@endpush

@section('content')
    <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="{{ asset('assets/landingPage') }}/img/cover.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0"
                alt="..." data-aos="fade-up" data-aos-delay="100">

        </div>
        <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-start">
                Sistem Pakar Diagnosis Hama dan Penyakit Bawang Merah
                Lokal
            </h1>

            <!-- Text -->
            {{-- <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                Build a beautiful, modern website with flexible Bootstrap components built from scratch.
            </p> --}}

            <!-- Buttons -->
            <div class="text-center text-md-start">
                <a href="{{ url('analisa') }}" class="btn btn-primary shadow lift me-1">
                    Lakukan Analisa <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
                </a>
            </div>

        </div>
    </div> <!-- / .row -->
@endsection

@push('script')
@endpush
