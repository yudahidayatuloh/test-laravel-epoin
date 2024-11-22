<title>Hallo admin</title>
@extends('layouts.abay')

@section('content')
    @if (session('success'))
        <div role="alert" id="confirm-alert" class="alert alert-success bg-[#4794ca] rounded text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif


    <div class="navbar bg-white flex items-center justify-between">
        <h1 class="text-4xl font-bold text-[#4794CA]">DASHBOARD</h1>
        <button class="bg-red-500 text-white text-[13px] font-semibold hover:bg-red-600 px-[6px] py-[4px] rounded" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            LOGOUT
        </button>
    </div>

    <div class="bg-gray-200 p-10 rounded-lg flex items-center space-x-12 shadow-md mt-16">
        <div class="w-24 h-24 bg-[#4794CA] rounded-full flex-shrink-0"></div>
        <h1 class="text-5xl font-bold text-[#4794CA]">Hallo, Admin</h1>
    </div>

        <div class="grid grid-cols-3 gap-10 mt-28">
    <div class="flex items-center justify-between bg-[#4794CA] text-white rounded-lg p-5 shadow-md w-80 h-24">
        <div>
            <span class="block text-lg font-medium">Guru</span>
            <span class="block text-4xl font-bold">100</span>
        </div>
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="Logo Guru" class="w-36 h-36 -mx-14 object-contain" />
    </div>

    <div class="flex items-center justify-between bg-[#4794CA] text-white rounded-lg p-5 shadow-md w-80 h-24 hover:bg-[#3876a1] cursor-pointer transition-all">
        <div>
            <a class="block text-lg font-medium pr-48" href="{{ route('siswa.index') }}">Siswa</a>
            <a class="block text-4xl font-bold" href="{{ route('siswa.index') }}">1500</a>
        </div>
        <a href="{{ route('siswa.index') }}" class="w-32 h-36 -mx-14 object-contain">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="Logo Guru" />
        </a>
    </div>

    <div class="flex items-center justify-between bg-[#4794CA] text-white rounded-lg p-5 shadow-md w-80 h-24">
        <div>
            <span class="block text-lg font-medium">Pencatatan Poin</span>
            <span class="block text-4xl font-bold">5</span>
        </div>
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="Logo Guru" class="w-36 h-36 -mx-14 object-contain" />
    </div>

</div>
    </div>

    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
        @csrf
    </form>

    <script src="{{ asset('js/script.js') }}"></script>
@endsection