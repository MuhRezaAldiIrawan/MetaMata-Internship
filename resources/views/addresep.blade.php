@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tulis Resepmu ...</h3>

        <form action="{{ route('tambahresepbaru') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" id="exampleFormControlInput1"
                    placeholder="Judul Resep">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div id="bahan-container">
                <label>Bahan:</label>
                <div class="bahan-input">
                    <input type="text" class="form-control" name="bahan[]" required>
                </div>
                <button type="button" class="btn-add-bahan button-no-underline mt-2 mb-3">+ item bahan</button>
            </div>
            <div id="langkah-container">
                <label>Langkah-langkah:</label>
                <div class="langkah-input">
                    <input type="text" class="form-control" name="langkah_pembuatan[]" required>
                </div>
                <button type="button" class="btn-add-langkah button-no-underline mt-2 mb-2">+ item langkah</button>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Foto Masakan</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Terbitkan Resep</button>
            </div>

        </form>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambah input bahan
            $('.btn-add-bahan').click(function() {
                var bahanInput =
                    '<div class="bahan-input"><input type="text" class="form-control mt-2" id="bahan" name="bahan[]" placeholder="Judul Resep"><button type="button" class="btn-remove-bahan btn btn-outline-danger mt-2">Hapus</button></div>';
                $('#bahan-container').append(bahanInput);
            });

            // Hapus input bahan
            $(document).on('click', '.btn-remove-bahan', function() {
                $(this).closest('.bahan-input').remove();
            });

            // Tambah input langkah
            $('.btn-add-langkah').click(function() {
                var langkahInput =
                    '<div class="langkah-input"><input type="text"  class="form-control mt-2" name="langkah_pembuatan[]"><button type="button" class="btn-remove-langkah btn btn-outline-danger mt-2">Hapus</button></div>';
                $('#langkah-container').append(langkahInput);
            });

            // Hapus input langkah
            $(document).on('click', '.btn-remove-langkah', function() {
                $(this).closest('.langkah-input').remove();
            });
        });
    </script>
@endsection
