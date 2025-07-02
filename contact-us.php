<?php include('includes/header.php'); ?>

<main>
    <div class="contact-container">
        <div class="contact-header">
            <h1>Don't be a stranger<span>just say hello.</span></h1>
            <p>We'd love to hear from you and answer any questions you might have</p>
        </div>
        
        <div class="contact-content">
            <div class="contact-info">
                <h2 class="section-title">GET IN TOUCH WITH US</h2>
                <p class="contact-desc">
                    Thank you for your interest in our services. Please fill out the form below or email us directly at: 
                    <strong>hello@demoemail.com</strong>
                </p>
                
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone Number</h3>
                            <p>+1-760-284-3410</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Address</h3>
                            <p>hello@demoemail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Our Location</h3>
                            <p>123 Business Avenue, Suite 100<br>San Francisco, CA 94107</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-section">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" placeholder="Enter your full name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email address">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="What is this regarding?">
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" placeholder="Type your message here..."></textarea>
                </div>
                
                <button class="submit-btn">
                    <i class="fas fa-paper-plane"></i> SUBMIT
                </button>
                
                <div class="contact-email">
                    <p>Prefer email? Contact us directly at <strong>hello@demoemail.com</strong></p>
                </div>
            </div>
        </div>
        
        <div class="contact-footer">
            <p>© 2023 Company Name. All rights reserved. We do not share or trade customer information.</p>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>