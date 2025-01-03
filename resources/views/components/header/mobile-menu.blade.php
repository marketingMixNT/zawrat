<div id="mobileMenu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-1/2  flex flex-col justify-between px-7 py-5  bg-secondary-800  opacity-0 duration-300 ease-out z-50 translate-x-[100%]"
    style="z-index: 10000000000">

    <div class="flex flex-col gap-16">

        {{-- CLOSE BTN --}}
        <div class="flex justify-end">
            <button id="closeMenu" class="border border-white p-2 rounded-full cursor-pointer group"
                aria-label="Zamknij menu">
                <img src="{{asset('assets/icons/close.svg')}}" alt=""
                    class="size-10 group-hover:rotate-90 duration-300">
            </button>
        </div>

        {{-- NAV ITEMS --}}
        <nav>
            <ul class="flex flex-col justify-start items-start gap-5 pl-6">
                <x-header.nav-item href="" activeRoute="about">O nas</x-header.nav-item>

                {{-- dropdown --}}
                <x-header.dropdown-mobile title="Apartamenty">
                    <x-header.dropdown-mobile-item href="" activeRoute="room.first">Apartament z 1 sypialnią
                    </x-header.dropdown-mobile-item>
                    <x-header.dropdown-mobile-item href="" activeRoute="room.second">Apartament z widokiem na góry
                    </x-header.dropdown-mobile-item>
                </x-header.dropdown-mobile>

                <x-header.nav-item href="" activeRoute='location'>Lokalizacja</x-header.nav-item>
                <x-header.nav-item href="" activeRoute='gallery'>Galeria</x-header.nav-item>
                <x-header.nav-item href="" activeRoute='contact'>Kontakt</x-header.nav-item>

            </ul>
        </nav>
    </div>
    {{-- LANGUAGE SWITCHER --}}
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        <x-header.language-switcher class="self-end" />
    </div>

</div>