<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


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
            width: 100%;
            overflow: hidden;
        }

        .slider-container {
            max-width: 1140px;
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
        <div class="box">
            <img src="images/featured box 1.webp" alt="Boxes Template">
           
        </div>
        <div class="box">
            <img src="images/boxe2.webp" alt="Moving Boxes">
        
        </div>
        <div class="box">
            <img src="images/box3.webp" alt="Dunnage Paper">
           
        </div>
    </section>


    <div class="follow_us_main">
        <h1 class="lastest-head">Latest Posts</h1>
        <div class="follow_us_border"></div>
    </div>

    <!-- Latest + Blog Section in Grid -->
    <section class="blog-layout-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="latest-posts-left">
                <img src="images/featured-post.jpg" alt="Featured Blog" />
                <h2>Prepare Your Retail Packaging for Fall</h2>
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