<!DOCTYPE html>
<html lang="zxx">

<?php
require_once('include.php');
$active1 = 'active';
$title = $siteName . ' | Professional Residential & Commercial Cleaning in Canada';
$description = $siteName . ' provides expert residential, commercial, and industrial cleaning across Canada. Affordable, eco-friendly, and reliable cleaning you can trust. Book today!';
$keyword = 'cleaning services Canada, residential cleaning Canada, commercial cleaning Canada, professional cleaners near me, eco-friendly cleaning services, office cleaning Canada, ' . $siteName;
require_once('head.php'); ?>

<body id="switcher-body">
  <?php require_once('loader.php'); ?>
  <?php require_once('header.php'); ?>

  <section id="back-top" class="w-100 float-left banner-con home-banner position-relative">
    <div class="banner-inner-con position-relative">
      <div class="wrapper2">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner-title position-relative">
              <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">Professional Cleaning Within Your Budget</h1>
              <p data-aos="fade-up" data-aos-duration="600">At <?php print $siteName ?>, we believe a clean space should never be a luxury. That’s why we offer professional, reliable, and affordable cleaning solutions tailored to your home or business. From everyday housekeeping to deep cleans and commercial maintenance, our team ensures your space shines without stretching your budget.</p>
              <div class="d-flex align-items-center more-details">
                <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                  <a href="contact">Book us now!</a>
                </div>
                <div class="call-con position-relative d-inline-block" data-aos="fade-up"
                  data-aos-duration="600">
                  <img src="assets/images/headphones-icon.png" alt="headphones-icon">
                  <div class="call-number">
                    <span class="d-block text-white">Have Any Questions?</span>
                    <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-lg-0 order-1">
            <div class="banner-img">
              <figure class="mb-0">
                <img src="assets/images/home-girls-img.png" alt="home-girls-img">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w-100 float-left clean-con">
    <div class="wrapper2">
      <div class="generic-box">
        <div class="generic-box-img position-relative circle-box" data-aos="fade-up" data-aos-duration="600">
          <div class="generic-box-img1 position-relative">
            <figure class="mb-0 position-relative">
              <img src="img/positive-female-housekeeper-cleaning-day-housekeeping.jpg" alt="clean-img">
            </figure>
          </div>
          <figure class="mb-0 generic-box-img2">
            <img src="img/professional-cleaning-service-person-cleaning-office.jpg" alt="clean-small-img">
          </figure>
        </div>
        <div class="generic-box-content position-relative">
          <h2 data-aos="fade-up" data-aos-duration="600">No matter the place, we’ll leave it sparkling <span
              class="color-01d0cc">clean and perfectly tidy.</span></h2>
          <p data-aos="fade-up" data-aos-duration="600">At <?php print $siteName ?>, we believe that a clean environment is the foundation of a healthy, productive, and happy life. We are a proudly Canadian-owned company providing top-quality cleaning solutions for homes, offices, and businesses of all sizes. With a team of skilled and reliable professionals, we deliver cleaning services that go beyond surface shine—we create spaces you’ll love to step into.</p>
          <div class="generic-list">
            <ul class="list-unstyled">
              <li data-aos="fade-up" data-aos-duration="600">
                <span class="d-block">Our Mission</span>
                <p class="mb-0">To provide affordable, eco-friendly, and reliable cleaning services that bring comfort, order, and peace of mind to our clients.</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="600">
                <span class="d-block">Our Vision</span>
                <p class="mb-0">To be recognized as one of Canada’s most trusted and customer-focused cleaning companies, known for consistency, quality, and integrity.</p>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center more-details">
            <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
              <a href="about">Read More</a>
            </div>
            <div class="call-con position-relative d-inline-block" data-aos="fade-up"
              data-aos-duration="600">
              <img src="assets/images/headphones-icon.png" alt="headphones-icon">
              <div class="call-number">
                <span class="d-block">Have Any Questions?</span>
                <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w-100 float-left service-con position-relative">
    <div class="service-inner-box position-relative">
      <div class="wrapper">
        <div class="service-title text-center position-relative">
          <h2 class="text-white" data-aos="fade-up" data-aos-duration="600">Our most popular <span
              class="color-01d0cc d-block">cleaning services for
              you</span></h2>
        </div>
        <div class="service-inner-con" data-aos="fade-up" data-aos-duration="600">
          <div class="owl-carousel owl-theme" id="service-slider">

            <div class="item">
              <div class="service-item text-center">
                <figure>
                  <img src="assets/images/service-img1.jpg" alt="service-img">
                </figure>
                <h3>Airbnb Cleaning</h3>
                <p>Give your guests the best first impression. From top to bottom, we make every corner shine.</p>
                <a href="services"><img src="assets/images/left-angle.png" alt="left-angle"></a>
              </div>
            </div>

            <div class="item">
              <div class="service-item text-center">
                <figure>
                  <img src="assets/images/service-img2.jpg" alt="service-img">
                </figure>
                <h3>Residential Cleaning</h3>
                <p>Your home deserves to shine. Every space, every time—fresh, spotless, and well kept.</p>
                <a href="services"><img src="assets/images/left-angle.png" alt="left-angle"></a>
              </div>
            </div>

            <div class="item">
              <div class="service-item text-center">
                <figure>
                  <img src="assets/images/service-img4.jpg" alt="service-img">
                </figure>
                <h3>Move-In & Move-Out Cleaning</h3>
                <p>Stress-free moving starts with a clean slate.</p>
                <a href="services"><img src="assets/images/left-angle.png" alt="left-angle"></a>
              </div>
            </div>

            <div class="item">
              <div class="service-item text-center">
                <figure>
                  <img src="assets/images/service-img3.jpg" alt="service-img">
                </figure>
                <h3>Post-Construction Cleaning</h3>
                <p>Turn your new build into a move-in ready home or office.</p>
                <a href="services"><img src="assets/images/left-angle.png" alt="left-angle"></a>
              </div>
            </div>

          </div>
        </div>
        <div class="generic-btn d-block text-center" data-aos="fade-up" data-aos-duration="600">
          <a href="services">View All</a>
        </div>
      </div>
    </div>
  </section>

  <section class="w-100 float-left team-con position-relative">
    <div class="wrapper">
      <div class="project-title text-center">
        <h2 data-aos="fade-up" data-aos-duration="600">Our Project That <span class="color-01d0cc d-block">we
            have completed</span></h2>
      </div>
      <div class="position-relative project-box1">
        <div class="project-box">

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="img/still-life-cleaning-tools.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>House Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>London, Ontario</span>
              </div>
              <p class="mb-0">Residential, commercial, and specialized cleaning for homes, offices, and businesses.</p>
            </div>
          </div>

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="img/man-cleaning.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>Airbnb Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>St. Thomass</span>
              </div>
              <p class="mb-0">Trusted cleaning services tailored to families, small businesses, and large facilities.</p>
            </div>
          </div>

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="img/detergents-general-cleaning-cleaning-service.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>Carpet Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>Woodstock</span>
              </div>
              <p class="mb-0">Complete cleaning solutions, from routine housekeeping to industrial cleaning projects.</p>
            </div>
          </div>

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="assets/images/project-img4.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>Office Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>Stratford</span>
              </div>
              <p class="mb-0">Professional cleaning that keeps your homes and workspaces fresh, tidy, and welcoming.</p>
            </div>
          </div>

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="assets/images/project-img5.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>Kitchen Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>London, Ontario</span>
              </div>
              <p class="mb-0">Residential, commercial, and specialized cleaning for homes, offices, and businesses.</p>
            </div>
          </div>

          <div class="project-item position-relative" data-aos="fade-up" data-aos-duration="600">
            <figure class="mb-0">
              <img src="img/view-man-cleaning-indoors.jpg" alt="project-img">
            </figure>
            <div class="project-item-content text-white">
              <h3>Residential Cleaning</h3>
              <div class="location-tag position-relative"><img src="assets/images/location-icon.png"
                  alt="location-icon">
                <span>Woodstock</span>
              </div>
              <p class="mb-0">Complete cleaning solutions, from routine housekeeping to industrial cleaning projects.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="w-100 float-left blog-con">
    <div class="container">
      <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
        <h2>You can know more
          <span class="d-block color-01d0cc">about us by our blog</span>
        </h2>
      </div>
      <div class="row">

        <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 3");
        if (mysqli_num_rows($sql) > 0) {
          $c = 0;
          while ($row = mysqli_fetch_assoc($sql)) { ?>

            <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="600">
              <div class="blog-item">
                <figure>
                  <img class="iimg" src="<?php print 'photo/' . $row['post_image']; ?>" alt="blog-img">
                </figure>
                <div class="blog-item-content">
                  <a href="blog-detail?id=<?php print $row['id']; ?>">
                    <h4><?php print $bassic->reduceTextLength($row['title'], 20); ?></h4>
                  </a>
                  <p><?php print $bassic->reduceTextLength($row['news'], 150); ?></p>
                  <ul class="list-unstyled mb-0 position-relative">
                    <li><i class="fas fa-user"></i> By : <?php print $row['admin_name']; ?></li>
                    <li><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?></li>
                  </ul>
                </div>
              </div>
            </div>

          <?php $c++;
          }
        } else { ?>
          <h4 style="padding: 20px;">No updates found!</h4>
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- BLOG SECTION -->


  <?php require_once('footer.php'); ?>

  <?php require_once('script.php'); ?>
</body>


</html>