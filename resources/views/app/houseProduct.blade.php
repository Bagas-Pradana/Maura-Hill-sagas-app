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
    <button type="button" class="mb-4 btn bg-gradient-primary text-white btn-create"
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

{{-- ----------------------------------------------------CARD HOUSE---------------------------------------------------------------------------- --}}
                {{-- @foreach ($products as $key => $product)
                <div id="content-unit-{{ $key }}" data-unit="{{ $product['unit'] }}" data-key="{{ $key }}"
                class="house-container bg-shade-white flex flex-col gap-y-8 min-h-full lg:h-auto justify-center lg:justify-around items-center text-headline4 md:text-headline3 sm:text-center lg:w-[100%] lg:flex-row lg:gap-x-16 lg:gap-y-8 lg:p-0 overflow-hidden @if($key !== 0) hidden @endif">
                    <!-- Gambar tetap di sebelah kiri dengan ukuran asli -->
                    <div id="content"
                    class="py-4 relative flex justify-center aspect-[2/3] sm:aspect-[3/4] lg:aspect-[4/5] max-w-[305px] max-h-[450px] sm:max-w-[380px] md:max-w-[400px] sm:min-h-[550px] lg:max-w-[450px] lg:min-h-[730px] xl:min-h-[800px] sm:animate-veryslow-bounce lg:justify-center lg:items-center lg:order-first overflow-hidden">
                    @foreach ($product['images'] as $index => $productImages)
                            <img id="house-unit-{{ $key }}-{{ $index }}" src="{{ $productImages['url'] }}" data-index="{{ $index }}"
                                alt="{{ $productImages['title'] }}"
                                class="house-unit shadow-lg shadow-slate-800 rounded-xl h-full w-full lg:object-cover {{ $index !== 0 ? 'hidden' : '' }}" />
                        @endforeach
                        <button id="" type="button"
                            class="left-button absolute top-1/2 -translate-y-1/2 left-0.5  sm:left-[0.5rem] lg:left-[1rem] xl:left-[0.6rem] 2xl:left-[0.8rem]">
                            <img src="{{ asset('images/product/arrow-left.png') }}" alt="left"
                                class="object-cover object-bottom scale-75 sm:scale-90 w-full h-full">
                        </button>
                        <button id="" type="button"
                            class="right-button absolute top-1/2 -translate-y-1/2 right-0.5 sm:right-[0.5rem] lg:right-[1rem] xl:right-[0.6rem] 2xl:right-[0.8rem]">
                            <img src="{{ asset('images/product/arrow-right.png') }}" alt="right"
                                class="object-cover object-bottom scale-75 sm:scale-90 w-full h-full">
                        </button>
                    </div>

                    <!-- Wrapper kanan (Text, Spesifikasi, dan Table) -->
                    <div class="lg:h-full gap-y-6 lg:gap-12 flex flex-col lg:items-center lg:justify-center sm:w-4/5 lg:w-[60%] xl:w-[70%] overflow-hidden max-w-full">
                        <!-- Judul & Deskripsi -->
                        <div class="flex flex-col gap-y-6 lg:gap-6 w-full max-w-full overflow-hidden">
                            <span  class="uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] 2xl:text-headline3 lg:pb-0 lg:text-left text-center break-words w-full"> unit {{ $product['unit'] }}</span>
                            <div class="block md:flex md:flex-row md:justify-center lg:block">
                                <p class="text-justify text-body2 w-full sm:text-body1 xl:text-headline6 2xl:text-headline5 break-words text-wrap sm:font-bold lg:text-justify lg:w-full ">{{ $product['description'] }}</p>
                            </div>
                        </div>

                        <!-- Spesifikasi (Dibawah <p>) -->
                        <div class="flex gap-y-4 flex-col xl:self-start gap-6 max-w-full">
                            <div class="w-full  text-body1 sm:text-headline6 lg:text-headline6 xl:text-headline5 2xl:text-headline4 break-words">
                                <span class="uppercase block text-primary-500 font-bold text-center pb-4 lg:pb-0 lg:text-left">SPESIFIKASI UNIT {{ $product['unit'] }}</span>
                                @foreach ($product['specification_list'] as $index => $productlist)
                                @if (!is_null($productlist))
                                <span class="uppercase block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">{{ $productlist }}</span>
                                @endif
                                @endforeach
                            </div>

                            <!-- Tabel Everest-->
                            <div class="flex lg:justify-normal overflow-auto w-full max-w-full pb-2">
                                <div class="min-w-[40rem] md:min-w-[45rem] lg:min-w-[35rem] max-w-full  font-semibold text-body2 sm:text-body1 lg:text-body1 xl:text-headline6 2xl:text-headline5 text-primary-500 border-2 border-collapse border-primary-500">
                                    <!-- Div Header -->
                                    <div class="flex justify-center items-center w-full text-shade-white bg-primary-500">
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Luas
                                            Tanah</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center w-[27%]">
                                            Luas Bangunan</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Kamar
                                            Tidur</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Kamar
                                            Mandi</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Parkir
                                        </div>
                                    </div>

                                    <!-- Div Body -->
                                    <div class="flex justify-center items-center divide-x-2 divide-primary-500 text-primary-500 bg-shade-white text-center">
                                        @foreach ($product['specification_table'] as $index => $product)
                                        <div class="p-1 lg:p-3 break-words flex-1">{{ $product['value'] }} {{ $product['unit'] }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ------------------------------------------------- END HOUSE CARD UNIT CONTENT-------------------------------------------------------------------------- --}}
                    {{-- </div>
                </div> --}}
                {{-- @endforeach --}}
{{-- ----------------------------------------------------CARD HOUSE---------------------------------------------------------------------------- --}}

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
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
