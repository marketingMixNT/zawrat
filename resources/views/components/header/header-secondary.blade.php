<header id="headerSecondary"
    class="fixed left-0 right-0 top-0 hidden xl:flex justify-between items-center px-5  py-3 bg-primary-100 duration-700 -translate-y-[100%] z-50 border-b border-secondary-00 bg-secondary-100">

    {{-- logo --}}
    <a href="{{route('home')}}" aria-label="strona główna"
        class="absolute xl:relative left-1/2 xl:left-auto top-1/2 xl:top-auto -translate-x-1/2 xl:-translate-x-0 -translate-y-1/2 xl:-translate-y-0">
        <img src="{{asset('assets/logo/logo--dark.webp')}}" alt="logo apartamentów Polana Sobiczkowa" class="w-28">
    </a>

    <div class="hidden xl:flex justify-center items-center gap-16">
        {{-- links --}}
        <x-header.nav-links />

        <x-link-btn href="">Zarezerwuj</x-link-btn>
    </div>






</header>