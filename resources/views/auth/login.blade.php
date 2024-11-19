@extends('auth.layouts')

@section('content')

<div class="h-screen flex overflow-hidden">
    <div class="flex w-1/2 bg-slate-100 justify-around items-center relative mx-auto -mt-60 -ml-14">
        
        <div class="absolute inset-20 bg-[#4794CA] rounded-tr-[200px] transform -skew-y-40 origin-top-left rotate-12 h-full w-full">
        </div>
        <div class="flex z-10 justify-center items-center">
            <img src="" alt="">
            
            <h1 class="text-8xl -mt-80 font-bold text-white text-center justify-center z-20">WELCOME,</h1>
        </div>
        
    </div>
    <div class="flex w-1/2 justify-center items-center bg-slate-100">
      <form class="bg-slate-100 mx-10" action="{{ route('authenticate') }}" method="POST">
        @csrf
        <h1 class="text-slate-700 font-bold text-5xl mb-20 text-center">Login</h1>
        <div class="flex items-center border-2 py-4 px-3 text-xl rounded-md border-slate-300 mb-9 w-[480px]">
          <input class="pl-2 outline-none border-none bg-slate-100 w-full" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email Address" required />
        </div>
        <div class="flex items-center border-2 border-slate-300 py-4 px-3 text-xl rounded-md mb-20">
          <input class="pl-2 outline-none border-none bg-slate-100 w-full" type="password" name="password" id="password" placeholder="Password" />
        </div>
        <input type="submit" value="Login" class="block mx-auto bg-[#4794CA] mt-4 py-2 text-xl  text-white font-semibold w-[180px] rounded-2xl  mb-" required></input>
        <span class="text-sm text-slate-700 flex justify-center items-center cursor-pointer">Belum punya akun?  <a href="{{ route('register') }}" class="text-blue-600">Daftar disini</a></span>
      </form>
    </div>
</div>

@endsection