@props(['preheading','heading','image','alt','reverse'=>false])

<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-6">

    {{-- TEXT --}}
    <div class="px-6 md:px-12 2xl:py-0 2xl:w-[85%] h-full flex flex-col gap-10 justify-center items-start 2xl:pl-20 {{$reverse ? "
        lg:order-1" : "" }}">
        {{-- heading --}}
        <x-heading preheading="{{$preheading}}" heading="{{$heading}}" />
        {{-- text --}}
        {{$slot}}

    </div>

    {{-- IMAGE --}}
    <div class="min-h-[400px]">
        <div class=" h-full w-full">
            <img src="{{$image}}" alt="{{$alt}}" class="w-full h-full object-cover" loading="lazy">
        </div>

    </div>
</div>