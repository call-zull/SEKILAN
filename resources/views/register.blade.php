<x-head></x-head>
 
    <div>
        {{-- logo --}}
        <div class="w-full flex justify-center mt-8">
            <img src="{{ asset('logo/mobil_sekilan.png') }}" alt="logo-sekilan" class="w-44">
        </div>
        {{-- nama project--}}
        <div class="w-full flex justify-center mt-1">
            <h1 class="font-poppins text-intiHijau font-semibold text-2xl">SEKILAN</h1>
        </div>

        {{-- form --}}
        {{-- username --}}
        <div class="mt-6 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Username</h2>
        </div>
        {{-- input username --}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="user" class=""></i>
            <input type="text" name="username" id="username" placeholder="masukkan username" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>

        {{-- email --}}
        <div class="mt-5 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Email</h2>
        </div>
        {{-- input email --}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="mail" class=""></i>
            <input type="email" name="email" id="email" placeholder="masukkan email" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>
        {{-- password--}}
        <div class="mt-5 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Password</h2>
        </div>
        {{-- input password --}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="lock" class=""></i>
            <input type="password" name="password" id="password" placeholder="masukkan password" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>

        {{-- confirm password --}}
        <div class="mt-5 px-4">
            <h2 class="font-poppins text-intiHijau font-bold text-xl">Confirm Password</h2>
        </div>
        {{-- input confirm--}}
        <div class="w-full px-4 flex flex-row items-center">
            <i data-feather="lock" class=""></i>
            <input type="password" name="confirm" id="confirm" placeholder="konfirmasi password" class="w-full placeholder:font-inter placeholder:font-light placeholder:text-sm focus:ring-0 focus:border-b-intiHijau border-x-0 border-t-0 outline-b-2 border-b-intiHijau">
        </div>

        {{-- button --}}
        <div class="mt-6 flex flex-col px-4 justify-center items-center">
            <button class="font-inter font-bold text-xl border-black border text-white bg-hijauPrimary px-24 py-3 rounded-2xl">
                REGISTER
            </button>
            <p class="font-inter font-medium text-sm mt-3">Sudah Punya Akun? <a href="login" class="text-intiHijau">Login</a></p>
        </div>
    </div>

<x-foot></x-foot>

