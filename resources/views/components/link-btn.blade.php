@props(['href','class'=>'','secondary'=>false])

<a href="{{$href}}" class="border border-secondary-400 px-8 py-3 text-sm {{$secondary ? "bg-secondary-400 hover:bg-secondary-800" : "bg-primary-400 hover:bg-primary-800"}}   text-fontLight   duration-500 font-semibold {{$class}}">{{$slot}}</a>