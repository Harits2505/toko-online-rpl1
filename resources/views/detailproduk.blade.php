@extends('master.kerangka')
<title>Detail Produk</title>
@section('container')
<h2 class="h3">Detail Produk</h2>
<hr>
<div class="container">
        <a href="/product">
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
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Ditambahkan Pada</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->created_at }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Produk</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->name_product }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kategori</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->barang->nama_kategori }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Harga</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->harga }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Deskripsi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->description }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Stock</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $dataproduct->stock }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="row">
        <form action="/product/{{ $dataproduct->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 col-xs-12">
                <small>Silahkan pilih file untuk upload file / Gambar Product</small>
                <input type="hidden" name="product_id" value="{{ $dataproduct->id }}">
                <input type="file" name="files" accept="image/*" class="form form-control"
                    placeholder="Upload Gallery">
            </div>
            <div class="col-md-12 col-xs-12 mt-3">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
                      </svg> Upload Gambar
                </button>
            </div>
        </form>
    </div>
    <hr>
    <br>
    <table class="table table-border table-hover">
        <tr>
            <th>#</th>
            <th>Picture</th>
            <th>Aksi</th>
        </tr>
        @foreach ($datapictures as $gambars)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="/img/{{ $gambars->url }}" alt="" style="max-width: 200px"></td>
                <td>
                    <form action="/product/{{ $gambars->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $gambars->product_id }}">
                        <input type="hidden" name="picture" value="{{ $gambars->url }}">
                        <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Apakah anda yakin akan menghapus gambar tersebut.!')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</div>

@endsection