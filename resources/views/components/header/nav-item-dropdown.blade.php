@props(['href','title','activeRoute'])

<li class="relative group">
    <a href="{{$href}}"
        class=" {{ request()->routeIs($activeRoute) ? 'nav__item--active' : 'text-fontLight' }}  nav__item js-nav-item">
        {{$title}}
    </a>

    {{$slot}}
</li>