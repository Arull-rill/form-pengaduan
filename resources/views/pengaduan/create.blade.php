@extends('layouts.app')

@section('content')
@if(session('success'))
<div class="bg-green-200 p-3 mb-4 rounded">{{ session('success') }}</div>
@endif

<form method="POST" action="/pengaduan" class="bg-white p-6 rounded shadow">
    @csrf
    <input name="nama" placeholder="Nama" class="border p-2 w-full mb-3">
    <input name="kelas" placeholder="Kelas" class="border p-2 w-full mb-3">
    <input name="kategori" placeholder="Kategori" class="border p-2 w-full mb-3">
    <textarea name="isi_pengaduan" placeholder="Isi Pengaduan" class="border p-2 w-full mb-3"></textarea>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
</form>
@endsection
