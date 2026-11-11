
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <p>
        <a href="{{ route('buku.create') }}">
            Tambah Buku
        </a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>

        @forelse ($bukus as $buku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->kode }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->kategori->nama }}</td>
                <td>
                    <a href="{{ route('buku.edit', $buku) }}">
                        Edit
                    </a>

                    <form
                        action="{{ route('buku.destroy', $buku) }}"
                        method="POST"
                        style="display:inline"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            onclick="return confirm('Hapus buku ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    Belum ada data buku.
                </td>
            </tr>
        @endforelse

    </table>

</body>
</html>
