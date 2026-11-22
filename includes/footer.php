<?php
/**
 * Shared site footer.
 *
 * Usage in a page:
 *   <?php $footerClass = 'mt-0'; include 'includes/footer.php'; ?>
 *
 * $footerClass: optional extra classes for the <footer> element (e.g. 'mt-0').
 */
$footerClass = isset($footerClass) ? trim($footerClass) : '';
?>
        <!-- Footer Section Start -->
        <footer class="footer-section fix bg-cover<?php echo $footerClass !== '' ? ' ' . htmlspecialchars($footerClass) : ''; ?>" style="background-image: url('images/icons/footer-line.png');">
          <div class="container">
            <div class="footer-top-wrapper">
              <a href="index.php" class="footer-logo wow fadeInUp" data-wow-delay=".3s"><img src="images/logo.svg"
                  alt="XodoSoft" width="180" height="54"></a>
              <div class="lets-talk-content wow fadeInUp" data-wow-delay=".5s">
                <div class="h2 title">
                  Let’s Talk <a href="contact.php" class="arrow-icon"><i
                      class="fa-regular fa-arrow-up-right"></i></a>
                  <span>Work Together</span>
                </div>
              </div>
            </div>
            <div class="footer-widget-wrapper">
              <div class="footer-vec d-none d-xxl-block"><img src="images/icons/footer-vec.png" alt="img"
                  class="animation__rotateY"></div>
              <div class="row g-4 justify-content-between align-items-start align-items-xl-end">
                <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                  <div class="footer-contact-items">
                    <p><a href="mailto:contact@xodosoft.com">contact@xodosoft.com</a></p>
                    <div class="h4 call-title"><a href="tel:+922135305947">021-35305947</a></div>
                    <div class="social-icon">
                      <a href="https://www.facebook.com/people/Xodosoft-SMC-Private-Limited/61576297983139/"
                        target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="https://x.com/xodosoft" target="_blank" rel="noopener noreferrer" aria-label="X"><svg
                          class="x-icon" viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor"
                          aria-hidden="true">
                          <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg></a>
                      <a href="https://www.linkedin.com/company/xodosoft/" target="_blank" rel="noopener noreferrer"
                        aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="https://www.instagram.com/xodosoft/" target="_blank" rel="noopener noreferrer"
                        aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="h5 get-title">Get the latest inspiration & insights</div>
                    <form action="#">
                      <input type="text" name="email" id="email2" placeholder="Enter your email">
                      <button type="submit"><i class="fa-sharp fa-regular fa-paper-plane"></i></button>
                    </form>
                  </div>
                </div>
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                  <div class="footer-list-area">
                    <div class="footer-widget-items">
                      <div class="widget-title mb-25">
                        <div class="h4 font-size-24 text-white font-weight-500">Quick Link</div>
                      </div>
                      <ul class="user-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                      </ul>
                    </div>
                    <div class="footer-widget-items">
                      <div class="widget-title mb-25">
                        <div class="h4 font-size-24 text-white font-weight-500">Our Solutions</div>
                      </div>
                      <ul class="user-links">
                        <li><a href="service.php">Enterprise and Custom Software Development</a></li>
                        <li><a href="service.php">Business Process Automation</a></li>
                        <li><a href="service.php">Web and Mobile Application Development</a></li>
                        <li><a href="service.php">Systems Integration and API Development</a></li>
                        <li><a href="service.php">Digital Commerce Solutions</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <p>© Copyright <span class="current-year"><?php echo date('Y'); ?></span> by <a href="https://xodosoft.com" target="_blank"
                  rel="noopener noreferrer">Xodosoft.com</a></p>
              <ul class="footer-menu">
                <li><a href="contact.php">Terms & Condition</a></li>
                <li><a href="contact.php">Privacy Policy</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>
        </footer>
        <!-- Footer Section End -->
