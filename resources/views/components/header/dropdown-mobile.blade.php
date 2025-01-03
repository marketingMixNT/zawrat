@props(['title'])
<li class="relative group">
    <button id="mobileDropdown2"
        class="flex justify-center items-center gap-2 text-fontLight nav__item group">
        <x-iconpark-down class="w-6 absolute text-white -left-[30px] group-hover:text-secondary-400 duration-500" />{{$title}}
    </button>
    <ul id="mobileDropdownUl2" class="flex flex-col gap-3 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
        {{$slot}}
    </ul>
</li>