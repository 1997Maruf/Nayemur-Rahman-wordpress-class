<div class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 mb-14">
            <div>
                <h2 class="text-3xl sm:text-4xl text-[#171100] font-bold leading-tight">Our popular courses</h2>
                <p class="mt-4 text-[#5F5B53] text-base sm:text-lg leading-relaxed max-w-md">
                    Build new skills with new trendy courses and shine for the next future career.
                </p>
            </div>
            <div>
                <!-- SVG Navigation Arrows -->
                <svg xmlns="http://www.w3.org/2000/svg" width="98" height="40" viewBox="0 0 98 40" fill="none">
                    <circle cx="78" cy="20" r="20" fill="#FFB900" />
                    <path d="M75 14L81 20L75 26" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#FFB900" />
                    <path d="M23 14L17 20L23 26" stroke="#FFB900" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img class="w-full h-56 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/blog-img1.png" alt="Course Image">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-lg font-semibold text-[#171100]">Basic web design</h3>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/img/Rating.png" alt="Rating">
                    </div>
                    <p class="text-sm text-[#5F5B53] mb-4">Get the best course, gain knowledge and shine for your future career.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-semibold text-[#171100]">$120.75</p>
                        <button class="bg-[#171100] hover:bg-[#FFB900] text-white text-sm font-semibold py-2 px-6 rounded-full">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Duplicate the same card for second and third course -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img class="w-full h-56 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/blog-img1.png" alt="Course Image">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-lg font-semibold text-[#171100]">Basic web design</h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/Rating.png" alt="Rating">
                    </div>
                    <p class="text-sm text-[#5F5B53] mb-4">Get the best course, gain knowledge and shine for your future career.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-semibold text-[#171100]">$120.75</p>
                        <button class="bg-[#171100] hover:bg-[#FFB900] text-white text-sm font-semibold py-2 px-6 rounded-full">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img class="w-full h-56 object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/blog-img1.png" alt="Course Image">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-lg font-semibold text-[#171100]">Basic web design</h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/Rating.png" alt="Rating">
                    </div>
                    <p class="text-sm text-[#5F5B53] mb-4">Get the best course, gain knowledge and shine for your future career.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-semibold text-[#171100]">$120.75</p>
                        <button class="bg-[#171100] hover:bg-[#FFB900] text-white text-sm font-semibold py-2 px-6 rounded-full">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>