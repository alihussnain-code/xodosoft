<?php
/**
 * Shared layout for every service page.
 *
 * A service page defines $service and then includes this file:
 *
 *   $service = [
 *     'file'       => 'business-process-automation.php',   // this page's file name (sidebar highlight)
 *     'title'      => 'Business Process Automation',       // page heading + browser title
 *     'image'      => 'images/resource/service-details.jpg',
 *     'headline'   => 'Main overview heading',
 *     'intro'      => ['Paragraph 1', 'Paragraph 2'],
 *     'listTitle'  => 'What We Automate',
 *     'items'      => [['Item title', 'Item description'], ...],
 *     'sections'   => [['Heading', 'Paragraph'], ...],
 *     'cta'        => ['Heading', 'Short text'],
 *   ];
 *   include 'includes/service-template.php';
 */
include_once __DIR__ . '/services.php';

if (!function_exists('e')) {
  function e($text)
  {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}

$service = array_merge([
  'image'    => 'images/resource/service-details.jpg',
  'intro'    => [],
  'items'    => [],
  'sections' => [],
  'cta'      => null,
], $service);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>XodoSoft | <?php echo e($service['title']); ?></title>
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

    <?php $currentPage = 'service'; include __DIR__ . '/header.php'; ?>

  <div id="smooth-wrapper">
    <div id="smooth-content">

      <!-- Start main-content -->
      <section class="page-title">
        <div class="bg bg-video"><video autoplay muted loop playsinline><source src="images/resource/bg-video1.mp4" type="video/mp4"></video></div>
        <div class="container">
          <div class="title-outer text-center">
            <h1 class="title"><?php echo e($service['title']); ?></h1>
            <ul class="page-breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="<?php echo e($xodoServicesHome); ?>">Services</a></li>
              <li><?php echo e($service['title']); ?></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->

      <!--Start Services Details-->
      <section class="services-details pt-120 pb-80">
        <div class="container">
          <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-lg-4">
              <div class="service-sidebar">
                <div class="sidebar-widget service-sidebar-single">

                  <div class="sidebar-service-list">
                    <ul>
                      <?php foreach ($xodoServices as $file => $title) : $isCurrent = ($file === $service['file']); ?>
                      <li<?php echo $isCurrent ? ' class="current"' : ''; ?>><a href="<?php echo e($file); ?>"<?php echo $isCurrent ? ' class="current"' : ''; ?>><i class="fas fa-angle-right"></i><span><?php echo e($title); ?></span></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>

                  <div class="service-details-help">
                    <div class="help-shape-1"></div>
                    <div class="help-shape-2"></div>
                    <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                    <div class="help-icon">
                      <span class=" lnr-icon-phone-handset"></span>
                    </div>
                    <div class="help-contact">
                      <p>Need help? Talk to an expert</p>
                      <a href="tel:+922135305947">021-35305947</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End Services Details Sidebar-->

            <!--Start Services Details Content-->
            <div class="col-lg-8">
              <div class="services-details__content">
                <div class="service-details-image fix">
                  <img data-speed=".8" src="<?php echo e($service['image']); ?>" alt="<?php echo e($service['title']); ?>">
                </div>

                <h3 class="mt-4"><?php echo e($service['headline']); ?></h3>
                <?php foreach ($service['intro'] as $paragraph) : ?>
                <p class="text"><?php echo e($paragraph); ?></p>
                <?php endforeach; ?>

                <?php if ($service['items']) : ?>
                <h3 class="mt-40"><?php echo e($service['listTitle']); ?></h3>
                <div class="service-features">
                  <?php foreach ($service['items'] as $item) : ?>
                  <div class="service-feature">
                    <div class="h5 title"><?php echo e($item[0]); ?></div>
                    <p class="text"><?php echo e($item[1]); ?></p>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php foreach ($service['sections'] as $section) : ?>
                <h3 class="mt-40"><?php echo e($section[0]); ?></h3>
                <p class="text"><?php echo e($section[1]); ?></p>
                <?php endforeach; ?>

                <?php if ($service['cta']) : ?>
                <div class="service-cta">
                  <div class="h4 title"><?php echo e($service['cta'][0]); ?></div>
                  <p class="text"><?php echo e($service['cta'][1]); ?></p>
                  <a href="contact.php" class="theme-btn-one">Get a Free Consultation <i class="fa-light fa-arrow-up-right"></i></a>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <!--End Services Details Content-->
          </div>
        </div>
      </section>
      <!--End Services Details-->

      <!-- Why Choose XodoSoft Section -->
      <section class="services-section why-choose-section denge-fade">
        <div class="container">
          <div class="sec-title">
            <div class="row">
              <div class="col-xxl-8 col-xl-7 col-lg-6">
                <div class="sub-title denge-words">Why Choose XodoSoft</div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-lg-6">
                <div class="h2 title text-reveal-anim">A Partner Built for Your Growth</div>
              </div>
            </div>
          </div>
          <div class="row g-24">
            <?php
            $whyChoose = [
              ['service-icon1-1.png', 'Deep Industry Focus', 'From textile ERP to fast-paced retail and restaurant POS, we build platforms around the real challenges of each industry, ready to scale with you.'],
              ['service-icon1-3.png', 'End-to-End Digital Expertise', 'Enterprise software, mobile apps, e-commerce and UI/UX design under one roof, delivered as complete, future-ready solutions.'],
              ['service-icon1-4.png', 'Cloud-First and Performance-Driven', 'Cloud-optimised platforms engineered for speed, security and real-time insight, so your business runs smarter and faster.'],
              ['service-icon1-5.png', 'A Partner You Can Trust', 'Beyond development, we offer dedicated support, seamless integrations and a long-term focus on your growth and innovation.'],
            ];
            foreach ($whyChoose as $point) : ?>
            <div class="col-xl-3 col-md-6">
              <div class="service-block denge-fade">
                <div class="inner-block">
                  <div class="shape1"><img src="images/icons/shape1.png" alt=""></div>
                  <div class="icon"><img src="images/icons/<?php echo e($point[0]); ?>" alt=""></div>
                  <div class="h4 title"><?php echo e($point[1]); ?></div>
                  <div class="text"><?php echo e($point[2]); ?></div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <!-- Why Choose XodoSoft Section -->

        <?php $footerClass = 'mt-0'; include __DIR__ . '/footer.php'; ?>
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
</body>
</html>
