@props(["href","title",'color'=>'','aria'=>false,'class'=>''])

<div class="flex justify-start items-center gap-1 group {{$class}}">

    <a href="{{$href}}" {{$attributes}} class=" {{$color}} link-hover font-semibold tracking-wide text-secondary-400" aria-label={{$aria}}>{{$title}}</a>
    <x-lucide-arrow-right class=" {{$color}} w-3 group-hover:translate-x-3 duration-300 text-primary-400" />
</div>