@extends('landingPage.layouts.main')

@section('title')
    Naive Bayes
@endsection

@push('style')
@endpush

@section('content')
    <div class="row align-items-center mb-5">
        <h2 class="text-center">
            Analisa
        </h2>


        <p class="fs-lg text-muted mb-7 mb-md-9 text-center">
            Silahkan Pilih Gejala
        </p>
        <!-- Text -->

        <form action="{{ url('hasil-analisa') }}" method="POST" id="form-analisa">
            @csrf
            <table class="table">
                <tbody>
                    @foreach ($daftarGejala as $gejala)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input gejala" type="checkbox" name="gejala{{ $gejala->id }}"
                                        id="gejala{{ $gejala->id }}" value="true">
                                    <label class="form-check-label" for="gejala{{ $gejala->id }}">
                                        {{ $gejala->nama_gejala . ' (' . $gejala->kode . ')' }}
                                    </label>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-success float-right col-12" type="button" id="btn-submit">Hitung</button>
        </form>
    </div> <!-- / .row -->
@endsection

@push('script')
    <script>
        $('#btn-submit').click(function() {
            var checkGejala = $(".gejala:checked").length;
            if (checkGejala > 0) {
                $('#form-analisa').submit();
            } else {
                Swal.fire(
                    'Silahkan periksa kembali pilihan gejala',
                    'Anda harus memilih minimal 1 gejala',
                    'warning'
                )
            }
        })
    </script>
@endpush
