<x-head></x-head>

{{-- navbar --}}
<nav class="w-full h-auto flex justify-between items-center">
    <div class="bg-white flex flex-col ml-4 items-center py-1">
        <img src="{{ asset('logo/mobil_sekilan.png') }}" alt="Icon-Sekilan" class="w-12">
        <h1 class="font-inter text-sm font-bold">SEKILAN</h1>
    </div>
    <div class="mr-4">
        <i data-feather="menu" class="text-intiHijau"></i>
    </div>
</nav>
{{-- carousel --}}
<div>
  <img src="{{ asset('img/Carousel.png') }}" alt="">
</div>
{{-- introduce --}}
<div class="mt-2 ml-4">
  <h2 class="font-poppins font-semibold text-black">Sekilas Tentang</h2>
  <h1 class="font-poppins text-intiHijau font-semibold text-2xl mt-1">SEKILAN</h1>
  <p class="px-2 font-kanit">“Sistem Kilat Ambulans” adalah sistem darurat yang memungkinkan ambulans dan mobil evakuasi untuk merespon keadaan darurat dengan cepat dan efisien. Yang melibatkan teknologi GPS dan sebagai bentuk support dengan pihak-pihak terkait seperti call center 112 untuk memastikan respon yang cepat dan efektif dalam situasi darurat medis.</p>
</div>
{{-- Fitur --}}
<div class="mt-3 flex flex-col items-center">
  <h2 class="font-poppins font-semibold text-2xl">Fitur</h2>
  <div class="flex justify-center gap-3 w-full mt-2">
    <a href="#" class="p-2 bg-hijauPrimary rounded-lg">
      <p class="font-inter font-normal text-white">Tambah Ambulance</p>
    </a>
    <a href="#" class="p-2 bg-hijauPrimary rounded-lg">
      <p class="font-inter font-normal text-white">Perlu Ambulance</p>
    </a>
  </div>
</div>
{{-- Layanan Kami --}}
<div class="bg-hijauPrimary mt-4 flex flex-col items-center">
  <h2 class="text-white font-poppins text-2xl">Layanan Kami</h2>
</div>






<x-foot></x-foot>
