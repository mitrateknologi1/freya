<form id="{{ $form_id }}" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($method) && $method == 'PUT')
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            @component('dashboard.components.formElements.select',
                [
                    'label' => 'Penyakit',
                    'id' => 'id_penyakit',
                    'name' => 'id_penyakit',
                    'class' => 'select2',
                    'wajib' => '<sup class="text-danger">*</sup>',
                ])
                @slot('options')
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-12 col-lg-6">
            @component('dashboard.components.formElements.select',
                [
                    'label' => 'Gejala',
                    'id' => 'id_gejala',
                    'name' => 'id_gejala',
                    'class' => 'select2',
                    'wajib' => '<sup class="text-danger">*</sup>',
                ])
                @slot('options')
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-12 col-lg-12">
            @component('dashboard.components.formElements.input',
                [
                    'label' => 'Bobot Aturan',
                    'type' => 'text',
                    'id' => 'bobot_aturan',
                    'name' => 'bobot_aturan',
                    'class' => 'numerik',
                    'wajib' => '<sup class="text-danger">*</sup>',
                    'placeholder' => 'Masukkan Bobot Aturan',
                ])
            @endcomponent
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
    <script>
        $(document).ready(function() {
            getPenyakit();
            getGejala();
        });
    </script>
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

        var idPenyakit = "{{ $data->id_penyakit ?? '' }}";
        var idGejala = "{{ $data->id_gejala ?? '' }}";

        let getPenyakit = () => {
            $('#id_penyakit').html('');
            $('#id_penyakit').append('<option value="">--Pilih Salah Satu--</option>');
            $.ajax({
                url: "{{ url('list/penyakit') }}",
                type: 'GET',
                data: {
                    'id': idPenyakit
                },
                success: function(response) {
                    response.data.map((data) => {
                        $('#id_penyakit').append('<option value="' + data.id + '">' +
                            data
                            .nama_penyakit + " (" + data.kode + ")" + '</option>');
                    });
                    if (idPenyakit) {
                        $('#id_penyakit').val(idPenyakit).trigger('change');
                    }
                }
            })
        }

        let getGejala = () => {
            $('#id_gejala').html('');
            $('#id_gejala').append('<option value="">--Pilih Salah Satu--</option>');
            $.ajax({
                url: "{{ url('list/gejala') }}",
                type: 'GET',
                data: {
                    'id': idGejala
                },
                success: function(response) {
                    response.data.map((data) => {
                        $('#id_gejala').append('<option value="' + data.id + '">' +
                            data
                            .nama_gejala + " (" + data.kode + ")" + '</option>');
                    });
                    if (idGejala) {
                        $('#id_gejala').val(idGejala).trigger('change');
                    }
                }
            })
        }
    </script>
@endpush
