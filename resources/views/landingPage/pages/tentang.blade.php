@extends('landingPage.layouts.main')

@section('title')
    Tentang
@endsection

@push('style')
    <style>
        .text-indent {
            text-indent: 50px;
            text-align: justify;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
@endpush

@section('content')
    <div class="row align-items-center">
        <h3 class="fw-bold text-center">Tentang</h3>

        <img src="{{ asset('assets/landingPage/img/bawang-2.jpg') }}" alt="" class="img-fluid">
        <img src="{{ asset('assets/landingPage/img/bawang-1.jpg') }}" alt="" class="img-fluid mb-5">

        <p class="text-indent"> Bawang merah lokal Palu merupakan salah satu komoditi andalan bagi
            para petani di
            Provinsi Sulawesi
            Tengah yang
            produksinya harus terus ditingkatkan. Hal ini dilakukan karena bawang merah lokal Palu memang mempunyai
            kekhasan
            tersendiri karena saat diolah akan mempunyai cita rasa yang sangat enak, aroma yang menarik dan sangat
            renyah.
            Namun kenyataan dilapangan, bawang merah jenis lokal Palu ini sering mengalami kendala dalam tumbuhkembang
            serta
            pembudidayaannya, yang berdampak pada produktivitas yang dihasilkan kurang maksimal. Tanaman bawang merah
            jenis
            ini sangat rentan terhadap hama dan penyakit tanaman dan biasanya saat tanaman bawang merah lokal Palu ini
            terserang hama dan penyakit, para petani akan langsung melakukan penanganan dengan memberikan pestisida guna
            mengatasinya. Akan tetapi, terkadang pemberian pestisida yang dilakukan tidak sesuai sehingga hasilnya tidak
            maksimal yang bahkan dapat berdampak pada munculnya hama dan penyakit yang baru.
        </p>
        <p class="text-indent">
            Sistem guna mendiagnosa gejala awal serangan hama dan penyakit tanaman yang berbasis Web bagi petani bawang
            merah lokal Palu perlu disosialisasikan. Hal ini dilakukkan agar petani dapat dengan cepat mengetahui jenis
            hama
            dan penyakit apa yang menyerang tanaman tersebut. Sehingga hal ini dapat membantu para petani dengan cepat
            untuk
            memberikan penanganan dalam mengatasi serangan hama dan penyakit tersebut. Kemudahan dalam mengakses web
            yang
            berbasis pengambilan keputusan berdasarkan metode Bayesain dapat membantu para petani sehingga dapat lebih
            baik,
            ideal dan bijaksana dalam menentukan aktivitas prioritas yang akan dilakukan guna mendukung produksi tanaman
            bawang merah lokal Palu.
        </p>

        <h3 class="fw-bold text-center mt-5">Tim Peneliti / Tim Pengabdi</h3>

        <table>
            <tr>
                <td>Junaidi, M. Si, Ph. D</td>
                <td>Ketua</td>
            </tr>
            <tr>
                <td>Fadjryani, ST, M. Si</td>
                <td>Anggota I</td>
            </tr>
            <tr>
                <td>Iman Setiawan, S. Si, M. Si</td>
                <td>Anggota II</td>
            </tr>
            <tr>
                <td>Mohammad Fajri, S. Si, M. Si</td>
                <td>Anggota III</td>
            </tr>
            <tr>
                <td>Ir. Hajra Rasmita Ngemba, S.Kom., MM., M.Kom</td>
                <td>Anggota IV</td>
            </tr>
            <tr>
                <td>Moh. Jainudin Jalil</td>
                <td>Mahasiswa</td>
            </tr>
            <tr>
                <td>Yaka Samudra Pati</td>
                <td>Mahasiswa</td>
            </tr>
        </table>
    </div> <!-- / .row -->
@endsection

@push('script')
@endpush
