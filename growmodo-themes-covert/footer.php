<footer class="footer" id="contact-us">
    <div class="container-9">
      <div class="sub-container-4">
        <a href="#home" aria-label="Estatein home">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg" alt="Estatein">
        </a>
        <form class="input-feild" action="#" method="post">
          <label class="icon" for="newsletter-email">
            <img class="vector-4" src="<?php echo get_template_directory_uri(); ?>/img/vector.svg" alt="">
          </label>
          <input class="text-3" id="newsletter-email" name="email" type="email" autocomplete="email" placeholder="Enter Your Email" aria-label="Enter your email address" required>
          <button class="iconly-bulk-send-wrapper" type="submit" aria-label="Subscribe to newsletter">
            <span class="iconly-bulk-send">
              <span class="send">
                <img class="combined-shape" src="<?php echo get_template_directory_uri(); ?>/img/combined-shape.svg" alt="">
              </span>
            </span>
          </button>
        </form>
      </div>

      <nav class="footer-link" aria-label="Footer navigation">
        <div class="column">
          <h2 class="text-wrapper-5">Home</h2>
          <div class="link-container">
            <a class="link" href="#home">Hero Section</a>
            <a class="link-2" href="#services">Features</a>
            <a class="link-2" href="#featured-properties">Properties</a>
            <a class="link-2" href="#testimonials">Testimonials</a>
            <a class="link-2" href="#faq">FAQ’s</a>
          </div>
        </div>
        <div class="column" id="about-us">
          <h2 class="text-wrapper-5">About Us</h2>
          <div class="link-container">
            <a class="link" href="#about-us">Our Story</a>
            <a class="link-2" href="#about-us">Our Works</a>
            <a class="link-2" href="#about-us">How It Works</a>
            <a class="link-2" href="#about-us">Our Team</a>
            <a class="link-2" href="#about-us">Our Clients</a>
          </div>
        </div>
        <div class="column" id="properties">
          <h2 class="text-wrapper-5">Properties</h2>
          <div class="link-container">
            <a class="link" href="#featured-properties">Portfolio</a>
            <a class="link-2" href="#featured-properties">Categories</a>
          </div>
        </div>
        <div class="column">
          <h2 class="text-wrapper-5">Services</h2>
          <div class="link-container">
            <a class="link" href="#services">Valuation Mastery</a>
            <a class="link-2" href="#services">Strategic Marketing</a>
            <a class="link-2" href="#services">Negotiation Wizardry</a>
            <a class="link-2" href="#services">Closing Success</a>
            <a class="link-2" href="#services">Property Management</a>
          </div>
        </div>
        <div class="column">
          <h2 class="text-wrapper-5">Contact Us</h2>
          <div class="link-container">
            <a class="link" href="#contact-us">Contact Form</a>
            <a class="link-2" href="#contact-us">Our Offices</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="container-10">
      <div class="sub-link-container">
        <p class="link-3">©<?php echo date('Y'); ?> Estatein. All Rights Reserved.</p>
        <a class="link-3" href="#terms">Terms &amp; Conditions</a>
      </div>
      <img class="img-2" src="<?php echo get_template_directory_uri(); ?>/img/social-icon.svg" alt="Estatein social media links">
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>