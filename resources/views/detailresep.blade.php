@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($detail as $d)
            <div class="text-start">
                <img src="{{ asset('storage/' . $d->foto) }}" class="img-fluid" style="height: 350px;">
            </div>
            <h2 class="mt-4">{{ $d->judul }}</h2>
            <p>{{ $d->deskripsi }}</p>
            <h5>Bahan - Bahan</h5>
            <p>{{ $d->bahan }}</p>
            <h5>Langkah Pembuatan</h5>
            <p>{{ $d->langkah_pembuatan }}</p>
        @endforeach
    </div>
@endsection
