<x-layouts.app title="title" description="description">

    @include('pages.home.partials.hero')


    <section class="section">
        <div class="wrapper max-w-[1700px] space-y-32 py-16">



            <x-text-image-block preheading="Zapraszamy" heading="na naszą nową lokalkę"
                image="{{asset('assets/hero.jpg')}}" alt="hero image">


                <p class="block__text">
                    Polana Sobiczkowa to miejsce, które powstało z pasji do gór oraz gościnności. Chcieliśmy
                    stworzyć przestrzeń, która łączy w sobie tradycyjny góralski klimat z nowoczesnymi
                    udogodnieniami. Nasz apartament zapewnia wygodę, przestronność oraz unikalny klimat, który
                    sprzyja zarówno relaksowi, jak i aktywnemu wypoczynkowi. Każdy detal został zaprojektowany z
                    myślą o naszych gościach, by poczuli się jak w domu, odpoczywając w otoczeniu pięknej
                    przyrody.
                    <br><br>
                    Nasz apartament to nie tylko komfortowe wnętrze, ale także idealna lokalizacja, zaledwie 3
                    km od Zakopanego. Jesteśmy doskonałą bazą wypadową do górskich wędrówek, narciarstwa czy
                    innych atrakcji Podhala. Wierzymy, że w Polana Sobiczkowa każdy znajdzie coś dla siebie,
                    niezależnie od tego, czy szuka spokoju w otoczeniu natury, czy aktywnego wypoczynku w
                    górach.
                </p>

                <x-arrow-link href="#" title="Więcej informacji"  aria="więcej informacji" />

            </x-text-image-block>

            <x-text-image-block preheading="Zapraszamy" heading="na naszą nową lokalkę" reverse
                image="{{asset('assets/hero.jpg')}}" alt="hero image">


                <p class="block__text">
                    Polana Sobiczkowa to miejsce, które powstało z pasji do gór oraz gościnności. Chcieliśmy
                    stworzyć przestrzeń, która łączy w sobie tradycyjny góralski klimat z nowoczesnymi
                    udogodnieniami. Nasz apartament zapewnia wygodę, przestronność oraz unikalny klimat, który
                    sprzyja zarówno relaksowi, jak i aktywnemu wypoczynkowi. Każdy detal został zaprojektowany z
                    myślą o naszych gościach, by poczuli się jak w domu, odpoczywając w otoczeniu pięknej
                    przyrody.
                    <br><br>
                    Nasz apartament to nie tylko komfortowe wnętrze, ale także idealna lokalizacja, zaledwie 3
                    km od Zakopanego. Jesteśmy doskonałą bazą wypadową do górskich wędrówek, narciarstwa czy
                    innych atrakcji Podhala. Wierzymy, że w Polana Sobiczkowa każdy znajdzie coś dla siebie,
                    niezależnie od tego, czy szuka spokoju w otoczeniu natury, czy aktywnego wypoczynku w
                    górach.
                </p>

            </x-text-image-block>

        </div>
    </section>



</x-layouts.app>