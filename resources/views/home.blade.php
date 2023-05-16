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
                                data-bs-target="#exampleModalPertanyaan">
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
                                        <form action="">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Jawab</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <a class="btn btn-link text-success text-gradient px-3 mb-0" href=""><i
                                                    class="far fa-info-alt me-2"></i>Kirim Jawaban</a>
                                        </form>
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
                                        <a class="btn btn-link text-info text-gradient px-3 mb-0" href=""><i
                                                class="far fa-danger-alt me-2"></i>Laporkan</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal tabah -->
        <div class="modal fade" id="exampleModalPertanyaan" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">tambah pertanyaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
