@extends('front.layouts.app')
@section('content')
<div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
       <x-navbar/>
        <div class="flex flex-col gap-[50px] items-center py-20">
          <div class="breadcrumb flex items-center justify-center gap-[30px]">
            <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
            <span class="text-cp-light-grey">/</span>
            <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
          </div>
          <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World Better</h2>
        </div>
    </div>
  </div>
  <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
    @forelse ($abouts as $about)
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="{{Storage::url($about->thumbnail)}}" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR {{$about->type}}</p>
        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-4xl leading-[45px]">
            {{$about->name}}
          </h2>
          <div class="flex flex-col gap-5">
            @forelse ($about->keypoints as $keypoint)
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">{{$keypoint->keypoint}}</p>
            </div>
            @empty
           
            @endforelse
          </div>
        </div>
      </div>
    </div>

    @empty
    
    @endforelse
  </div>
  <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/kai.png')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
          <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/garuda.jpg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
          <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/citilink.png')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
          <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/etihad.jpg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
          <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/airasia.jpg')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
          <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
              <img src="{{asset('assets/logo/emirates.png')}}" class="object-contain w-full h-full" alt="logo">
            </div>
          </div>
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
