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