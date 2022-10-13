@extends('landingPage.layouts.main')

@section('title')
    Naive Bayes
@endsection

@push('style')
    <style>
        .border {
            border: 1px solid black !important;
        }
    </style>
@endpush

@section('content')
    <div class="row align-items-center mb-5">
        <h2 class="text-center">
            Hasil Analisa
        </h2>


        <p class="fs-lg text-muted text-center  mb-7 mb-md-9">
            Berikut adalah Daftar Hasil Analisa Sesuai Rangking
        </p>
        <!-- Text -->

        <table class="table table-sm">
            <thead>
                <tr class="border">
                    <th scope="col" class="text-center border">Rangking</th>
                    <th scope="col" class="text-center border">Nama Penyakit</th>
                    <th scope="col" class="text-center border">Nilai</th>
                    <th scope="col" class="text-center border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($hasilAnalisa['hasil']['namaPenyakit']); $i++)
                    @if ($hasilAnalisa['hasil']['totalNilaiRangking'][$i] > 0.09)
                        <tr class="border">
                            <th scope="row" class="text-center border align-middle">{{ $i + 1 }}</th>
                            <td class="text-center border align-middle">{{ $hasilAnalisa['hasil']['namaPenyakit'][$i] }}
                            </td>
                            <td class="text-center border align-middle">
                                {{ $hasilAnalisa['hasil']['totalNilaiRangking'][$i] }}</td>
                            <td class="text-center">
                                <button class="btn btn-primary btn-sm py-2 btn-lihat"
                                    value="{{ $hasilAnalisa['hasil']['id'][$i] }}"><i class="fe fe-eye"></i></button>
                            </td>
                        </tr>
                    @endif
                @endfor
            </tbody>
        </table>

        <div class="form-check form-switch d-flex align-baseline justify-content-center">
            <input class="form-check-input me-3" type="checkbox" id="tampilkan-perhitungan">
            <label class="form-check-label mt-1" for="tampilkan-perhitungan">Tampilkan Perhitungan</label>
        </div>

        <h2 class="text-center mt-10 perhitungan" style="display: none;">
            Perhitungan Analisa
        </h2>


        <p class="fs-lg text-muted mb-7 mb-md-9 text-center perhitungan" style="display: none;">
            Berikut adalah Detail Perhitungan Analisa
        </p>


        <table class="table table-sm perhitungan mb-10" style="display: none;">
            <thead>
                <tr class="border">
                    <th scope="col" class="text-center border">Nama Penyakit</th>
                    <th scope="col" class="text-center border">Bobot Penyakit</th>
                    <th scope="col" class="text-center border">Gejala Dipilih</th>
                    <th scope="col" class="text-center border">Bobot Aturan</th>
                    <th scope="col" class="text-center border">Perkalian</th>
                    <th scope="col" class="text-center border">Hasil</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < count($hasilAnalisa['tabel']); $i++)
                    <tr class="border">
                        @if ($hasilAnalisa['tabel'][$i]['namaPenyakit'])
                            <td class="text-center border align-middle"
                                rowspan="{{ $hasilAnalisa['jumlahGejalaDipilih'] }}">
                                {{ $hasilAnalisa['tabel'][$i]['namaPenyakit'] }}</td>
                            <td class="text-center border align-middle"
                                rowspan="{{ $hasilAnalisa['jumlahGejalaDipilih'] }}">
                                {{ $hasilAnalisa['tabel'][$i]['bobotPenyakit'] }}</td>
                        @endif
                        <td class="text-center border align-middle">{{ $hasilAnalisa['tabel'][$i]['namaGejala'] }}</td>
                        <td class="text-center border align-middle">{{ $hasilAnalisa['tabel'][$i]['bobotAturan'] }}</td>

                        @if ($hasilAnalisa['tabel'][$i]['namaPenyakit'])
                            <td class="text-center border align-middle"
                                rowspan="{{ $hasilAnalisa['jumlahGejalaDipilih'] }}">
                                {{ $hasilAnalisa['tabel'][$i]['simpanPerkalian'] }}</td>
                            <td class="text-center border align-middle"
                                rowspan="{{ $hasilAnalisa['jumlahGejalaDipilih'] }}">
                                {{ $hasilAnalisa['tabel'][$i]['simpanTotalNilai'] }}</td>
                        @endif
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modal-lihat" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="text-muted">Foto</h4>
                    <img src="" alt="" class="img-fluid" id="foto">
                    <hr>
                    <h4 class="text-muted">Kode Penyakit</h4>
                    <p id="kode">-</p>
                    <hr>
                    <h4 class="text-muted">Nama Penyakit</h4>
                    <p id="nama_penyakit">-</p>
                    <hr>
                    <h4 class="text-muted">Solusi</h4>
                    <p id="solusi">-</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $("#modal-lihat").appendTo("body");

        $('.btn-lihat').click(function() {
            let id = $(this).val();
            $.ajax({
                url: "{{ url('detail-penyakit') }}",
                type: 'POST',
                data: {
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#kode').html(response.data.kode);
                        $('#nama_penyakit').html(response.data.nama_penyakit);
                        $('#solusi').html(response.data.solusi);
                        if (response.data.foto) {
                            $('#foto').attr('src', "{{ Storage::url('/uploads/penyakit/') }}" +
                                response
                                .data.foto);
                        } else {
                            $('#foto').attr('src',
                                "{{ asset('assets/dashboard') . '/img/broken-image.png' }}");

                        }

                        $('#modal-lihat').modal('show');
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            })
        })

        $(document).ready(function() {
            $('#tampilkan-perhitungan').change();
        })

        $('#tampilkan-perhitungan').change(function() {

            if ($('#tampilkan-perhitungan').is(':checked')) {
                $('.perhitungan').show();
            } else {
                $('.perhitungan').hide();
            };
        })
    </script>
@endpush
