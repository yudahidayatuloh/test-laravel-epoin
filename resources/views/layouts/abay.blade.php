<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="bg-white min-h-screen overflow-hidden">
    <div class="flex min-h-screen">
        <div class="sidebar bg-[#4794CA] w-[215px] p-6 min-h-screen">
            <a href="{{ route('admin/dashboard') }}" class="flex items-center bg-[#4794CA] text-white rounded-lg px-1 py-1 hover:bg-[#56a0d4] transition duration-300">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" 
                    alt="Logo E-Point" class="w-8 mr-[10px]">
                <span class="font-bold text-[17px]">E-Point</span>
            </a>
            <ul class="space-y-2 my-14">
                <li>
                    <a href="{{ route('admin/dashboard') }}" class="flex items-center space-x-2 text-white text-lg hover:text-[#e8e8e8] transition duration-200 ease-in-out">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-normal text-sm">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}" class="flex items-center space-x-2 text-white text-lg hover:text-[#e8e8e8] transition duration-200 ease-in-out">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-normal text-sm">Data Siswa</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-0.5 bg-white"></div>
        <div class="flex-1 p-10 bg-white">
            @yield('content')
        </div>
    </div>
</body>
</html>
