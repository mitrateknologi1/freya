@extends('dashboard.layouts.main')

@section('title')
    Ubah Aturan
@endsection

@section('titlePanelHeader')
    Ubah Aturan
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
                        <div class="card-title">Ubah Aturan</div>
                    </div>
                </div>
                <div class="card-body">
                    @component('dashboard.components.forms.aturan')
                        @slot('form_id', 'form-tambah')
                        @slot('action', url('/master-data/aturan/' . $aturan->id))
                        @slot('data', $aturan)
                        @slot('method', 'PUT')
                        @slot('back_url', url('/master-data/aturan'))
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#id_penyakit').val("{{ $aturan->id_penyakit }}").trigger('change');
            $('#id_gejala').val("{{ $aturan->id_gejala }}").trigger('change');
            $('#bobot_aturan').val("{{ $aturan->bobot_aturan }}");
        })
    </script>

    <script>
        $('#nav-master-aturan').addClass('active');
    </script>
@endpush
