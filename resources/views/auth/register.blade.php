@extends('auth.layouts')

@section('content')

<div class="h-screen flex overflow-hidden">
    <div class="flex w-1/2 bg-slate-100 justify-around items-center relative mx-auto -mt-60 -ml-14">
        
        <div class="absolute inset-20 bg-[#4794CA] rounded-tr-[200px] transform -skew-y-40 origin-top-left rotate-12 h-full w-full">
        </div>
        <div class="flex z-10 justify-center items-center">
            <h1 class="text-6xl -mt-80 font-bold text-white text-center justify-center z-20">SILAHKAN DAFTAR,</h1>
        </div>
        
    </div>
    <div class="flex w-1/2 justify-center items-center bg-slate-100">
      <form class="bg-slate-100 mx-10" action="{{ route('store') }}" method="POST">
        @csrf
        <h1 class="text-slate-700 font-bold text-4xl mb-9 text-center">Daftar</h1>
        <div class="flex items-center border-2 py-4 px-3 rounded-md border-slate-300 mb-4 w-[380px]">
          <input class="pl-2 outline-none border-none bg-slate-100" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required />
          @if ($errors->first('name'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('name')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-4 px-3 rounded-md mb-4">
          <input class="pl-2 outline-none border-none bg-slate-100" type="email" name="email" id="email" placeholder="Email Address" />
          @if ($errors->first('email'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('email')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-4 px-3 rounded-md mb-4">
          <input class="pl-2 outline-none border-none bg-slate-100" type="password" name="password" id="password" placeholder="Password" />
          @if ($errors->first('password'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('password')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-4 px-3 rounded-md mb-14">
          <input class="pl-2 outline-none border-none bg-slate-100" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
        </div>
        <input type="submit" value="Register" class="block mx-auto bg-[#4794CA] mt-4 py-2 rounded-lg text-white font-semibold w-[180px] mb-2" required></input>
        <span class="text-sm text-slate-700 flex justify-center items-center cursor-pointer">Sudah punya akun?  <a href="{{ route('login') }}" class="text-blue-600">Login disini</a></span>
      </form>
    </div>
</div>

@endsection