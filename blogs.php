<?php include('includes/header.php'); ?>


<main class="blog-page">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="slider-container">
            <div class="slider-track">
                <img src="images/banner1.webp" class="slide" alt="Slide 1" />
                <img src="images/banner2.webp" class="slide" alt="Slide 2" />

            </div>
        </div>
    </section>

    <style>
        .hero-banner {
            width: 1290px;
            overflow: hidden;
        }

        .slider-container {
            max-width: 1300px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide");
        const sliderTrack = document.querySelector(".slider-track");

        function showSlide(index) {
            const slideWidth = slides[0].clientWidth;
            sliderTrack.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000);
    </script>



    <!-- Featured Boxes Row -->
    <section class="featured-boxes">
        <div class="small-post">
            <img src="images/featured box 1.webp" alt="Boxes Template">
            <p>Explore What Are the Colored Dots on Packaging?</p>

        </div>
        <div class="small-post">
            <img src="images/boxe2.webp" alt="Moving Boxes">
            <p>How to Customize a Tote Bag? Read This Blog!</p>

        </div>
        <div class="small-post">
            <img src="images/box3.webp" alt="Dunnage Paper">
            <p>A Comprehensive Guide on Boxes Template and How to Make It!</p>

        </div>
    </section>


    <div class="follow_us_main">
        <h1 class="lastest-head ">Latest Posts</h1>
        <div class="follow-us-flex">
            <h1 class="follow-us">Follow Us</h1>
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Latest + Blog Section in Grid -->
    <section class="blog-layout-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="latest-posts-left">
                <img src="images/featured-post.jpg" alt="Featured Blog" />

            </div>

            <!-- Blog Cards Grid -->
            <section class="blog-grid">
                <div class="blog-card">
                    <a href="">
                        <img src="images/card1.webp" alt="">
                        <h3>5 Places Where You Can Buy Durable Moving Boxes</h3>
                    </a>
                    <p>
                        When it comes to residential or commercial moving, the importance
                        of packaging boxes can’t be overstated.
                        These boxes ensure the safe...
                    </p>
                    <!-- Author & Date Section -->
                    <div class="card-footer">
                        <span class="author">By John Doe</span>
                        <span class="date">July 2, 2025 - 11:00 AM</span>
                    </div>
                </div>

                <div class="blog-card">
                    <a href="">
                        <img src="images/card2.webp" alt="">
                        <h3>5 Places Where You Can Buy Durable Moving Boxes</h3>
                    </a>
                    <p>
                        When it comes to residential or commercial moving, the importance
                        of packaging boxes can’t be overstated.
                        These boxes ensure the safe...
                    </p>
                    <!-- Author & Date Section -->
                    <div class="card-footer">
                        <span class="author">By John Doe</span>
                        <span class="date">July 2, 2025 - 11:00 AM</span>
                    </div>
                </div>

                <div class="blog-card">
                    <a href="">
                        <img src="images/card3.webp" alt="">
                        <h3>5 Places Where You Can Buy Durable Moving Boxes</h3>
                    </a>
                    <p>
                        When it comes to residential or commercial moving, the importance
                        of packaging boxes can’t be overstated.
                        These boxes ensure the safe...
                    </p>
                    <!-- Author & Date Section -->
                    <div class="card-footer">
                        <span class="author">By John Doe</span>
                        <span class="date">July 2, 2025 - 11:00 AM</span>
                    </div>
                </div>

                <div class="blog-card">
                    <a href="">
                        <img src="images/card4.webp" alt="">
                        <h3>5 Places Where You Can Buy Durable Moving Boxes</h3>
                    </a>
                    <p>
                        When it comes to residential or commercial moving, the importance
                        of packaging boxes can’t be overstated.
                        These boxes ensure the safe...
                    </p>
                    <!-- Author & Date Section -->
                    <div class="card-footer">
                        <span class="author">By John Doe</span>
                        <span class="date">July 2, 2025 - 11:00 AM</span>
                    </div>
                </div>

            </section>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <div class="latest-posts-right">
                <div class="small-post">
                    <img src="images/post1.webp" alt="">
                    <p>Boxes Template Guide</p>
                </div>
                <div class="small-post">
                    <img src="images/post2.webp" alt="">
                    <p>Durable Moving Boxes</p>
                </div>
                <div class="small-post">
                    <img src="images/post3.webp" alt="">
                    <p>Dunnage Paper Uses</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Pagination -->
    <div class="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
    </div>

</main>


<?php include('includes/footer.php'); ?>