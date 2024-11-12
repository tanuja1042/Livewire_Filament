<main class="container">
    <div class="home-page">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Welcome to Learning Management System</h1>
            <p>Your ultimate platform for seamless online learning. Join us today and elevate your knowledge!</p>
            <a wire:navigate href="/contact" class="cta-button">Get Started</a>
        </section>

        <!-- About Section -->
        <section class="about">
            <h2>About Us</h2>
            <p>Learning Management System is dedicated to providing accessible, high-quality educational resources and tools. Our platform empowers learners and educators alike, making learning engaging, efficient, and effective.</p>
        </section>

        <!-- Brand Section -->
        <section class="py-20">
            <div class="max-w-xl mx-auto">
                <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200"> Browse Popular<span class="text-blue-500"> Brands
                    </span> </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                    <div class="flex-1 h-2 bg-blue-200">
                    </div>
                    <div class="flex-1 h-2 bg-blue-400">
                    </div>
                    <div class="flex-1 h-2 bg-blue-600">
                    </div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur
                    numquam, odio quod nobis ipsum ex cupiditate?
                </p>
                </div>
            </div>
            <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

                @foreach($brands as $brand)
                <div class="bg-white rounded-lg shadow-md dark:bg-gray-800" wire:key = "{{ $brand->id }}">
                    <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
                    <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" class="object-cover w-full h-64 rounded-t-lg">
                    </a>
                    <div class="p-5 text-center">
                    <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                        {{ $brand->name }}
                    </a>
                    </div>
                </div>
                @endforeach
                

                </div>
            </div>
        </section>

        <!-- Category Section -->
        <div class="bg-orange-200 py-20">
            <div class="max-w-xl mx-auto">
                <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories
                    </span> </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                    <div class="flex-1 h-2 bg-blue-200">
                    </div>
                    <div class="flex-1 h-2 bg-blue-400">
                    </div>
                    <div class="flex-1 h-2 bg-blue-600">
                    </div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur
                    numquam, odio quod nobis ipsum ex cupiditate?
                </p>
                </div>
            </div>

            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

                @foreach($categories as $category )
                <a wire:navigate wire:key ="{{ $category->id }}" class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/products?selected_categories[0]={{ $category->id }}">
                    <div class="p-4 md:p-5">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                        <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                        <div class="ms-3">
                            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            {{ $category->name }}
                            </h3>
                        </div>
                        </div>
                        <div class="ps-3">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        </div>
                    </div>
                    </div>
                </a>
                @endforeach
                 </div>
            </div>
            </div>

        <!-- Services Section -->
        <section class="services">
            <h2>Our Services</h2>
            <div class="services-grid">
                @foreach($services as $service)
                    <div class="card">
                        <h2>{{ $service->title }}</h2>
                        <p>{!! $service->description !!}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>What Our Learners Say</h2>
            <div class="testimonial-item">
                <p>"Learning Management System helped me achieve my career goals with ease and flexibility."</p>
                <p>- Alex J., Student</p>
            </div>
            <div class="testimonial-item">
                <p>"The platform is easy to use, and the courses are top-notch. Highly recommended!"</p>
                <p>- Jamie L., Professional</p>
            </div>
            <div class="testimonial-item">
                <p>"An incredible resource for anyone looking to learn and grow. I loved the interactive lessons!"</p>
                <p>- Taylor M., Teacher</p>
            </div>
        </section>

        <!-- Call-to-Action Section -->
        <section class="cta">
            <h2>Ready to Start Your Learning Journey?</h2>
            <p>Join Learning Management System today and gain the skills you need to succeed!</p>
            <a wire:navigate href="/contact" class="cta-button">Contact Us</a>
        </section>
    </div>

    </main>