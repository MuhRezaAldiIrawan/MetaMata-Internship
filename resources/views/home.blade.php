@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Resep Terbaru</h3>
        <div class="row">

            @foreach ($resep as $r)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('makanan1.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/detailresep/{{ $r->id }}" style="text-decoration: none; color: black">
                                <h5 class="card-title">{{ $r->judul }}</h5>
                            </a>
                            <p class="card-text">{{ $r->deskripsi }}</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-primary">Suka</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
