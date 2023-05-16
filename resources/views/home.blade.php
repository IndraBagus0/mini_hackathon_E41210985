@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div id="alert">
                        @include('components.alert')
                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">

                            <p class="mb-0">Daftar Pertanyaan</p>
                            <button type="button" class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal"
                                data-bs-target="#exampleModalTambah">
                                Tambah Pertanyaan
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @foreach ($pertanyaan as $row)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{ $row->body }}</h6>
                                        <span class="mb-2 text-xs">Judul: <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $row->title }}</span></span>
                                        <span class="mb-2 text-xs">Penanya: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $row->user_id }}</span></span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="{{ route('produk.hapus', $row->id) }}"
                                            onclick="event.preventDefault();
                                                 if (confirm('Apakah Anda yakin ingin menghapus produk {{ $row->name_product }}?')) {
                                                     document.getElementById('produk.hapus-{{ $row->id }}').submit();
                                                 }">
                                            <i class="far fa-trash-alt me-2"></i>Delete
                                        </a> --}}
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            onclick="return confirm('Are you sure?')" href=""><i
                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
