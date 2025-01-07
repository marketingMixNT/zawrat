<footer class="bg-secondary-800 text-fontLight p-4">

    <div class="border border-gray-300">
        <div class="max-w-screen-2xl mx-auto  py-12 px-6 space-y-16">

            {{-- TOP --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4  gap-6 lg:gap-0">

                {{-- COL 1 --}}
                <div class="flex flex-col items-center lg:items-start  gap-6 lg:gap-10">
                    <a href="/" >
                        <img src="{{asset('assets/logo/logo--light.webp')}}" alt="logo apartamentów Polana Sobiczkowa "
                            class="w-40 logo--light">
                    </a>
                    <ul class="space-y-4 text-secondary-300 lg:ml-4">
                        <li class="text-center lg:text-left">
                            <a href="#" target="_blank" rel="noreferrer nofollow" class="link-hover"> Kaniówka 28B
                                <br />
                                34-405 Białka Tatrzańska PL </a>
                        </li>
                        <li class="flex justify-center lg:justify-start">
                            <a href="tel:+48 185 332 222" target="_blank" rel="noreferrer nofollow" class="link-hover">
                                +48
                                185
                                332 222</a>
                        </li>
                        <li class="flex justify-center items-center lg:justify-start">
                            <a href="mailto:recepcja@hotelzawrat.pl" target="_blank" rel="noreferrer nofollow"
                                class="link-hover "> recepcja@hotelzawrat.pl</a>
                        </li>
                    </ul>

                    <x-arrow-link href="#" title="Poznaj oferty" aria="Poznaj oferty" class="ml-4" color="text-secondary-300" />

                </div>

                {{-- COL 2 --}}
                <div class="flex flex-col items-center lg:items-start  gap-6 lg:gap-10">
                    <h2 class="text-[26px] font-heading">Wazne informacje</h2>
                    <nav>
                        <ul class="space-y-4 text-secondary-300">
                            <li>
                                <a href="#" class="link-hover">Hotel</a>
                            </li>
                            <li>
                                <a href="#" class="link-hover">Hotel</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                {{-- COL 3 --}}
                <div class="flex flex-col items-center lg:items-start  gap-6 lg:gap-10">
                    <h2 class="text-[26px] font-heading">Zobacz także</h2>
                    <nav>
                        <ul class="space-y-4 text-secondary-300">
                            <li>
                                <a href="#" class="link-hover">Hotel</a>
                            </li>
                            <li>
                                <a href="#" class="link-hover">Hotel</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                {{-- COL 4 --}}
                <div class="flex flex-col items-center lg:items-start  gap-6 lg:gap-10">
                    <h2 class="text-[26px] font-heading">Social Media</h2>
                    <div class="flex justify-center sm:justify-start items-center gap-3">

                        @php
                        $socials = collect([
                        (object)['name' => 'facebook', 'link' =>
                        'https://www.facebook.com/Polana-Sobiczkowa-Zawrat-Hotel-101041332792101/'],
                        (object)['name' => 'instagram', 'link' =>
                        'https://www.instagram.com/Polana-Sobiczkowa-Zawrat-Hotel/'],
                        (object)['name' => 'twitter', 'link' => 'https://twitter.com/Polana-Sobiczkowa-Zawrat-Hotel'],
                        ]);
                        @endphp


                        @foreach ($socials as $social )
                        <x-socials :social="$social" />
                        @endforeach

                    </div>
                </div>



            </div>

            {{-- BOTTOM --}}
            <div class="flex flex-col lg:flex-row justify-between items-center gap-6">
                <nav>
                    <ul class="lg:ml-4 flex flex-col lg:flex-row items-center gap-6">
                        <li><a href="#" class="link-hover">Polityka prywatności</a></li>
                        <li><a href="#" class="link-hover">Regulamin</a></li>
                    </ul>
                </nav>

                <a href="https://marketingmix.pl" target="_blank" class="flex justify-center items-center"
                aria-label="Agencja MarketingMix"><img src="{{ asset('/assets/marketingmix-logo--light.svg') }}"
                    class="w-40 hover:scale-105 duration-300 pb-6 lg:pb-0" alt="logo wykonawcy - agencja MarketingMix"
                    width="128" height="20" /></a>
            </div>

        </div>
    </div>

</footer>