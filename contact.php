<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>XodoSoft | Contact Us</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/theme.css" rel="stylesheet" />
  <link href="css/custom.css" rel="stylesheet" />

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body class="tm-magic-cursor">
  <div class="page-wrapper">

  <div class="preloader"></div>

    <?php $currentPage = 'contact'; include 'includes/header.php'; ?>

  <div id="smooth-wrapper">
    <div id="smooth-content">

      <!-- Start main-content -->
      <section class="page-title">
        <div class="bg bg-video"><video autoplay muted loop playsinline><source src="images/resource/bg-video1.mp4" type="video/mp4"></video></div>
        <div class="container">
          <div class="title-outer text-center">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->

      <!--Contact Details Start-->
      <section class="contact-details pt-120 pb-80">
        <div class="container">
          <div class="row">
            <div class="col-xl-7 col-lg-6">
              <div class="section-title mb-30">
                <div class="sub-title">
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.81319 14.6759C6.83947 14.8971 7.16053 14.8971 7.18681 14.6759L7.40705 12.8197C7.69143 10.4229 9.58112 8.53323 11.9779 8.24884L13.834 8.0286C14.0553 8.00233 14.0553 7.68127 13.834 7.65499L11.9779 7.43475C9.58112 7.15036 7.69143 5.26068 7.40705 2.86391L7.18681 1.00776C7.16053 0.786476 6.83947 0.786476 6.81319 1.00776L6.59296 2.86391C6.30857 5.26068 4.41888 7.15036 2.02209 7.43475L0.165943 7.65499C-0.0553144 7.68127 -0.0553144 8.00233 0.165943 8.0286L2.02209 8.24884C4.41888 8.53323 6.30857 10.4229 6.59296 12.8197L6.81319 14.6759Z" fill="currentColor" />
                  </svg>
                  <span>Send us email</span>
                </div>
                <div class="h3 title split-text split-in-right">Feel free to write</div>
              </div>
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                </div>
                <div class="mb-5 theme-btn-main">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="theme-btn-six mb-2 mb-sm-0" data-loading-text="Please wait...">
                    <span class="btn-title">Send message</span>
                  </button>
                </div>
              </form>
              <!-- Contact Form Validation-->
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="contact-details__right">
                <div class="section-title mb-30">
                  <div class="sub-title">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.81319 14.6759C6.83947 14.8971 7.16053 14.8971 7.18681 14.6759L7.40705 12.8197C7.69143 10.4229 9.58112 8.53323 11.9779 8.24884L13.834 8.0286C14.0553 8.00233 14.0553 7.68127 13.834 7.65499L11.9779 7.43475C9.58112 7.15036 7.69143 5.26068 7.40705 2.86391L7.18681 1.00776C7.16053 0.786476 6.83947 0.786476 6.81319 1.00776L6.59296 2.86391C6.30857 5.26068 4.41888 7.15036 2.02209 7.43475L0.165943 7.65499C-0.0553144 7.68127 -0.0553144 8.00233 0.165943 8.0286L2.02209 8.24884C4.41888 8.53323 6.30857 10.4229 6.59296 12.8197L6.81319 14.6759Z" fill="currentColor" />
                    </svg>
                    <span>Need any help?</span>
                  </div>
                  <div class="h3 title split-text split-in-right">Get in touch with us</div>
                  <div class="text mt-3">Have a project in mind or need help choosing the right solution? Reach out to the XodoSoft team by phone, email or a visit to our office. We usually reply within one business day.</div>
                </div>
                <ul class="list-unstyled contact-details__info">
                  <li class="d-block d-sm-flex align-items-sm-center ">
                    <div class="icon"><span class="lnr-icon-phone-plus"></span></div>
                    <div class="text ml-xs--0 mt-xs-10">
                      <div class="h5 mb-1">Have any question?</div>
                      <a href="tel:+922135305947">021-35305947</a>
                    </div>
                  </li>
                  <li class="d-block d-sm-flex align-items-sm-center ">
                    <div class="icon"><span class="lnr-icon-envelope1"></span></div>
                    <div class="text ml-xs--0 mt-xs-10">
                      <div class="h5 mb-1">Write email</div>
                      <a href="mailto:contact@xodosoft.com">contact@xodosoft.com</a>
                    </div>
                  </li>
                  <li class="d-block d-sm-flex align-items-sm-center ">
                    <div class="icon"><span class="lnr-icon-location"></span></div>
                    <div class="text ml-xs--0 mt-xs-10">
                      <div class="h5 mb-1">Visit anytime</div>
                      <span>Office # 9, Apartment, Mezzanine Floor, Marine Galleria, Kehkashan Block 9 Clifton, Karachi, 75600, Pakistan</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Contact Details End-->

      <!-- Map Section-->
      <section class="map-section">
        <iframe class="map w-100" title="XodoSoft office location"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.123261068607!2d67.03359917224049!3d24.82545799795125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d006f504e5b%3A0x2e5a1e8f9b44c7dd!2sXodosoft!5e0!3m2!1sen!2s!4v1795371234736!5m2!1sen!2s"
          height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </section>
      <!--End Map Section-->

        <?php include 'includes/footer.php'; ?>
    </div>
  </div>

  </div>
<!-- End Page Wrapper -->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/knob.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/splitType.js"></script>
<script src="js/gsap-scroll-smoother.js"></script>
<script src="js/gsap-scroll-to-plugin.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/custom-gsap.js"></script>
<script src="js/script.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script src="js/custom-contact.js"></script>
</body>
</html>
