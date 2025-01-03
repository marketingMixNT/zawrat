@props(['href','activeRoute'])

<li>

    <a href="{{$href}}"
        class="nav-item {{ request()->routeIs($activeRoute) ? 'nav__item--active' : '' }} nav__item link-hover group js-nav-item">
        {{$slot}}</a>
</li>