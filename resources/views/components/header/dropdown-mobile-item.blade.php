@props(['href','activeRoute'])

<li class="mt-3 ml-8"><a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'nav__item--active' : 'text-fontLight' }}  hover:text-primary-200 duration-500 font-light">{{$slot}}</a>
</li>