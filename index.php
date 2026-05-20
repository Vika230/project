<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <button class="scroll-top">
        ↑
    </button>

    <!-- HEADER -->
    <header class="header">
        <div class="container header__inner">

            <div class="logo">
                <img src="images/Logo.png" alt="Open System Logo">
            </div>

            <div class="burger">☰</div>

            <nav class="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#projects">Projects</a>
                <a href="partners.php">Partners</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>

    </header>


    <!-- HERO -->
    <section class="hero reveal" id="home">
        <div class="container hero__inner">

            <div class="hero__content">
                <h1>Engineering & Construction Solutions</h1>
                <p>
                    We provide high-quality services in construction, installation and technical support
                    for industrial and commercial projects.
                </p>
                <a href="#" class="btn">Get Consultation</a>
            </div>

        </div>

    </section>

    <!-- MAIN CONTENT -->
    <section class="about" id="about">

        <div class="container">

            <div class="about__content">

                <div class="about__image">
                    <img src="images/about.jpg" alt="">
                </div>

                <div class="about__text">

                    <h2 class="section-title">
                        About Our Company
                    </h2>

                    <p>
                        Our company provides professional engineering and construction services.
                        We specialize in installation, maintenance, and technical support.
                    </p>

                    <p>
                        We focus on quality, reliability, and long-term cooperation with our clients.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="services reveal" id="services">

        <div class="container">

            <h2 class="section-title">Our Services</h2>

            <div class="services__grid">

                <div class="service-card">
                    <h3>Professional Training</h3>

                    <p>
                        Training programs and practical courses for technical specialists and employees.
                    </p>
                </div>

                <div class="service-card">
                    <h3>Certification</h3>

                    <p>
                        Certification services according to industry standards and safety requirements.
                    </p>
                </div>

                <div class="service-card">
                    <h3>Technical Consulting</h3>

                    <p>
                        Professional consulting and support for engineering and industrial projects.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <section class="products">

        <div class="container">

            <h2 class="section-title">Company Products</h2>

            <p class="products-subtitle">
                From stand to cable
            </p>

            <div class="swiper mySwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="product-card">

                            <img src="images/product1.jpg" alt="">

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="product-card">

                            <img src="images/product2.jpg" alt="">

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="product-card">

                            <img src="images/product3.jpg" alt="">

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="product-card">

                            <img src="images/product4.jpg" alt="">

                        </div>

                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

        </div>

    </section>

    <section class="projects reveal" id="projects">
        <div class="container">

            <div class="projects-top">
                <h2 class="section-title">Completed Projects</h2>

                <p class="projects-subtitle">

                    Industrial engineering, certification and consulting solutions for modern businesses.

                </p>
            </div>

            <div class="projects__content">

                <div class="project-card">

                    <img src="images/project1.png" alt="">

                    <div class="project-content">

                        <h3>Training Programs</h3>

                        <p>
                            Professional industrial training and employee education.
                        </p>

                    </div>

                </div>

                <div class="project-card">

                    <img src="images/project2.png" alt="">

                    <div class="project-content">

                        <h3>Certification Services</h3>

                        <p>
                            Certification and qualification programs for specialists.
                        </p>

                    </div>

                </div>

                <div class="project-card">

                    <img src="images/project3.png" alt="">

                    <div class="project-content">

                        <h3>Technical Consulting</h3>

                        <p>
                            Professional consulting and support for engineering projects.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="stats reveal" id="stats">

        <div class="container">

            <div class="stats__grid">

                <div class="stat">
                    <h2>
                        <span class="counter" data-target="25">0</span>+
                    </h2>
                    <p>Years Experience</p>
                </div>

                <div class="stat">
                    <h2>
                        <span class="counter" data-target="50000">0</span>+
                    </h2>
                    <p>Clients</p>
                </div>

                <div class="stat">
                    <h2>
                        <span class="counter" data-target="1000">0</span>+
                    </h2>
                    <p>Trained Specialists</p>
                </div>

                <div class="stat">
                    <h2>24/7</h2>
                    <p>Technical Support</p>
                </div>

            </div>

        </div>

    </section>

    <section class="why reveal" id="why">

        <div class="container">

            <div class="why-top">
                <h2 class="section-title">Why Choose Us</h2>

                <p>
                    We provide reliable solutions, professional support and high-quality services for every client.
                </p>
            </div>

            <div class="why__grid">

                <div class="why-card">
                    <h3>Professional Team</h3>

                    <p>
                        Experienced specialists with practical industry knowledge.
                    </p>
                </div>

                <div class="why-card">
                    <h3>Modern Solutions</h3>

                    <p>
                        Innovative approaches and modern technologies for every project.
                    </p>
                </div>

                <div class="why-card">
                    <h3>Reliable Support</h3>

                    <p>
                        Continuous support and communication during all project stages.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <section class="contact reveal" id="contact">

        <div class="container">

            <div class="contact-top">

                <h2 class="section-title">
                    Contact Us
                </h2>

                <p>
                    Get in touch with our team for professional consultation and support.
                </p>

            </div>


            <div class="contact-wrapper">

                <form class="contact-form" action="send.php" method="POST">

                    <input type="text" name="name" placeholder="Your Name" required>

                    <input type="email" name="email" placeholder="Your Email" required>

                    <textarea name="message" placeholder="Your Message" required></textarea>

                    <button type="submit" class="btn">
                        Send Message
                    </button>

                </form>


                <div class="contact-image">

                    <img src="images/contact.jpg" alt="">

                </div>

            </div>

        </div>

    </section>
    </div>

    <!-- FOOTER -->
    <footer class="footer">

        <div class="container">

            <div class="footer__grid">

                <div class="footer-column">

                    <h3>Quick Links</h3>

                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#projects">Projects</a>
                    <a href="#contact">Contact</a>
                    <a href="partners.php">Partners</a>

                </div>

                <div class="footer-column">

                    <h3>Contacts</h3>

                    <p>Email: opensys@opensys.com.ua</p>

                    <p>Phone: +38 (068) 916 36 85</p>

                    <p>Khmelnitskyi, Ukraine </p>

                </div>

            </div>

            <div class="footer-bottom">

                <p>
                    © 2026 Open System. All rights reserved.
                </p>

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="main.js"></script>

</body>

</html>