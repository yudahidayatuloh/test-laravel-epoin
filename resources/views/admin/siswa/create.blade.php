<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white h-screen flex items-center justify-center">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg max-w-2xl w-full">
        <h1 class="text-3xl font-bold mb-4 text-center text-[#4794CA]">TAMBAH SISWA</h1>
        @if($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <h2 class="text-xl font-semibold">Akun Siswa</h2>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="input input-bordered w-full" required>
                </div>
                <div class="flex-1">
                    <label>Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="input input-bordered w-full" required>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="input input-bordered w-full" required>
                </div>
                <div class="flex-1">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="input input-bordered w-full" required>
                </div>
            </div>

            <h2 class="text-xl font-semibold mt-6">Data Siswa</h2>
            <div class="flex flex-col  mb-4">
                <label>Foto Siswa</label>
                <input type="file" name="image" accept="image/*" class="file-input file-input-bordered file-input-sm w-full  max-w-xs" required>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>NIS Siswa</label>
                    <input type="text" name="nis" value="{{ old('nis') }}" class="input input-bordered w-full" required>
                </div>
                <div class="flex-1">
                    <label>Tingkatan</label>
                    <select name="tingkatan" class="select select-bordered w-full" required>
                        <option value="">Pilih Tingkatan</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Jurusan</label>
                    <select name="jurusan" class="select select-bordered w-full" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TJKT">TJKT</option>
                        <option value="PPLG">PPLG</option>
                        <option value="DKV">DKV</option>
                        <option value="TOI">TOI</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label>Kelas</label>
                    <select name="kelas" class="select select-bordered w-full" required>
                        <option value="">Pilih Kelas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div>
                <label>No Hp</label>
                <input type="text" name="hp" value="{{ old('hp') }}" class="input input-bordered w-full" required>
            </div>

            <div class="flex justify-between space-x-2 mt-4">
                <a href="{{ route('siswa.index') }}" class="btn bg-[#4794CA] hover:bg-[#3876a1] text-white">Kembali</a>
                <div class="flex space-x-2">
                    <button type="submit" class="btn bg-green-500 text-white hover:bg-green-600">Simpan Data</button>
                    <button type="reset" class="btn btn-error text-white">Reset Data</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>