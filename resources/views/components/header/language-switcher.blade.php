@props(['class' => ''])

<ul id="languageSwitcher"
    class="justify-center items-center gap-5 list-none text-sm flex border border-primary-500 px-[7px] py-[5px] {{$class}}">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li>
        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            class="relative uppercase hover:text-accent-400 duration-500  text-sm text-fontLight tracking-wider   {{ App::getLocale() === $localeCode ? ' before:absolute before:bottom-0 before:left-0 before:w-[70%] before:h-[1px] before:bg-primary-200 active font-semibold ' : '' }}">
            {{ strtoupper($localeCode) }}
        </a>
    </li>
    @endforeach
</ul>


