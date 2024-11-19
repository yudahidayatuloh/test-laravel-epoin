<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white h-screen flex items-center justify-center">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg max-w-2xl w-full">
        <h1 class="text-3xl font-bold mb-4 text-center text-[#4794CA]">EDIT SISWA</h1>
        
        @if($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="editForm" action="{{ route('siswa.update', $siswa->id)}}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="flex flex-col items-center mb-4">
                <label>Foto Siswa</label>
                <img src="{{ asset('storage/public/siswas/' .$siswa->image) }}" class="rounded-full mb-2 w-32 h-32 object-cover">
                <input type="file" name="image" accept="image/*" class="file-input file-input-bordered file-input-xl w-full">
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $siswa->name) }}" required class="input input-bordered w-full">
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>NIS Siswa</label>
                    <input type="text" name="nis" id="nis" value="{{ old('nis', $siswa->nis) }}" required class="input input-bordered w-full">
                </div>
                
                <div class="flex-1">
                    <label>No Hp</label>
                    <input type="text" name="hp" value="{{ old('hp', $siswa->hp) }}" required class="input input-bordered w-full">
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Tingkatan</label>
                    <select name="tingkatan" class="select select-bordered w-full">
                        <option {{ 'X' == $siswa->tingkatan ? 'selected' : '' }} value="X"> X </option>
                        <option {{ 'XI' == $siswa->tingkatan ? 'selected' : '' }} value="XI"> XI </option>
                        <option {{ 'XII' == $siswa->tingkatan ? 'selected' : '' }} value="XII"> XII </option>
                    </select>
                </div>

                <div class="flex-1">
                    <label>Jurusan</label>
                    <select name="jurusan" class="select select-bordered w-full">
                        <option {{ 'TBSM' == $siswa->jurusan ? 'selected' : '' }} value="TBSM"> TBSM </option>
                        <option {{ 'TJKT' == $siswa->jurusan ? 'selected' : '' }} value="TJKT"> TJKT </option>
                        <option {{ 'PPLG' == $siswa->jurusan ? 'selected' : '' }} value="PPLG"> PPLG </option>
                        <option {{ 'DKV' == $siswa->jurusan ? 'selected' : '' }} value="DKV"> DKV </option>
                        <option {{ 'TOI' == $siswa->jurusan ? 'selected' : '' }} value="TOI"> TOI </option>
                    </select>
                </div>

                <div class="flex-1">
                    <label>Kelas</label>
                    <select name="kelas" class="select select-bordered w-full">
                        <option {{ '1' == $siswa->kelas ? 'selected' : '' }} value="1"> 1 </option>
                        <option {{ '2' == $siswa->kelas ? 'selected' : '' }} value="2"> 2 </option>
                        <option {{ '3' == $siswa->kelas ? 'selected' : '' }} value="3"> 3 </option>
                        <option {{ '4' == $siswa->kelas ? 'selected' : '' }} value="4"> 4 </option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label>Status</label>
                    <select name="status" class="select select-bordered w-full">
                        <option {{ '1' == $siswa->status ? 'selected' : '' }} value="1"> Aktif </option>
                        <option {{ '0' == $siswa->status ? 'selected' : '' }} value="0"> Tidak Aktif </option>
                    </select>
                </div>
            </div>

            <div class="flex justify-between space-x-2 mt-4">
                <a href="{{ route('siswa.index') }}" class="btn bg-[#4794CA] hover:bg-[#3876a1] text-white">Kembali</a>
                <div class="flex space-x-2">
                    <button type="button" class="btn bg-green-500 text-white hover:bg-green-600" onclick="openModal()">Simpan Data</button>
                    <button type="reset" class="btn btn-error text-white">Reset Data</button>
                </div>
            </div>
        </form>
    </div>

 
    <div id="confirmationModal" class="modal">
        <div class="modal-box bg-white">
            <h3 class="font-bold text-lg">Anda yakin ingin edit data ini?</h3>
            <p class="py-4">Pastikan data yang diisi sudah benar sebelum menyimpan perubahan.</p>
            <div class="modal-action">
                <button class="btn bg-[#4794CA] hover:bg-[#3876a1] text-white" onclick="confirmEdit()">Ya, Simpan</button>
                <button class="btn btn-neutral text-white" onclick="closeModal()">Batal</button>
            </div>
        </div>
    </div>

    <script>

        function openModal() {
            document.getElementById('confirmationModal').classList.add('modal-open');
        }

        function closeModal() {
            document.getElementById('confirmationModal').classList.remove('modal-open');
        }


        function confirmEdit() {
            document.getElementById('editForm').submit();
        }
    </script>
</body>
</html>