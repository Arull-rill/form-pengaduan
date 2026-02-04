@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Aplikasi Pengaduan Siswa</h1>
@if ($errors->any())
<div class="bg-red-200 p-3 mb-4 rounded">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<a href="/pengaduan" class="bg-blue-600 text-white px-4 py-2 rounded">Buat Pengaduan</a>
@endsection
