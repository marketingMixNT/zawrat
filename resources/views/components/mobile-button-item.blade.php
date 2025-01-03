<a href="{{ $href }}" {{$attributes}}
class="border-r border-t border-fontLight last-of-type:border-r-0  bg-secondary-400 first-of-type:bg-primary-400 first-of-type:hover:bg-primary-800
 hover:bg-secondary-800 transition-colors duration-500  ">
<div class="flex flex-col justify-center items-center py-2 gap-2">
    
    {{$slot}}
</div>
</a>