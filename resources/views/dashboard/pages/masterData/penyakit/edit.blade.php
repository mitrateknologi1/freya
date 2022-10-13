@extends('dashboard.layouts.main')

@section('title')
    Ubah Hama dan Penyakit
@endsection

@section('titlePanelHeader')
    Ubah Hama dan Penyakit
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
                        <div class="card-title">Ubah Hama dan Penyakit</div>
                    </div>
                </div>
                <div class="card-body">
                    @component('dashboard.components.forms.penyakit')
                        @slot('form_id', 'form-tambah')
                        @slot('action', url('/master-data/penyakit/' . $penyakit->id))
                        @slot('data', $penyakit)
                        @slot('method', 'PUT')
                        @slot('back_url', url('/master-data/penyakit'))
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#kode').val("{{ $penyakit->kode }}");
            $('#nama_penyakit').val("{{ $penyakit->nama_penyakit }}");
            $('#bobot_penyakit').val("{{ $penyakit->bobot_penyakit }}");
            $('#solusi').html("{{ $penyakit->solusi }}");
            if ("{{ $penyakit->foto }}") {
                $('#preview-foto').attr('src', "{{ Storage::url('/uploads/penyakit/' . $penyakit->foto) }}");
            }
        })
    </script>

    <script>
        $('#nav-master-penyakit').addClass('active');
    </script>
@endpush
