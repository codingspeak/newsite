<?php include('includes/header.php'); ?>

<main class="main">
   
    <div class="heading">GET IN TOUCH WITH US</div>

    <div class="contact-wrapper row mx-auto ">
        <div class="contact-left col-md-5">
            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="Hi Image" />
           <div class="contact-info text-center">
  <p class="d-flex justify-content-center align-items-center mb-3">
    <i class="fas fa-map-marker-alt fa-lg text-success me-2"></i>
    <strong>931 Abia Martin Drive, PA</strong>
  </p>
  <p class="mb-3">
    Pennsylvania-18104
  </p>

  <p class="d-flex justify-content-center align-items-center mb-3">
    <i class="fas fa-phone-alt fa-lg text-success me-2 "></i>
    <strong>Phone:</strong>&nbsp;+1-760-284-3410
  </p>

  <p class="d-flex justify-content-center align-items-center mb-3">
    <i class="fas fa-envelope fa-lg text-success me-2"></i>
    <strong>Email:</strong>&nbsp;hello@demoemail.com
  </p>
</div>

        </div>
        <div class="contact-right col-md-7">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name *</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone *</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-submit w-100">SUBMIT</button>
            </form>
        </div>
    </div>
</main>


<script>
        // Form validation and submission
        document.querySelector('.submit-btn').addEventListener('click', function() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if(name === '' || email === '' || message === '') {
                alert('Please fill in all required fields');
                return;
            }
            
            if(!validateEmail(email)) {
                alert('Please enter a valid email address');
                return;
            }
            
            // Form submission success message
            alert('Thank you for your message! We will contact you soon.');
            
            // Reset the form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('subject').value = '';
            document.getElementById('message').value = '';
        });
        
        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    </script>

<?php include('includes/footer.php'); ?>