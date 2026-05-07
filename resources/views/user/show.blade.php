<x-app-layout>
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Detail Pengaduan</h1>

        <div class="border rounded p-4 space-y-2">
            <p><strong>Nama:</strong> {{ $pengaduan->nama }}</p>
            <p><strong>Kelas:</strong> {{ $pengaduan->kelas }}</p>
            <p><strong>Kategori:</strong> {{ $pengaduan->kategori }}</p>
            <p><strong>Status:</strong> {{ $pengaduan->status }}</p>

            <hr>

            <p class="mt-2">{{ $pengaduan->isi_pengaduan }}</p>
        </div>

        <a href="/dashboard"
           class="inline-block mt-4 text-blue-600">
            ← Kembali
        </a>
    </div>
</x-app-layout>
