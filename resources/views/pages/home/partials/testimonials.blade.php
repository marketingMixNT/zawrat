<section class="section bg-bgSecondary border-y border-y-gray-300">
    <div class="wrapper max-w-[1600px] space-y-16 py-16">

        <x-heading preheading="Zapraszamy" heading="Co mówią o nas goście" center />

       
        <div class="flex flex-col  gap-6">
            <div class="flex justify-between items-center gap-3 relative">
            <button class="testimonial-prev hidden md:block">
                <x-lucide-arrow-left class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:-translate-x-1" />

            </button>
            
            <div class="swiper testimonials-carousel">
                <div class="swiper-wrapper ">
                    <x-testimonial-card/>
                    <x-testimonial-card/>
                   
                    
                  
                </div>
                
            </div>

            <button class="testimonial-next hidden md:block">
                <x-lucide-arrow-right class="size-6 text-secondary-400 hover:text-primary-400 duration-300 hover:translate-x-1" />

            </button>
        </div>
        <div class="testimonial-pagination flex justify-center items-center mt-8"></div>
        </div>
        

    </div>
</section>