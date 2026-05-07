<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Form Pengaduan</h1>

        <form method="POST" action="/pengaduan" class="space-y-4">
            @csrf

            <input type="text" name="nama" placeholder="Nama"
                   class="w-full border p-2 rounded" required>

            <input type="text" name="kelas" placeholder="Kelas"
                   class="w-full border p-2 rounded" required>

            <select name="kategori" class="w-full border p-2 rounded" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Perundungan">Perundungan</option>
                <option value="Fasilitas">Fasilitas</option>
                <option value="Kedisiplinan">Kedisiplinan</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <textarea name="isi_pengaduan"
                      placeholder="Isi pengaduan"
                      class="w-full border p-2 rounded"
                      rows="4"
                      required></textarea>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Kirim Pengaduan
            </button>
        </form>
    </div>
</x-app-layout>
