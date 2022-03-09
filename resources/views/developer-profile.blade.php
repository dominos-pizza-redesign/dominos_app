<x-app-layout>
    <x-slot:title>Developer Profile</x-slot:title>

    <x-slot:header>
        <x-header align="left" back_to="profile.index">Developer Profile</x-header>
    </x-slot:header>

    <audio src="{{ asset('storage/audio/developer-profile.wav') }}" autoplay class="hidden"></audio>

    <div class="flex gap-4 p-5">
        <img src="{{ asset('storage/dev-profile.jpg') }}" alt="Developer Profile"
            class="w-36 rounded-full object-cover">
        <div class="h-full w-full border-gray-800">
            <h1 class="text-lg font-semibold">Abdian Rizky Ramadan</h1>
            <p class="text-sm">
                Abdian is a Full-Stack Developer with 2+ years of experience based on PHP & Laravel
                Framework. Abdian used to work in several companies during high school years, for example PT Igoid
                Bisnis Global in Depok City, West Java.
            </p>
        </div>
    </div>

    <div class="overflow-hidden border-y border-gray-800 py-4 uppercase">
        <div class="animate-[slide_10s_linear_infinite] flex items-center justify-center gap-8">
            @for ($i = 0; $i < 90; $i++)
                @if ($i % 2 == 1)
                    <span>·</span>
                @else
                    <span>experience</span>
                @endif
            @endfor
        </div>
    </div>

    <div class="flex flex-col items-center gap-10 p-10 text-sm">
        <div class="flex gap-5">
            <img src="{{ asset('storage/drml.png') }}" alt="Dreamhouselab" class="w-10">
            <div>
                <h1 class="font-semibold">Back-End Developer</h1>
                <p>DreamhouseLab · Part-time · 9 mos</p>
            </div>
        </div>
        <div class="flex gap-5">
            <img src="{{ asset('storage/esdm.png') }}" alt="Dreamhouselab" class="w-10">
            <div>
                <h1 class="font-semibold">Front-End Developer</h1>
                <p>ESDM · Part-time · 1 mos</p>
            </div>
        </div>
        <div class="flex gap-5">
            <img src="{{ asset('storage/igoid.webp') }}" alt="Dreamhouselab" class="w-10">
            <div>
                <h1 class="font-semibold">Junior Back-End Developer</h1>
                <p>PT Igoid Bisnis Global · Internship · 3 mos</p>
            </div>
        </div>
    </div>

    <div class="overflow-hidden border-y border-gray-800 py-4 uppercase">
        <div class="animate-[slide_10s_linear_infinite] flex items-center justify-center gap-8">
            @for ($i = 0; $i < 90; $i++)
                @if ($i % 2 == 1)
                    <span>·</span>
                @else
                    <span>skills</span>
                @endif
            @endfor
        </div>
    </div>

    <div class="grid w-full auto-cols-max grid-flow-col-dense grid-rows-2 gap-4 p-8">
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            Laravel
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            ReactJS
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            VueJS
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            PHP
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            Javascript
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            Tailwind CSS
        </div>
        <div class="flex w-max items-center justify-center rounded-full border border-gray-800 px-5 text-sm">
            Figma
        </div>
    </div>

</x-app-layout>
