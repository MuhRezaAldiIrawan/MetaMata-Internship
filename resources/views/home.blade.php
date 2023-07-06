@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Resep Terbaru</h3>
        <div class="row">

            @foreach ($resep as $r)
                <div class="col-sm-4">
                    <div class="card " style="width: 20rem;">         
                        <img src="{{ asset('storage/' . $r->foto) }}" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body">
                            <small style="color: darkgrey">{{ $r->suka }} Telah menyukai Resep Ini</small>
                            <a href="/detailresep/{{ $r->id }}" style="text-decoration: none; color: black">
                                <h5 class="card-title">{{ $r->judul }}</h5>
                            </a>
                            <p class="card-text">{{ Str::limit($r->deskripsi, 100) }}</p>
                            <form action="{{ route('suka', $r->id) }}"method="post">
                                @csrf
                                <div class="d-grid gap-2">
                                    <button class="btn btn-secondary" name="suka" value="1"
                                        type="submit">Suka</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
