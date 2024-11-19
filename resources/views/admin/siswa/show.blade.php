<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white h-screen flex items-center justify-center">
    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg max-w-3xl w-full">
        <h1 class="text-4xl font-bold mb-6 text-center text-[#4794CA]">Detail Siswa</h1>
        <div class="flex flex-col md:flex-row items-center mb-8">
            <img src="{{ asset('storage/public/siswas/' . $siswa->image) }}" alt="Gambar Siswa" class="rounded-full w-36 h-36 object-cover mb-4 md:mb-0 md:mr-8 shadow-md">
            <div class="flex flex-col gap-5 mt-5 justify-center">
                <h2 class="text-3xl font-semibold text-[#4794CA]">{{ $siswa->name }}</h2>
                <p class="text-gray-800 text-lg"><strong>NIS:</strong> {{ $siswa->nis }}</p>
                <p class="text-gray-800 text-lg"><strong>Email:</strong> {{ $siswa->email }}</p>
                <p class="text-gray-800 text-lg"><strong>Kelas:</strong> {{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</p>
                <p class="text-gray-800 text-lg"><strong>No HP:</strong> {{ $siswa->hp }}</p>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('siswa.index') }}" class="btn bg-[#4794CA] hover:bg-[#3876a1] text-lg text-white">Kembali</a>
        </div>
    </div>
</body>
</html>