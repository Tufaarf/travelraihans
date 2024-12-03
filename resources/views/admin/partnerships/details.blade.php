<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Partnership') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($partnership->avatar) }}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Product Interest</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{$partnership->name }}</h3>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Name</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $partnership->name }}</h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Email</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $partnership->email }}</h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Phone</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $partnership->phonenumb }}</h3>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Addres</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $partnership->address }}</h3>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <!-- Update the href to handle the phone number starting with 0 -->
                <a href="https://wa.me/62{{ ltrim($appointment->phone_number, '0') }}"
                   target="_blank"
                   class="text-center font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                    Follow Up Customer
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
