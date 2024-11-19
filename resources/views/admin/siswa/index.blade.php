@extends('layouts.abay')

@section('content')
<div class="navbar bg-white flex items-center justify-between -mt-10">
        <h1 class="text-4xl font-bold text-[#4794CA]">DATA SISWA</h1>
        <button class="bg-red-500 text-white text-[13px] font-semibold hover:bg-red-600 px-[6px] py-[4px] rounded" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            LOGOUT
        </button>
</div>

@if(session('success'))
    <div role="alert" id="confirm-alert" class="alert alert-success rounded text-white bg-[#4794CA]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ session('success') }}</span>
    </div>
@endif

<form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
    @csrf
</form>

<div class="flex-grow ">
    <div class="mt-2 mb-2 flex justify-end mx-20">
        <a href="{{ route('siswa.create') }}" class="btn bg-[#4794CA] hover:bg-[#3876a1] text-md px-2 py-0 text-white btn-md">Tambah Siswa</a>
    </div>

    <div class="bg-white ml-[25px] mr-[25px] mb-10 rounded-xl shadow-xl p-5">
        <div id="skeleton" class="skeleton w-full mt-5 space-y-4" style="display: none;">
            <div class="skeleton-line h-6 w-full"></div>
            <div class="skeleton-line h-6 w-3/4"></div>
            <div class="skeleton-line h-6 w-5/6"></div>
            <div class="skeleton-line h-6 w-2/3"></div>
        </div>

        <div class="flex items-center justify-end ml-[100px] mr-[100px]">
            <form action="" id="search-form" method="GET" class="flex items-center w-full max-w-md">
                <input type="text" name="cari" placeholder="Cari..." class="input input-bordered input-sm w-full">
                <input type="submit" class="btn bg-[#4794CA] hover:bg-[#3876a1] btn-sm ml-2 text-white" value="Cari">
            </form>
        </div>

        <div id="data-table" class="overflow-x-auto mt-5">
            <table class="table w-full">
                <thead>
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
                </thead>
                <tbody>
                    @forelse($siswas as $siswa)
                        <tr>
                            <td>
                                <div class="avatar">
                                    <div class="mask mask-squircle h-16 w-16">
                                        <img src="{{ asset('storage/public/siswas/' . $siswa->image) }}" alt="Avatar" />
                                    </div>
                                </div>
                            </td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
                            <td>{{ $siswa->hp }}</td>
                            <td>
                                @if ($siswa->status == 1)
                                    <span class="badge badge-ghost badge-sm text-green-600">Aktif</span>
                                @else
                                    <span class="badge badge-ghost badge-sm text-red-600">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <form id="delete-form-{{ $siswa->id }}" action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="space-x-2">
                                    <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-square btn-neutral btn-sm">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                    </a>
                                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn bg-[#4794CA] hover:bg-[#3876a1] btn-square btn-sm">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                                        </svg>
                                        
                                    </a>
                                    <button type="button" onclick="showDeleteModal({{ $siswa->id }})" class="btn btn-square btn-error text-white btn-sm">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </button>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>

                        <input type="checkbox" id="confirm-delete-modal-{{ $siswa->id }}" class="modal-toggle">
                        <div class="modal">
                            <div class="modal-box  bg-white">
                                <h2 class="text-xl font-semibold">Konfirmasi Penghapusan</h2>
                                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                <div class="modal-action">
                                    <label for="confirm-delete-modal-{{ $siswa->id }}" onclick="document.getElementById('delete-form-{{ $siswa->id }}').submit();" class="btn btn-error text-white">Hapus</label>
                                    <label for="confirm-delete-modal-{{ $siswa->id }}" class="btn btn-neutral">Batal</label>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $siswas->links() }}
    </div>
</div>

<script>
    function showDeleteModal(id) {
        const modal = document.getElementById(`confirm-delete-modal-${id}`);
        modal.checked = true;
    }
</script>

<script src="{{ asset('js/script.js') }}"></script>
@endsection