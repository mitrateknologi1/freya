@extends('dashboard.layouts.main')

@section('title')
    Gejala
@endsection

@section('titlePanelHeader')
    Gejala
@endsection

@section('subTitlePanelHeader')
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. --}}
@endsection

@section('buttonPanelHeader')
    @component('dashboard.components.buttons.add',
        [
            'id' => 'btn-tambah',
            'class' => '',
            'url' => '#',
        ])
    @endcomponent
@endsection

@push('styles')
@endpush

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data Gejala</div>
                        <div class="card-tools">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card fieldset">
                                @component('dashboard.components.dataTables.index',
                                    [
                                        'id' => 'table-data',
                                        'th' => ['No', 'Kode', 'Gejala', 'Aksi'],
                                    ])
                                @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="modal-tambah">
        <form method="POST" id="form-tambah">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-tambah-title">Tambah Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @component('dashboard.components.formElements.input',
                            [
                                'id' => 'kode',
                                'type' => 'text',
                                'label' => 'Kode Gejala',
                                'placeholder' => 'Kode Gejala',
                                'name' => 'kode',
                                'required' => true,
                            ])
                        @endcomponent
                        @component('dashboard.components.formElements.input',
                            [
                                'id' => 'nama_gejala',
                                'type' => 'text',
                                'label' => 'Nama Gejala',
                                'placeholder' => 'Nama Gejala',
                                'name' => 'nama_gejala',
                                'required' => true,
                            ])
                        @endcomponent
                    </div>
                    <div class="modal-footer">
                        @component('dashboard.components.buttons.close')
                        @endcomponent
                        @component('dashboard.components.buttons.submit',
                            [
                                'label' => 'Simpan',
                            ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        var idEdit = '';
        var aksiTambah = 'tambah';
        $('#btn-tambah').click(function() {
            aksiTambah = 'tambah';
            $('#modal-tambah').modal('show');
            $('#modal-tambah-title').html('Tambah Gejala');
            $('#nama').val('');
        })

        $(document).on('click', '#btn-edit', function() {
            let id = $(this).val();
            idEdit = id;

            $.ajax({
                url: "{{ url('master-data/gejala') }}" + '/' + id + '/edit',
                type: "GET",
                data: {
                    id: id
                },
                success: function(response) {
                    aksiTambah = 'ubah';
                    $('#modal-tambah').modal('show');
                    $('#modal-tambah-title').html('Ubah Gejala');
                    $('#nama_gejala').val(response.nama_gejala);
                    $('#kode').val(response.kode);
                },
            })
        })

        $('#form-tambah').submit(function(e) {
            e.preventDefault();
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
                    if (aksiTambah == 'tambah') {
                        $.ajax({
                            url: "{{ url('master-data/gejala') }}",
                            type: 'POST',
                            data: $(this).serialize(),
                            success: function(response) {
                                if (response.status == 'success') {
                                    $('#modal-tambah').modal('hide');
                                    table.draw();
                                    swal("Berhasil", "Data Berhasil Tersimpan", {
                                        icon: "success",
                                        buttons: false,
                                        timer: 1000,
                                    });
                                    resetModal();
                                } else {
                                    printErrorMsg(response.error);
                                }
                            },
                            error: function(response) {
                                swal("Gagal", "Data Gagal Ditambahkan, Silahkan Coba Kembali", {
                                    icon: "error",
                                    buttons: false,
                                    timer: 1000,
                                });
                            }
                        })
                    } else {
                        $.ajax({
                            url: "{{ url('master-data/gejala') }}" + '/' + idEdit,
                            type: 'PUT',
                            data: $(this).serialize(),
                            success: function(response) {
                                if (response.status == 'success') {
                                    $('#modal-tambah').modal('hide');
                                    table.draw();
                                    swal("Berhasil", "Data Berhasil Diubah", {
                                        icon: "success",
                                        buttons: false,
                                        timer: 1000,
                                    });
                                    resetModal();
                                } else {
                                    printErrorMsg(response.error);
                                }
                            },
                            error: function(response) {
                                swal("Gagal", "Data Gagal Diubah, Silahkan Coba Kembali", {
                                    icon: "error",
                                    buttons: false,
                                    timer: 1000,
                                });
                            }
                        })
                    }
                }
            });

        })

        $(document).on('click', '#btn-delete', function() {
            let id = $(this).val();
            swal({
                title: 'Apakah Anda Yakin ?',
                icon: 'error',
                text: "Data yang sudah dihapus tidak dapat dikembalikan lagi !",
                type: 'warning',
                buttons: {
                    cancel: {
                        visible: true,
                        text: 'Batal',
                        className: 'btn btn-light'
                    },
                    confirm: {
                        text: 'Hapus',
                        className: 'btn btn-danger'
                    },
                }
            }).then((Delete) => {
                if (Delete) {
                    $.ajax({
                        url: "{{ url('master-data/gejala') }}" + '/' + id,
                        type: 'DELETE',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                swal("Berhasil", "Data Berhasil Dihapus", {
                                    icon: "success",
                                    buttons: false,
                                    timer: 1000,
                                }).then(function() {
                                    table.draw();
                                })
                            } else {
                                swal("Gagal", "Data Gagal Dihapus", {
                                    icon: "error",
                                    buttons: false,
                                    timer: 1000,
                                });
                            }
                        },
                        error: function(response) {
                            swal("Gagal", "Data Gagal Diproses, Silahkan Coba Kembali", {
                                icon: "error",
                                buttons: false,
                                timer: 1000,
                            });
                        }
                    })
                }
            });
        })

        var table = $('#table-data').DataTable({
            processing: true,
            serverSide: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
            },
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            ajax: {
                url: "{{ url('master-data/gejala') }}",
                // data: function(d) {
                //     d.statusValidasi = $('#status-validasi').val();
                //     d.kategori = $('#kategori').val();
                //     d.search = $('input[type="search"]').val();
                // }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kode',
                    name: 'kode',
                    className: 'text-center',
                },
                {
                    data: 'nama_gejala',
                    name: 'nama_gejala',
                    className: 'text-center',
                },
                {
                    data: 'action',
                    name: 'action',
                    className: 'text-center',
                    orderable: true,
                    searchable: true
                },

            ],
            columnDefs: [
                // {
                //     targets: 4,
                //     visible: false,
                // },

            ],
        });
    </script>

    <script>
        $('#nav-master-gejala').addClass('active');

        function printErrorMsg(msg) {
            $.each(msg, function(key, value) {
                $('.' + key + '-error').removeClass('d-none');
                $('.' + key + '-error').text(value);
            });
        }

        function resetError() {
            resetErrorElement('nama');
        }

        function resetModal() {
            resetError();
            $('#form-tambah')[0].reset();
        }

        function resetErrorElement(key) {
            $('.' + key + '-error').addClass('d-none');
        }
    </script>
@endpush
