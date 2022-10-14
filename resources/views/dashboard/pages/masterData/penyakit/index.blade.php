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
    @component('dashboard.components.buttons.add',
        [
            'id' => 'btn-tambah',
            'class' => '',
            'url' => url('master-data/penyakit/create'),
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
                        <div class="card-title">Data Hama dan Penyakit</div>
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
                                        'th' => ['No', 'Kode', 'Nama Penyakit', 'Bobot Penyakit', 'Foto', 'Solusi', 'Aksi'],
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
                                'label' => 'Kode Penyakit',
                                'placeholder' => 'Kode Penyakit',
                                'name' => 'kode',
                                'required' => true,
                            ])
                        @endcomponent
                        @component('dashboard.components.formElements.input',
                            [
                                'id' => 'nama_penyakit',
                                'type' => 'text',
                                'label' => 'Nama Penyakit',
                                'placeholder' => 'Nama Penyakit',
                                'name' => 'nama_penyakit',
                                'required' => true,
                            ])
                        @endcomponent
                        @component('dashboard.components.formElements.input',
                            [
                                'id' => 'bobot_penyakit',
                                'type' => 'text',
                                'label' => 'Bobot Penyakit',
                                'placeholder' => 'Bobot Penyakit',
                                'name' => 'bobot_penyakit',
                                'class' => 'numerik',
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
                        url: "{{ url('master-data/penyakit') }}" + '/' + id,
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
                url: "{{ url('master-data/penyakit') }}",
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
                    data: 'nama_penyakit',
                    name: 'nama_penyakit',
                    className: 'text-center',
                },
                {
                    data: 'bobot_penyakit',
                    name: 'bobot_penyakit',
                    className: 'text-center',
                },
                {
                    data: 'foto',
                    name: 'foto',
                    className: 'text-center',
                },
                {
                    data: 'solusi',
                    name: 'solusi',
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
        $('#nav-master-penyakit').addClass('active');

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
