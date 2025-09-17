<!DOCTYPE html>
<html lang="zxx">

<?php
require_once('include.php');
$active2 = 'active';
$title = 'About Us | ' . $siteName . ' – Professional Cleaners in Canada';
$description = 'Learn more about ' . $siteName . ', a trusted Canadian cleaning company offering reliable, eco-friendly, and affordable cleaning solutions for homes and businesses.';
$keyword = 'about ' . $siteName . ', cleaning company Canada, professional cleaners Canada, eco-friendly cleaning services, residential cleaning Canada, commercial cleaning Canada, trusted cleaning services, affordable cleaners Canada';
require_once('head.php'); ?>

<body id="switcher-body">
 <?php require_once('loader.php'); ?>
 <?php require_once('header.php'); ?>

 <section id="back-top" class="w-100 float-left banner-con sub-banner gallery-banner position-relative">
  <div class="banner-inner-con position-relative">
   <div class="wrapper2">
    <div class="row">
     <div class="col-lg-7 col-md-7">
      <div class="banner-title">
       <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">About Us</h1>
       <p class="mb-0" data-aos="fade-up" data-aos-duration="600">When you choose <?php print $siteName ?>, you’re not just hiring a cleaner you’re partnering with a team committed to transforming your space. Whether it’s a one-time deep clean, regular maintenance, or specialized services, we’ll make sure every job is done with precision, professionalism, and care.</p>
      </div>
     </div>
     <div class="col-lg-5 col-md-5">
      <div class="banner-img">
       <figure class="mb-0">
        <img src="assets/images/about-img.png" alt="about-img">
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
       <img src="img/medium-shot-man-servant-cleaning-lamp.jpg" alt="clean-img">
      </figure>
     </div>
     <figure class="mb-0 generic-box-img2">
      <img src="img/basket-laundry-basket-with-cleaning-detergents-isolated-yellow.jpg" alt="clean-small-img">
     </figure>
    </div>
    <div class="generic-box-content position-relative">
     <h2 data-aos="fade-up" data-aos-duration="600">We transform every place into a clean and . <span
       class="color-01d0cc">welcoming space</span></h2>
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

      <div class="call-con position-relative d-inline-block" data-aos="fade-up"
       data-aos-duration="600">
       <img src="assets/images/headphones-icon.png" alt="headphones-icon">
       <div class="call-number">
        <span class="d-block">Have Any Questions?</span>
        <a href="tel:<?php print $sitePhone; ?>"> <?php print $sitePhone; ?></a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="w-100 float-left goals-con">
  <div class="container">
   <div class="goals-box text-center position-relative">
    <div class="goals-box-item">
     <figure class="d-flex align-items-center justify-content-center mx-auto" data-aos="fade-up"
      data-aos-duration="600">
      <img src="assets/images/mission-icon.png" alt="mission-icon">
     </figure>
     <h2 data-aos="fade-up" data-aos-duration="600">Our Promise</h2>
     <p class="mb-0" data-aos="fade-up" data-aos-duration="600">When you choose <?php print $siteName ?>, you’re not just hiring a cleaner—you’re partnering with a team committed to transforming your space. Whether it’s a one-time deep clean, regular maintenance, or specialized services, we’ll make sure every job is done with precision, professionalism, and care.</p>
    </div>
    <div class="goals-box-item">
     <figure class="d-flex align-items-center justify-content-center mx-auto" data-aos="fade-up"
      data-aos-duration="600">
      <img src="assets/images/vision-icon.png" alt="vision-icon">
     </figure>
     <h2 data-aos="fade-up" data-aos-duration="600">Why Choose Nehoboth?</h2>
     <p class="mb-0" data-aos="fade-up" data-aos-duration="600">
      ✔ Experienced & trained cleaners who care about details<br />
      ✔ Flexible cleaning plans tailored to your schedule and budget<br />
      ✔ Eco-friendly products safe for families, pets, and the environment<br />
      ✔ Transparent pricing with no hidden charges<br />
      ✔ 100% satisfaction guarantee—because your peace of mind matters</p>
    </div>
   </div>
  </div>
 </section>

 <section class="w-100 float-left user-con position-relative about-client-con">
  <div class="container">
   <div>
    <div class="client-title text-center position-relative">
     <h2 data-aos="fade-up" data-aos-duration="600">We serve our clients <span
       class="color-01d0cc d-block">with the best of our capacity</span>
     </h2>
    </div>
    <div class="owl-carousel owl-theme" id="client-slider" data-aos="fade-up" data-aos-duration="600">

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>Absolutely amazing service! Nehoboth Cleaning Services left our home spotless. The team was friendly, professional, and very detailed. Highly recommend!</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>Sarah M., </h4>
         <span class="d-block">London</span>
        </div>
       </div>
      </div>
     </div>

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>We use Nehoboth for our Airbnb property, and they never disappoint. Guests always comment on how clean and fresh the place feels. Thanks for helping us maintain 5-star reviews!</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>James K.,</h4>
         <span class="d-block">Stratford</span>
        </div>
       </div>
      </div>
     </div>

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>Moving out was stressful, but Nehoboth handled the cleaning perfectly. The landlord was impressed, and we got our full deposit back!</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>Emily R.,</h4>
         <span class="d-block">Woodstock</span>
        </div>
       </div>
      </div>
     </div>

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>Professional, reliable, and affordable. They clean our office weekly, and the difference is night and day. Highly satisfied with their service.</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>David L.,</h4>
         <span class="d-block">St. Thomas</span>
        </div>
       </div>
      </div>
     </div>

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>The team at Nehoboth Cleaning Services is outstanding. They pay attention to the smallest details, and my house has never looked this clean. Worth every penny!</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>Olivia T.,</h4>
         <span class="d-block">London</span>
        </div>
       </div>
      </div>
     </div>

     <div class="item">
      <div class="client-review-box">
       <div class="client-review-content position-relative">
        <p>After our renovation, the place was covered in dust and debris. Nehoboth came in and transformed it into a spotless, move-in ready home. Couldn’t be happier.</p>
        <figure class="mb-0">
         <img src="assets/images/star-img.png" alt="star-img">
        </figure>
       </div>
       <div class="client-info">
        <div class="client-name">
         <h4>Michael B.,</h4>
         <span class="d-block">Woodstock</span>
        </div>
       </div>
      </div>
     </div>

    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>

 <?php require_once('script.php'); ?>
</body>

</html>