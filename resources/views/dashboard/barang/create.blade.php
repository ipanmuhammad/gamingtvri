@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-betwe9en flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Barang</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/barang" method="post">
            @csrf
            <div class="mb-3">
                <label for="kode" name="kode" class="form-label">Kode Barcode</label>
                <input type="text" class="form-control" id="kode" aria-describedby="Kode Barcode">
            </div>
            <div class="mb-3">
                <label for="barang" name="barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="barang" aria-describedby="Nama Barang">
            </div>
            <div class="mb-2">
                <label for="jenis" name="jenis" class="form-label">Jenis Barang</label>
                <select class="form-select" required aria-label="select example">
                    <option value="">Pilih</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="limit" name="limit" class="form-label">Limit Pemakaian Barang</label>
                <input type="text" class="form-control" id="limit" aria-describedby="Limit Pemakaian Barang">
            </div>
            <div class="mb-3">
                <label for="deskripsi" name="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" aria-describedby="Deskripsi">
            </div>
            <div class="mb-3">
                <label for="upload" name="upload" class="form-label">Upload Foto</label>
                <input type="file" class="form-control" aria-label="file example" required>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
