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
    @livewire('navbar')
            
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</html>
