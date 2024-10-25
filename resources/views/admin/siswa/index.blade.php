<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="{{ route('admin.dashboard') }}">Menu Utama</a>
    <br>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <br>
    <form action="{{ route('logout') }}" id="logout-form" method="POST">
        @csrf
    </form>
    <br>
    <form action="" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
    <br>
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>

    @if(Session::has('success'))
    <div class="alert-alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif


    <table class="tabel">
        <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>No Hp</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @forelse($siswas as $siswa)
        <tr>
            <td>
                <img src="{{ asset('storage/public/siswas/' . $siswa->image) }}" width="120px" height="120px">
            </td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->name }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas}}</td>
            <td>{{ $siswa->hp }}</td>
            @if ($siswa->status==1)
            <td>Aktif</td>
            @else
            <td>Tidak Aktif</td>
            @endif
            <td>
                <form action="{{ route('siswa.destroy',$siswa->id) }}" onsubmit="return confirm('Anda Yakin ?')" method="POST">
                    <a href="{{ route('siswa.show', $siswa->id) }} " class="btn btn-sm btn-dark">SHOW</a>
                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">HAPUS</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>
                <p>Data Tidak Ditemukan</p>
            </td>
            <td>
                <a href="{{ route('siswa.index') }}">Kembali</a>
            </td>
        </tr>
        @endforelse
    </table>
    {{ $siswas->links() }}
</body>
</html>