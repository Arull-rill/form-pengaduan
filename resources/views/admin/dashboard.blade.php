@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Dashboard Admin</h2>

<table class="w-full bg-white rounded shadow">
    <tr class="bg-gray-200">
        <th class="p-2">Nama</th>
        <th>Kelas</th>
        <th>Kategori</th>
        <th><span class="
px-2 py-1 rounded text-white
@if($d->status=='Baru') bg-blue-500
@elseif($d->status=='Diproses') bg-yellow-500
@else bg-green-500
@endif
">
                {{ $d->status }}
            </span>
        </th>
        <form method="POST" action="/pengaduan/{{ $d->id }}/status">
            @csrf
            <select name="status" onchange="this.form.submit()" class="border p-1 rounded">
                <option {{ $d->status=='Baru'?'selected':'' }}>Baru</option>
                <option {{ $d->status=='Diproses'?'selected':'' }}>Diproses</option>
                <option {{ $d->status=='Selesai'?'selected':'' }}>Selesai</option>
            </select>
        </form>
    </tr>

    @foreach($data as $d)
    <tr>
        <td class="p-2">{{ $d->nama }}</td>
        <td>{{ $d->kelas }}</td>
        <td>{{ $d->kategori }}</td>
        <td>{{ $d->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
