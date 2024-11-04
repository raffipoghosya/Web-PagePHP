<?php get_header(); ?>
<main>
<div class="main-container">
    <!--  base Section -->
    <section class="base">
        <h1>Welcome to Valan Group</h1>
        <p>Your trusted partner in land development and real estate solutions.</p><br>
        <a href="#services" class="cta-button">Explore Our Services</a>
    </section>



    <!--Portfolio-->
    <section id="portfolio" class="portfolio-section">
        <h2>Our Portfolio</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="https://www.oecd.org/adobe/dynamicmedia/deliver/dm-aid--a19fa010-e8c1-4990-b415-7efb4543fac5/sustainable-urban-development.jpg?quality=80&preferwebp=true" alt="Project 1">
                <h3>Project 1: Urban Development</h3>
                <p>Details about this project and its impact on the community.</p>
            </div>
            <div class="portfolio-item">
                <img src="https://www.oecd.org/adobe/dynamicmedia/deliver/dm-aid--a19fa010-e8c1-4990-b415-7efb4543fac5/sustainable-urban-development.jpg?quality=80&preferwebp=true" alt="Project 2">
                <h3>Project 2: Green City</h3>
                <p>A sustainable development focused on eco-friendly practices.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <h2>What Our Clients Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial-item">
                <p>"Valan Group provided exceptional service and expertise. We couldn’t have asked for a better partner!"</p>
                <p><strong>- John Doe, Client</strong></p>
            </div>
            <div class="testimonial-item">
                <p>"Their team went above and beyond to ensure our project's success. Highly recommend!"</p>
                <p><strong>- Jane Smith, Investor</strong></p>
            </div>
        </div>
    </section>

    <!-- News and Events Section -->
    <section id="news" class="news-section">
        <h2>News and Events</h2>
        <div class="news-grid">
            <div class="news-item">
                <h3>Upcoming Real Estate Expo 2024</h3>
                <p class="news-date">October 15, 2024</p>
                <p>Join us at the annual Real Estate Expo to explore the latest trends in the industry.</p>
            </div>
            <div class="news-item">
                <h3>New Project Launch: Green City</h3>
                <p class="news-date">September 10, 2024</p>
                <p>We are excited to announce the launch of our new eco-friendly project, Green City.</p>
            </div>
        </div>
    </section>

    <!-- Call-to-Action -->
    <section id="cta" class="cta-section">
        <h2>Ready to Start Your Project?</h2>
        <p>Contact us today to learn how we can help bring your vision to life.</p>
        <a href="#contact" class="cta-button">Get in Touch</a>
    </section>

    <!--  Blog Section  -->
    <section id="blog" class="blog-section">
        <h2>Latest Insights</h2>
        <div class="blog-grid">
            <div class="blog-item">
                <h3>Real Estate Investment Tips</h3>
                <p>October 1, 2024</p>
                <p>Learn the best strategies for maximizing your real estate investments.</p>
            </div>
            <div class="blog-item">
                <h3>Understanding Land Development</h3>
                <p>September 25, 2024</p>
                <p>Everything you need to know about starting a land development project.</p>
            </div>
        </div>
    </section>

    <!--  FAQ Section -->
    <section id="faq" class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>What services does Valan Group offer?</h3>
            <p>We offer land development, real estate consulting, and more.</p>
        </div>
        <div class="faq-item">
            <h3>How do I get started with a consultation?</h3>
            <p>Simply contact us via the form below, and we’ll arrange a meeting to discuss your needs.</p>
        </div>
    </section>

    <!--  Contact Us Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <form action="#" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </section>
</div>
</main>
<?php get_footer(); ?>