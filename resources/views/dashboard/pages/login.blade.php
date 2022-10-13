<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Naive Bayes | Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/landingPage') }}/img/cover.png" type="image/x-icon" />


    <!-- Fonts and icons -->
    <script src="{{ asset('assets/dashboard') }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/dashboard') }}/css/fonts.min.css"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/css/atlantis.css">

    <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
        }

        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }

        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: 'Exo', sans-serif;
        }


        .context {
            width: 100%;
            position: absolute;
            z-index: 9999;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .context h1 {
            text-align: center;
            color: #fff;
            font-size: 50px;
        }


        .area {
            background: #4437ff;
            /* background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8); */
            width: 100%;
            height: 100vh;


        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;

        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {

            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }

        }

        .login .wrapper.wrapper-login .container-login,
        .login .wrapper.wrapper-login .container-signup {
            width: 400px;
            padding: 35px 25px;
            border-radius: 10px;
        }
    </style>
</head>

<body class="login">
    <div class="context">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <form action="{{ url('/cekLogin') }}" method="POST" id="formLogin">
                    @csrf
                    <h3 class="text-center mb-2">Masuk</h3>
                    {{-- <p class="mt-0 text-center">Admin / OPD</p> --}}
                    <div class="login-form">
                        <div class="form-group">
                            <label for="email" class="placeholder"><b>Nama Pengguna</b></label>
                            <input id="username" name="username" type="text" class="form-control req"
                                data-label="Nama Pengguna">
                            <span class="text-danger d-block error-text username-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder"><b>Password</b></label>
                            <div class="position-relative">
                                <input id="password" name="password" type="password" class="form-control">
                                {{-- <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div> --}}
                            </div>
                            <span class="text-danger d-block error-text password-error"></span>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary mt-4 col-12 "><i
                                    class="fas fa-sign-in-alt"></i> Masuk</button>
                        </div>
                        <div class="mb-3 text-center">
                            <a href="{{ url('') }}" class="text-muted text-center"> <i
                                    class="far fa-arrow-alt-circle-left"></i>
                                Kembali Ke
                                Halaman Utama</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>


    <script src="{{ asset('assets/dashboard') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/atlantis.min.js"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('assets/dashboard') }}/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/atlantis.min.js"></script>
    <script>
        document.getElementById("username").focus();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function validation(form) {
            $('.text-danger').html('');
            $('.req').removeClass('is-invalid');
            let count = 0
            $.each(form, function(i, field) {
                let attr = $("input[name=" + field.name + "]");
                if ((attr.hasClass('req')) && (attr.val() == "")) {
                    $('.' + field.name + '-error').html('<b>' + attr.data('label') +
                        '</b> tidak boleh kosong');
                    count++;
                    attr.addClass('is-invalid')
                }
            });
            if (count > 0) {
                swal(
                    "Gagal!",
                    "Terdapat " + count + " kolom yang tidak boleh kosong.",
                    "error"
                )
                e.preventDefault()
            }
        }

        $('#formLogin').submit(function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var form = $(this).serializeArray();
            // validation(form)
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: form,
                success: function(response) {
                    if (response.res == 'inputan_tidak_lengkap') {
                        swal("Gagal!", "Harap isi semua inputan.", "error");
                    }
                    if (response.res == 'akun_tidak_aktif') {
                        swal(
                            "Gagal!",
                            "Akun anda saat ini dinonaktifkan. Silahkan hubungi admin untuk mengaktifkan.",
                            "error"
                        )
                    }
                    if (response.res == 'gagal') {
                        swal(
                            'Gagal!',
                            'Nama Pengguna beserta Kata Sandi yang dimasukkan tidak ditemukan. Silahkan cek kembali inputan anda.',
                            'error'
                        )
                    }
                    if (response.res == 'berhasil') {
                        window.location.href = "{{ url('/dashboard') }}";
                    }
                }
            });
        });

        var overlay = $('#overlay').hide();
        $(document)
            .ajaxStart(function() {
                overlay.show();
            })
            .ajaxStop(function() {
                overlay.hide();
            });
    </script>
</body>

</html>
