<?php include('includes/header.php'); ?>

<main class="privacy-policy">

    <section>


        <div class="main-container">
            <div class="social-icon">
                <a href="#" class="icon phone">
                    <i class="fas fa-phone-alt"></i>
                </a>
                <a href="#" class="icon mail">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="#" class="icon whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>



            <div class="flex">
                <section >
                    <h1 class="heading"><span class="heading-span">Rush order</span>  now possible with We Custom Boxes.</h1>
                    <p>We truly understand that everything is not standard so our expedite plan of <span class="p-span">4 to 6</span>  business days is the solution to your expedite requirements.</p>
                </section>

                <section>
                    <form class="contact-form">
                        <h4>Fill below form and get instant response from one of our packaging expert.</h4>
                        <div class="deadline-group">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Yout Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="tel" id="phone" placeholder="Contact Number" required>
                        </div>

                       
                            <div class="form-group">
                                <input type="text" id="solution" placeholder="Solution To Deadline" required>
                            </div>

                        <div class="form-group">
                            <textarea id="specifications" placeholder="Your Specifications" required></textarea>
                        </div>

                        <div class="captcha-container">
                            <div class="captcha-checkbox" id="captchaCheckbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="captcha-text">
                                <h3>I'm not a robot</h3>
                                <p>reCAPTCHA</p>
                            </div>
                        </div>

                        <div class="privacy-terms">
                            <a href="./privacy-policy.php"> No spam</a> - <a href="./privacy-policy.php">privacy policy.</a>
                        </div>
                        <div class="btn-parent">
                            <button type="submit" class="submit-btn">
                            Send Message
                        </button>
                        </div>
                        
                    </form>
                </section>

            </div>

        </div>


    </section>
</main>


<script>
    // Captcha checkbox functionality
    const captchaCheckbox = document.getElementById('captchaCheckbox');
    captchaCheckbox.addEventListener('click', () => {
        captchaCheckbox.classList.toggle('checked');
    });

    // Form submission
    const form = document.querySelector('.contact-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Check if captcha is checked
        if (!captchaCheckbox.classList.contains('checked')) {
            alert('Please verify that you are not a robot.');
            return;
        }

        // Form is valid, show success message
        alert('Your message has been sent successfully! We will contact you soon.');
        form.reset();
        captchaCheckbox.classList.remove('checked');
    });
</script>


<?php include('includes/footer.php'); ?>