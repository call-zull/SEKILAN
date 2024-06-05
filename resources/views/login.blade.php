<x-head></x-head>
 
    <div>
        {{-- logo --}}
        <div class="w-full flex justify-center mt-20">
            <img src="{{ asset('logo/mobil_sekilan.png') }}" alt="logo-sekilan" class="w-44">
        </div>
        {{-- nama --}}
        <div class="w-full flex justify-center mt-1">
            <h1 class="font-poppins text-intiHijau font-semibold text-2xl">SEKILAN</h1>
        </div>

        {{-- form --}}
        {{-- judul form --}}
        <div class="mt-10 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Email</h2>
        </div>
        {{-- body form --}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="mail" class=""></i>
            <input type="email" name="email" id="email" placeholder="masukkan email" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>
        {{-- judul form --}}
        <div class="mt-5 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Password</h2>
        </div>
        {{-- body form --}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="lock" class=""></i>
            <input type="password" name="password" id="password" placeholder="masukkan password" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>
        <div class="mt-2 pl-5">
            <a href="forgot-pw" class="font-inter font-medium text-sm text-intiHijau">Lupa Password?</a>
        </div>

        {{-- button --}}
        <div class="mt-6 flex flex-col px-4 justify-center items-center">
            <button class="font-inter font-bold text-xl border-black border text-white bg-hijauPrimary px-32 py-3 rounded-2xl">
                LOGIN
            </button>
            <p class="font-inter font-medium text-sm mt-3">Belum Punya Akun? <a href="register" class="text-intiHijau">Daftar</a></p>
        </div>
    </div>

<x-foot></x-foot>

