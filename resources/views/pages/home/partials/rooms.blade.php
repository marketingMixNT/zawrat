<section class="section bg-bgSecondary border-y border-y-gray-300">
    <div class="wrapper max-w-[1600px] space-y-16 py-16">

        <x-heading preheading="Zapraszamy" heading="Poznaj nasze pokoje" center />

       
        <div class="flex flex-col gap-6">
            <x-arrow-link href="#" title="zobacz wszystkie" aria="zobacz wszystkie" class="self-end md:pr-9" />
            <div class="flex justify-between items-center gap-3 relative">
            <button class="room-prev hidden md:block">
                <x-lucide-arrow-left class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:-translate-x-1" />

            </button>
            
            <div class="swiper rooms-carousel">
                <div class="swiper-wrapper ">
                    <x-room-card/>
                    <x-room-card/>
                    <x-room-card/>
                    <x-room-card/>
                    <x-room-card/>
                    <x-room-card/>
                  
                </div>
            </div>

            <button class="room-next hidden md:block">
                <x-lucide-arrow-right class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:translate-x-1" />

            </button>
        </div>
        </div>

    </div>
</section>