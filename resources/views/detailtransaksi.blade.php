@extends('master.kerangka')
<title>Detail Produk</title>
@section('container')
<h2 class="h3">Detail Transaksi</h2>
<hr>
<div class="container">
        <a href="/transaction">
            <button class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg> Kembali
            </button>
        </a>
</div>
        <div class="container mt-3">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Ditambahkan Pada</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datatrans->created_at }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Pembeli</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datatrans->transactions->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Total Price</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datatrans->total_price }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Metode Pembayaran</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datatrans->method_payment }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datatrans->status }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection