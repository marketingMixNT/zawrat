@props(['href','class'=>'',])

<a href="{{$href}}" class="border border-secondary-400 px-8 py-3 text-sm  bg-primary-400 text-fontLight hover:bg-primary-800  duration-500 font-semibold {{$class}}">{{$slot}}</a>