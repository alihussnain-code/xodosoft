<?php
/**
 * Shared site header (navbar, sticky navbar, mobile menu, back-to-top button).
 *
 * Usage in a page:
 *   <?php $currentPage = 'about'; include 'includes/header.php'; ?>
 *
 * $currentPage: home | about | service | product | blogs | contact
 */
$currentPage = isset($currentPage) ? $currentPage : '';

if (!function_exists('xodo_nav_class')) {
  function xodo_nav_class($page, $currentPage, $extra = '')
  {
    $classes = trim($extra . ($page === $currentPage ? ' current' : ''));
    return $classes !== '' ? ' class="' . $classes . '"' : '';
  }
}
?>
    <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top end -->

    <!-- Main Header-->
    <header class="main-header header-style-one">
      <div class="outer-box">
        <div class="header-lower">
          <!-- Main box -->
          <div class="main-box">
            <div class="logo-box">
              <div class="logo">
                <a href="index.php"><img src="images/logo.svg" alt="XodoSoft" width="180" height="54" /></a>
              </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
              <nav class="nav main-menu">
                <ul class="navigation">
                  <li<?php echo xodo_nav_class('home', $currentPage); ?>>
                    <a href="index.php">Home</a>
                  </li>
                  <li<?php echo xodo_nav_class('about', $currentPage); ?>>
                    <a href="about.php">About</a>
                  </li>
                  <li<?php echo xodo_nav_class('service', $currentPage, 'dropdown'); ?>>
                    <a href="service.php">Services</a>
                    <ul>
                      <li><a href="service.php">Enterprise and Custom Software Development</a></li>
                      <li><a href="service.php">Business Process Automation</a></li>
                      <li><a href="service.php">Web and Mobile Application Development</a></li>
                      <li><a href="service.php">Systems Integration and API Development</a></li>
                      <li><a href="service.php">Digital Commerce Solutions</a></li>
                    </ul>
                  </li>
                  <li<?php echo xodo_nav_class('product', $currentPage, 'dropdown'); ?>>
                    <a href="product.php">Products</a>
                    <ul>
                      <li><a href="product.php">Retail POS ERP</a></li>
                      <li><a href="product.php">Textile ERP</a></li>
                    </ul>
                  </li>
                  <li<?php echo xodo_nav_class('blogs', $currentPage); ?>>
                    <a href="blogs.php">Blog</a>
                  </li>
                  <li<?php echo xodo_nav_class('contact', $currentPage); ?>>
                    <a href="contact.php">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>

            <!-- Outer Box -->
            <div class="action-box">
              <div class="header-btn">
                <a href="contact.php" class="theme-btn-two">Let’s Talk <i
                    class="fa-light fa-arrow-up-right"></i></a>
              </div>

              <!-- Mobile Nav toggler -->
              <div class="mobile-nav-toggler">
                <div class="shape-line-img"><i class="fas fa-bars"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
          <div class="upper-box">
            <div class="nav-logo">
              <a href="index.php"><img src="images/logo.svg" alt="XodoSoft" /></a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
          </div>
          <ul class="navigation clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
          </ul>
          <ul class="contact-list-one">
            <li>
              <i class="icon lnr-icon-envelope1"></i>
              <span class="title">Send Email</span>
              <div class="text"><a href="mailto:contact@xodosoft.com">contact@xodosoft.com</a></div>
            </li>
          </ul>
          <ul class="social-links">
            <li><a href="https://www.facebook.com/people/Xodosoft-SMC-Private-Limited/61576297983139/" target="_blank"
                rel="noopener noreferrer" aria-label="Facebook"><i class="icon fab fa-facebook-f"></i></a></li>
            <li><a href="https://x.com/xodosoft" target="_blank" rel="noopener noreferrer" aria-label="X"><svg
                  class="x-icon" viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                  <path
                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                </svg></a></li>
            <li><a href="https://www.linkedin.com/company/xodosoft/" target="_blank" rel="noopener noreferrer"
                aria-label="LinkedIn"><i class="icon fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.instagram.com/xodosoft/" target="_blank" rel="noopener noreferrer"
                aria-label="Instagram"><i class="icon fab fa-instagram"></i></a></li>
          </ul>
        </nav>
      </div>
      <!-- End Mobile Menu -->

      <!-- Header Search -->
      <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
          <form method="post" action="index.php">
            <div class="form-group">
              <input type="search" name="search-field" value="" placeholder="Search..." required="" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
      <!-- End Header Search -->

      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="inner-container">
            <!--Logo-->
            <div class="logo">
              <a href="index.php"><img src="images/logo.svg" alt="XodoSoft" width="180" height="54" /></a>
            </div>

            <!--Right Col-->
            <div class="nav-outer">
              <!-- Main Menu -->
              <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                  <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->

              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
