@extends('master.kerangka')
<title>Edit transaksi</title>
@section('container')
<h2 class="h3">Edit Transaksi</h2>
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
    <br><br>

    <form action="/transaction/{{ $datatransaksi->id }}" method="post">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="inputGroupSelect01">
                        <h6>Edit status</h6>
                    </label></td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" name="status" id="inputGroupSelect01"
                            required>
                            <option selected>Pilih status...</option>
                            <option value="cancel">Cancel</option>
                            <option value="pending">Pending</option>
                            <option value="packaging">Packaging</option>
                            <option value="delivery">Delivery</option>
                            <option value="finish">Finish</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="simpan" class="btn btn-warning w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-save" viewBox="0 0 16 16">
                            <path
                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                        </svg> Simpan
                    </button>
                </td>
            </tr>
        </table>


    </form>
    <br><br><br><br>
</div>
@endsection
