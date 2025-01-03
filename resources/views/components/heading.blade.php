@props(['center'=>false,'preheading','heading',])   

<div class="{{$center ? "text-center" : ""}}">
    <p class="uppercase leading-relaxed tracking-[.2em] font-semibold text-sm pb-1 text-[#777777]">
        {{$preheading}}
    </p>

    <div class="space-y-6">
        <h2 class="text-[#595959]  text-5xl font-light font-heading">{{$heading}}</h2>
    </div>
</div>