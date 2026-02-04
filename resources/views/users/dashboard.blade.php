@extends('layouts.app')
@section('content')
<h1>Dashboard Pengaduan</h1>

<a href="/pengaduan/create">+ Buat Pengaduan</a>

@foreach ($pengaduans as $p)
<div>
    <h3>{{ $p->judul }}</h3>
    <p>Status: {{ $p->status }}</p>
    <a href="/pengaduan/{{ $p->id }}">Detail</a>
</div>
@endforeach
@endsection
