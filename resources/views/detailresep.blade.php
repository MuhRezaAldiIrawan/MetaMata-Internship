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
            <?php $counter = 1; ?>
            @foreach ($detail as $item)
                @foreach (explode(',', $item->bahan) as $bhn)
                    {{ $counter }}. {{ $bhn }}<br>
                    <?php $counter++; ?>
                @endforeach
            @endforeach
            {{-- <p>{{ $d->bahan }}</p> --}}
            <h5>Langkah Pembuatan</h5>
            <?php $counter = 1; ?>
            @foreach ($detail as $item)
                @foreach (explode(',', $item->langkah_pembuatan) as $l)
                    {{ $counter }}. {{ $l }}<br>
                    <?php $counter++; ?>
                @endforeach
            @endforeach
        @endforeach
    </div>
@endsection
