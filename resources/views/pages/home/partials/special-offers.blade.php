<section class="section bg-bgSecondary border-y border-y-gray-300">
    <div class="wrapper max-w-[1600px] space-y-16 py-16">

        <x-heading preheading="Zapraszamy" heading="na naszą nową lokalkę" center />

       
        <div class="flex flex-col gap-6">
            <x-arrow-link href="#" title="zobacz wszystkie" aria="zobacz wszystkie" class="self-end md:pr-9" />
            <div class="flex justify-between items-center gap-3 relative">
            <button class="offer-prev hidden md:block">
                <x-lucide-arrow-left class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:-translate-x-1" />

            </button>
            
            <div class="swiper special-offers-carousel">
                <div class="swiper-wrapper ">
                    <x-special-offer-card/>
                    <x-special-offer-card/>
                    <x-special-offer-card/>
                    <x-special-offer-card/>
                    <x-special-offer-card/>
                </div>
            </div>

            <button class="offer-next hidden md:block">
                <x-lucide-arrow-right class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:translate-x-1" />

            </button>
        </div>
        </div>

    </div>
</section>