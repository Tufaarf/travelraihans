
@extends('front.layouts.app')
@section('content')
<div id="header" class="bg-[#F6F7FA] relative h-[600px] -mb-[388px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
       <x-navbar/>
    </div>
  </div>
  <div id="Teams" class="w-full px-[10px] relative z-10">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[50px] items-center">
      <div class="flex flex-col gap-[50px] items-center">
        <div class="breadcrumb flex items-center justify-center gap-[30px]">
          <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
          <span class="text-cp-light-grey">/</span>
          <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product</p>
        </div>
        <h2 class="font-bold text-4xl leading-[45px] text-center">Choose Your <br> Favourite Package Here</h2>
      </div>
      <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
        @forelse ($products as $product)

        <div class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
          <div class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
            <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
              <img src="{{Storage::url($product->thumbnail)}}" class="object-cover w-full h-full object-center" alt="photo">
            </div>
          </div>
          <div class="flex flex-col gap-1 text-center">
            <p class="font-bold text-xl leading-[30px]">{{$product->name}}</p>
            <p class="text-cp-dark-blue">{{$product->tagline}}</p>
            <p class="text-cp-light-grey">{{$product->about}}</p>
            <p class="text-cp-dark-blue">Rp {{number_format($product->price, 0, ',', '.')}}</p>
          </div>
          <div class="flex items-center justify-center gap-[10px]">
            <a href="{{route('front.appointment')}}" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book now</a>
          </div>
        </div>
        @empty
        <p>No newest data</p>
        @endforelse
      </div>
    </div>
  </div>

  <footer class="bg-cp-black w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
      <div class="flex flex-col gap-10">
        <div class="flex items-center gap-3">
          <div class="flex shrink-0 h-[43px] overflow-hidden">
              <img src="assets/logo/logo1.png" class="object-contain w-full h-full" alt="logo">
          </div>
          <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">RAIHANTRAVELS</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Best for your vacation</p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap gap-[50px]">
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">Products</p>
          <p href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Tour Religi</p>
          <p href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Tour Singapore</p>
          <p href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Tour Thailand</p>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">About</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Vision</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Mission</p>
        </div>
      </div>
    </div>
    <div class="absolute -bottom-[135px] w-full">
      <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">RAIHANTRAVELS</p>
    </div>
  </footer>

  @endsection

