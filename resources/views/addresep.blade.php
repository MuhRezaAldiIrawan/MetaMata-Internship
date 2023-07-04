@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tulis Resepmu ...</h3>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Resep">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bahan - Bahan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Resep">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Langkah - Langkah Pembuatan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Resep">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Foto Masakan</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Terbitkan Resep</button>
        </div>
    </div>
@endsection
