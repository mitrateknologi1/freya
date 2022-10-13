<form id="{{ $form_id }}" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($method) && $method == 'PUT')
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-4">
            <div class="col-sm-12 col-lg-12 mt-3">
                <label for="errorInput">Foto<sup class="text-danger">*</sup></label>
                <div id='img_contain' class="mt-3 d-flex justify-content-center"><img id="preview-foto" align='middle'
                        src="{{ asset('assets/dashboard/img/add-image.png') }}" alt="" title=''
                        class="preview-img img-fluid" width="300px" /></div>
                <div class="input-group mt-3">
                    <div class="custom-file">
                        <input type="file" id="foto" class="imgInp custom-file-input"
                            aria-describedby="inputGroupFileAddon01" name="foto">
                        <label id="label-foto" class="custom-file-label" for="foto">Tambah Foto</label>
                    </div>
                </div>
                <small class="form-text text-muted">Ukuran Foto Harus Dibawah 1 Mb</small>
                <span class="text-danger error-text foto-error"></span>
            </div>

        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    @component('dashboard.components.formElements.input',
                        [
                            'id' => 'kode',
                            'type' => 'text',
                            'label' => 'Kode Penyakit',
                            'placeholder' => 'Kode Penyakit',
                            'name' => 'kode',
                            'wajib' => '<sup class="text-danger">*</sup>',
                        ])
                    @endcomponent
                </div>
                <div class="col-sm-12 col-lg-6">
                    @component('dashboard.components.formElements.input',
                        [
                            'id' => 'nama_penyakit',
                            'type' => 'text',
                            'label' => 'Nama Penyakit',
                            'placeholder' => 'Nama Penyakit',
                            'name' => 'nama_penyakit',
                            'wajib' => '<sup class="text-danger">*</sup>',
                        ])
                    @endcomponent
                </div>
                <div class="col-sm-12 col-lg-12">
                    @component('dashboard.components.formElements.input',
                        [
                            'label' => 'Bobot Penyakit',
                            'type' => 'text',
                            'id' => 'bobot_penyakit',
                            'name' => 'bobot_penyakit',
                            'class' => 'numerik',
                            'wajib' => '<sup class="text-danger">*</sup>',
                            'placeholder' => 'Masukkan Bobot Penyakit',
                        ])
                    @endcomponent
                </div>
                <div class="col-sm-12 col-lg-12">
                    @component('dashboard.components.formElements.textArea',
                        [
                            'id' => 'solusi',
                            'type' => 'text',
                            'label' => 'Solusi',
                            'placeholder' => 'Solusi',
                            'name' => 'solusi',
                            'wajib' => '<sup class="text-danger">*</sup>',
                        ])
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-end mt-3">
            @component('dashboard.components.buttons.submit',
                [
                    'label' => 'Simpan',
                ])
            @endcomponent
        </div>
    </div>
</form>

@push('scripts')
    @if (isset($method) && $method == 'PUT')
    @endif
    <script>
        $('#{{ $form_id }}').submit(function(e) {
            e.preventDefault();
            resetError();
            var formData = new FormData(this);
            swal({
                title: 'Apakah Anda Yakin ?',
                icon: 'info',
                text: "Apakah Anda Yakin ?",
                type: 'info',
                buttons: {
                    cancel: {
                        visible: true,
                        text: 'Batal',
                        className: 'btn btn-light'
                    },
                    confirm: {
                        text: 'Ya',
                        className: 'btn btn-info'
                    },
                }
            }).then((Update) => {
                if (Update) {
                    $.ajax({
                        type: "POST",
                        url: "{{ $action }}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status == 'success') {
                                swal("Berhasil", "Data Berhasil Disimpan", {
                                    icon: "success",
                                    buttons: false,
                                    timer: 1000,
                                }).then(function() {
                                    window.location.href =
                                        "{{ $back_url }}";
                                })
                            } else {
                                swal("Periksa Kembali Data Anda", {
                                    buttons: false,
                                    timer: 1500,
                                    icon: "warning",
                                });
                                printErrorMsg(response.error);
                            }
                        },
                        error: function(response) {
                            swal("Gagal", "Terjadi Kesalahan", {
                                icon: "error",
                                buttons: false,
                                timer: 1000,
                            });
                        },
                    });
                }
            });
        });

        $(function() {
            $('.modal').modal({
                backdrop: 'static',
                keyboard: false
            })
        })

        function resetError() {
            $(".error-text").each(function() {
                $(this).html('');
            })
        }

        const printErrorMsg = (msg) => {
            $.each(msg, function(key, value) {
                $('.' + key + '-error').text(value);
            });
        }

        $("#foto").change(function(event) {
            RecurFadeIn();
            readURLFoto(this);
        });
        $("#foto").on('click', function(event) {
            RecurFadeIn();
        });

        function readURLFoto(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var filename = $("#foto").val();
                filename = filename.substring(filename.lastIndexOf('\\') + 1);
                reader.onload = function(e) {
                    debugger;
                    $('#preview-foto').attr('src', e.target.result);
                    $('#preview-foto').hide();
                    $('#preview-foto').fadeIn(500);
                    $('#label-foto').text(filename);
                }
                reader.readAsDataURL(input.files[0]);
            }
            $(".alert").removeClass("loading").hide();
        }

        function RecurFadeIn() {
            FadeInAlert("Wait for it...");
        }

        function FadeInAlert(text) {
            $(".alert").show();
            $(".alert").text(text).addClass("loading");
        }
    </script>
@endpush
