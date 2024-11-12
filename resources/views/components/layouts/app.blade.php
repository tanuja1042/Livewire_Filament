<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Learning Management System (LMS)</title>
        <link rel="stylesheet" href="{{ asset('front/style.css') }}?v={{ time() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a wire:navigate href="/">
                <img src="{{ asset('front/logo1.jpg') }}" alt="Logo" class="logo-image"/></a>
            </div>
            <ul class="header__nav">
                <li class="header__nav-item"><a wire:navigate href="/" class="header__nav-link">Home</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('pages',1 )}}" class="header__nav-link">About</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('services') }}" class="header__nav-link">Services</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('contact') }}" class="header__nav-link">Contact</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('courses') }}" class="header__nav-link">Courses</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('category') }}" class="header__nav-link">Categories</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('product') }}" class="header__nav-link">Products</a></li>
                <li class="header__nav-item"><a wire:navigate href="{{ route('cart') }}" class="header__nav-link">Cart</a></li>
                
                <div class="pt-3 md:pt-0">
                    <a wire:navigate class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/login">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                        </svg>
                        Log in
                    </a>
                    </div>

                    {{-- <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                    <button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                        User Name
                    <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                    </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                    <a  wire:navigate class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        My Orders
                    </a>

                    <a wire:navigate class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        My Account
                    </a>
                    <a wire:navigate class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        Logout
                    </a>
                    </div>
                </div> --}}
            </ul>
        </div>
    </header>
    <body>
        {{ $slot }}
    </body>
    <footer class="footer">
        <div class="footer-container">
            <!-- Address Section -->
            <div class="footer-address">
                <h3>Contact Us</h3>
                <p>1234 Elm Street, Suite 567</p>
                <p>Cityville, ST 12345</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@example.com</p>
            </div>

            <!-- Navigation Links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><a wire:navigate href="/services">Services</a></li>
                    <li><a wire:navigate href="/pages/1">About Us</a></li>
                    <li><a wire:navigate href="/course">Courses</a></li>
                    <li><a wire:navigate href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><a wire:navigate href="/services">Services</a></li>
                    <li><a wire:navigate href="/pages/1">About Us</a></li>
                    <li><a wire:navigate href="/course">Courses</a></li>
                    <li><a wire:navigate href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><a wire:navigate href="/services">Services</a></li>
                    <li><a wire:navigate href="/pages/1">About Us</a></li>
                    <li><a wire:navigate href="/course">Courses</a></li>
                    <li><a wire:navigate href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2024 Learning Management System. All Rights Reserved.</p>
        </div>
    </footer>


    @livewireScripts
</html>
