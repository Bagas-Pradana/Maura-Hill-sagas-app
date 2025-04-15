@extends('layouts.app')

@section('title', 'Setting')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white">
                <a style="color: white;" href="/setting"><i class="mdi mdi-home"></i></a>
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
    <button type="button" class="mb-4 btn bg-gradient-primary text-white btn-preview"
        data-bs-toggle="modal">
        Preview
    </button>
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
                <!-- Button -->
                <div class="pb-2 flex justify-between gap-x-2 lg:gap-x-2 w-full sm:w-4/5 lg:w-full overflow-hidden font-bold text-body2 md:text-body1 lg:text-headline6 px-0">
                    {{-- @dd($hasilProduct) --}}
                    @foreach ($hasilProduct as $index => $product)
                    <button id="house-button" data-unit="{{ $product['unit'] }}" data-key="{{ $index }}" type="button"
                        class="house-button uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] p-1 border-4 border-primary-500 text-primary-500 text-center whitespace-nowrap hover:text-shade-white hover:bg-primary-500">
                        {{ $product['unit'] }}
                    </button>
                    @endforeach
                </div>

                {{-- ----------------------------------------------------CARD HOUSE---------------------------------------------------------------------------- --}}
                {{-- COBAAN --}}
                <div class="fixed bottom-1/2 right-1/2 translate-x-1/2 house-coba mx-auto border-red-500 border-4 rounded-md hidden">
                    @foreach ($hasilProduct as $key => $product)
                    @php
                        $images = json_decode($product['images'], true);
                        $specificationTable = json_decode($product['specification_table'], true);
                        $specificationList = json_decode($product['specification_list'], true);
                    @endphp
                        <div id="content-unit-{{ $key }}" data-unit="{{ $product['unit'] }}" data-key="{{ $key }}" class="flex flex-row justify-between @if($key !== 0) hidden @endif">
                            <button type="button" id="close-content" class="p-2 leading-6 order-last text-headline4">×</button>
                            <span class="p-2 uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] 2xl:text-headline3 lg:pb-0 lg:text-left text-center break-words w-full">unit {{ $product['unit'] }}</span>
                        </div>
                        <span class="house-content-coba"></span>
                    @endforeach
                </div>
                {{-- COBAAN --}}

                {{-- ----------------------------------------------------CARD HOUSE---------------------------------------------------------------------------- --}}

            <!-- Modal Form -->
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
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
    <script>
        $(document).ready(function() {
            // PREVIEW DATA

            $('.btn-preview').click(function() {
                $('#modal-form').modal('show');
                $('#modal-title').text('Preview Layout');
                $('#form-data').trigger('reset');
                $('#btn-modal-action').text('Tambah Data').addClass('create-data').data
                    ('url', '{{ route('houseProduct.store') }}');

                    // event click untuk preview layout
                    let lastClickedButton = null; // Setel tombol terakhir yang di klik
                    // firstButton.removeClass('text-primary-500');
                    // firstButton.addClass('text-shade-white bg-primary-500');
                    // EVENT DELEGATION KARENA LOOPING MUNCUL SECARA DINAMIS
                    $(document).on('click', '#close-content', function () {
                        console.log('close');
                        $('.house-coba').addClass('hidden');
                    });
                    $('.house-button').click(function() {
                        $('.house-coba').removeClass('hidden');
                        let indexData = $(this).data('key');
                        console.log(indexData);
                        $('.house-content-coba').html(indexData);

                        // Ambil nilai dari atribut data-unit
                        const unit = $(this).data('unit');
                        const key = $(this).data('key');

                        $('[id^="content-unit"]').addClass('hidden'); // Sembunyikan semua content-unit
                        const selectedUnit = `#content-unit-${key}`;
                        $(`#content-unit-${key}`).removeClass('hidden'); // Tampilkan hanya content-unit yang sesuai dengan tombol yang ditekan

                        // Jika ada tombol yang sebelumnya diklik (Tombol Lama)
                        if (lastClickedButton && lastClickedButton !== this) {
                            $(lastClickedButton).addClass('text-primary-500');
                            $(lastClickedButton).addClass('bg-shade-white');
                            $(lastClickedButton).removeClass('text-shade-white');
                            $(lastClickedButton).removeClass('bg-primary-500');
                        }
                        // Hapus active button dari tombol yang baru diklik (Tombol Baru)
                        $(this).removeClass('text-primary-500');
                        $(this).removeClass('bg-shade-white');
                        $(this).addClass('text-shade-white');
                        $(this).addClass('bg-primary-500');
                        lastClickedButton = this; // Simpan tombol yang terakhir diklik
                })
            });

        })
    </script>
@endpush




