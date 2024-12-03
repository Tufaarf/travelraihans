@extends('front.layouts.app')
@section('content')
<div id="header" class="bg-[#F6F7FA] relative h-[700px] -mb-[488px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10  z-10">
        <x-navbar/>
    </div>
  </div>
  <div id="Contact" class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-[50px] relative z-10">
    <div class="flex flex-col mt-20 gap-[50px]">
      <div class="breadcrumb flex items-center gap-[30px]">
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Partnership</p>
      </div>
      <h1 class="font-extrabold text-4xl leading-[45px]">We Help You to Build Awesome Project</h1>
      <div class="flex flex-col gap-5">
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/global.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">Probolinggo, Jawa timur</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/call.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">(0888) 7086423</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/monitor-mobbile.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">raihanstravels.my.id</p>
        </div>
      </div>
    </div>
    <form action="{{route('front.partnership_store')}}" method="POST" class="flex flex-col p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full md:w-[700px] shrink-0">
        @csrf
        <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Complete Name</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/profile.svg" alt="icon">
            </div>
            <input type="text" name="name" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your complete name" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Email Address</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/sms.svg" alt="icon">
            </div>
            <input type="email" name="email" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your email address" required>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Phone Number</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/call-black.svg" alt="icon">
            </div>
            <input type="number" name="phonenumb" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your phone number" required>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Address</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <input type="text" name="address" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Your address" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Avatar</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <input type="file" name="avatar" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="How Many Person?" required>
          </div>
        </div>
      </div>
      <button type="submit" class="bg-cp-dark-blue p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book Appointment</button>
    </form>
  </div>
  <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20 relative z-10">
    <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="flex flex-col gap-[14px] items-center">
      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">SUCCESS CLIENTS</p>
      <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Customer<br>From Many Locations</h2>
    </div>
    <div class="main-carousel w-full">
      @forelse ($testimonials as $testimonial)
      <div class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
        <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
          <div class="flex flex-col gap-[30px]">
            <div class="h-9 overflow-hidden">
              <img src="{{Storage::url($testimonial->client->logo)}}" class="object-contain" alt="icon">
            </div>
            <div class="relative pt-[27px] pl-[30px]">
              <div class="absolute top-0 left-0">
                <img src="{{asset('assets/icons/quote.svg')}}" alt="icon">
              </div>
              <p class="font-semibold text-2xl leading-[46px] relative z-10">{{$testimonial->message}}</p>
            </div>
            <div class="flex items-center justify-between pl-[30px]">
              <div class="flex items-center gap-6">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{Storage::url($testimonial->client->avatar)}}" class="w-full h-full object-cover" alt="photo">
                </div>
                <div class="flex flex-col justify-center gap-1">
                  <p class="font-bold">{{$testimonial->client->name}}</p>
                  <p class="text-sm text-cp-light-grey">{{$testimonial->client->location}}</p>
                </div>
              </div>
              <div class="flex flex-nowrap">
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
          </div>
        </div>
        <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
          <img src="{{Storage::url($testimonial->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
        </div>
      </div>
      @empty
      <p>No newest data</p>
      @endforelse

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
@push('after-scripts')
<script src="js/contact-form.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="js/carousel.js"></script>
@endpush