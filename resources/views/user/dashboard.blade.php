<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">Daftar Pengaduan</h1>
            <a href="/pengaduan/create"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                + Buat Pengaduan
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($pengaduans as $p)
            <div class="border rounded p-4 mb-4">
                <div class="flex justify-between">
                    <div>
                        <p class="font-semibold">{{ $p->kategori }}</p>
                        <p class="text-sm text-gray-600">
                            {{ $p->nama }} - {{ $p->kelas }}
                        </p>
                    </div>
                    <span class="text-sm px-3 py-1 rounded bg-gray-200">
                        {{ $p->status }}
                    </span>
                </div>

                <a href="/pengaduan/{{ $p->id }}"
                   class="text-blue-600 text-sm mt-2 inline-block">
                    Lihat Detail
                </a>
            </div>
        @empty
            <p class="text-gray-500">Belum ada pengaduan.</p>
        @endforelse
    </div>
</x-app-layout>
