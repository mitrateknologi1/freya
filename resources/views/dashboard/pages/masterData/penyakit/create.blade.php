@extends('dashboard.layouts.main')

@section('title')
    Hama dan Penyakit
@endsection

@section('titlePanelHeader')
    Hama dan Penyakit
@endsection

@section('subTitlePanelHeader')
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. --}}
@endsection

@section('buttonPanelHeader')
    {{-- <a href="#" class="btn btn-secondary btn-round"><i class="fas fa-plus"></i>
        Tambah</a> --}}
@endsection

@push('styles')
@endpush

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Tambah Hama dan Penyakit</div>
                    </div>
                </div>
                <div class="card-body">
                    @component('dashboard.components.forms.penyakit')
                        @slot('form_id', 'form-tambah')
                        @slot('action', url('/master-data/penyakit'))
                        @slot('method', 'POST')
                        @slot('back_url', url('/master-data/penyakit'))
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#nav-master-penyakit').addClass('active');
    </script>
@endpush
