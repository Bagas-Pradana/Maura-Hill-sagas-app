@extends('layouts.app')

@section('title', 'Setting')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white">
                <i class="mdi mdi-home"></i>
            </span>
            <span class="page-title-icon bg-gradient-primary text-white">
                <a style="color: white;" href="{{ route('houseProduct.index') }}"><i class="mdi mdi-newspaper"></i></a>
            </span>
            <i class="mdi mdi-slash-forward"></i>
            {{ $index }}
        </h3>
        <button type="button" class="btn bg-gradient-primary text-white btn-create"
            data-bs-toggle="modal">
            Tambah Data
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Tabel -->
            {!! $dataTable->table(['id' => 'table-container']) !!}
            <!-- Tabel -->
        </div>
    </div>
    <!-- Start Modal Form -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
        aria-labelledby="modal-formLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="modal-title">Modal title</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-data">
                        <div class="form-group mb-3">
                            <label for="key" class="mb-3">Key</label>
                            <input type="text" class="form-control" id="key" name="key"
                                placeholder="Key">
                        </div>
                        <div class="form-group mb-3">
                            <label for="value" class="mb-3">Value</label>
                            <input type="text" class="form-control" id="value" name="value"
                                placeholder="Value">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary" id="btn-modal-action">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Form -->
@endsection

@push('scripts')
    <!-- Custom js for this page -->
    {!! $dataTable->scripts() !!}
    <script>
        $(document).ready(function() {
            // BUTTON CREATE DATA
            $('.btn-create').click(function() {
                $('#modal-form').modal('show');
                $('#modal-title').text('Tambah Data');
                $('#form-data').trigger('reset');
                $('#btn-modal-action').text('Tambah Data').addClass('create-data').data(
                    'url', '{{ route('setting.store') }}');
            });

            // CREATE DATA
            $(document).on('click', '#btn-modal-action.create-data', function(e) {
                e.preventDefault();
                // Remove method form and csrf token
                $('#form-data').find('input[name=_method]').remove();
                $('#form-data').find('input[name=csrf-token]').remove();
                $('#form-data').append(
                    '<input type="hidden" name="_method" value="POST">');
                $('#form-data').append(
                    '<input type="hidden" name="_token" value="{{ csrf_token() }}">'
                );
                // Form create data
                let formData = new FormData($('#form-data')[0]);
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Toast.fire({
                            'icon': 'success',
                            'title': 'Success',
                            'text': response.message,
                        })
                        // Reload datatables
                        $('#table-container').DataTable().ajax.reload();
                        // Menutup modal tambah data
                        $('#modal-form').modal('hide');
                    },
                    error: function(xhr) {
                        // Tampilkan toast error jika ada kesalahan
                        if (xhr.status === 422) {
                            // Ambil message dan errors list
                            let errors = xhr.responseJSON.errors;
                            let message = xhr.responseJSON.message;
                            // Rangkai kerangka errors
                            let errorList = '<ul>';
                            for (let key in errors) {
                                errorList += '<li>' + errors[key][0] +
                                    '</li>';
                            }
                            errorList += '</ul>';
                            // Menampilkan error pada toast
                            Toast.fire({
                                'icon': 'error',
                                'title': message,
                                'html': errorList,
                            })
                        } else {
                            // Tampilkan error pada toast
                            Toast.fire({
                                'icon': 'error',
                                'title': 'Error',
                                'text': xhr.responseJSON.message,
                            })
                        }
                    }
                });
            });
        });
    </script>
    <!-- End custom js for this page -->
@endpush
