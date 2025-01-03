@props(['preheading','heading','image','alt','reverse'=>false])

<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-6">

    {{-- TEXT --}}
    <div class="px-6 md:px-12 2xl:py-0 2xl:w-[85%] h-full flex flex-col gap-10 justify-center items-start 2xl:pl-20 {{$reverse ? "
        lg:order-1" : "" }}">
        {{-- heading --}}
        <div>
            <p class="uppercase leading-relaxed tracking-[.2em] font-semibold text-sm pb-1 text-black">
                {{$preheading}}
            </p>

            <div class="space-y-6">
                <h2 class="text-fontDark  text-5xl font-light font-heading">{{$heading}}</h2>
                <div class=" border-b border-primary-400 w-[10%] h-[1px] leading-relaxed tracking-widest"></div>
            </div>
        </div>
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