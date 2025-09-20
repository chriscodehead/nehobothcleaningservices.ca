<!DOCTYPE html>
<html lang="en">

<?php
require_once('include.php');
$active6 = 'active';
$title = 'Contact Us | Professional Cleaning Services Near You';
$description = 'Get in touch with us today for expert cleaning services, including Airbnb cleaning, residential cleaning, move-in/move-out cleaning, and post-construction cleaning. We’re just a call away!';
$keyword = 'contact cleaning services, book cleaning service, cleaning company contact, cleaning services phone number, cleaning services email, cleaning services near me, airbnb cleaning contact, house cleaning contact, ' . $siteName;
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
       <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">Contact Us</h1>
       <p class="mb-0" data-aos="fade-up" data-aos-duration="600">We’d love to hear from you! Whether you need a one-time cleaning, regular housekeeping, or specialized services like Airbnb or post-construction cleaning, our team is ready to help.</p>
      </div>
     </div>
     <div class="col-lg-5 col-md-5 order-md-0 order-1">
      <div class="banner-img" data-aos="fade-up" data-aos-duration="600">
       <figure class="mb-0">
        <img src="assets/images/contact-banner-img.png" alt="contact-banner-img">
       </figure>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="w-100 float-left contact-form-con">
  <div class="wrapper">
   <div class="contact-box2 w-100 float-left">
    <div class="contact-form">
     <h2 data-aos="fade-up" data-aos-duration="600">Get in Touch</h2>



     <form data-aos="fade-up" data-aos-duration="600" method="post" id="contactpage">

      <ul class="list-unstyled">
       <li>
        <label>First Name*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="assets/images/form-user-icon.png" alt="form-user-icon">
         </div>
         <input type="text" placeholder="First Name" name="fname" id="fname">
        </div>
       </li>

       <li>
        <label>Last Name*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="assets/images/form-user-icon.png" alt="form-user-icon">
         </div>
         <input type="text" placeholder="Last Name" name="lname" id="lname">
        </div>
       </li>

       <li>
        <label>Email*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="assets/images/form-email-icon.png" alt="form-email">
         </div>
         <input type="email" placeholder="Your Email" name="email" id="email">
        </div>
       </li>

       <li>
        <label>Phone Number*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="assets/images/form-tel-icon.png" alt="form-tel-icon">
         </div>
         <input type="tel" placeholder="Your Phone" name="phone" id="phone">
        </div>
       </li>

       <li>
        <label>WhatsApp Number*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="img/whatsapp-tel-icon.png" alt="form-tel-icon">
         </div>
         <input type="tel" placeholder="WhatsApp Number" name="wphone" id="wphone">
        </div>
       </li>

       <li>
        <label>Select Services*</label>
        <div class="input-field">
         <select class="form-control" name="select" id="select" style="padding-top: 25px; padding-bottom: 29px; margin-top: -3px;">
          <option value="Airbnb Cleaning">Airbnb Cleaning</option>
          <option value="Residential Cleaning">Residential Cleaning</option>
          <option value="Move-In & Move-Out Cleaning">Move-In & Move-Out Cleaning</option>
          <option value="Post-Construction Cleaning">Post-Construction Cleaning</option>
         </select>
        </div>
       </li>

       <li>
        <label>Select Date*</label>
        <div class="input-field">
         <input type="date" id="sdate" name="sdate" placeholder="Appointment Date">
        </div>
       </li>

       <li style="grid-column: 1/-1;">
        <label>Address*</label>
        <div class="input-field">
         <input type="text" placeholder="Your Address" name="address" id="address">
        </div>
       </li>

       <li>
        <label>Tell us more about your booking*</label>
        <div class="input-field">
         <div class="input-field-icon position-relative d-inline-block">
          <img src="assets/images/form-plane-icon.png" alt="form-plane-icon">
         </div>
         <textarea placeholder="Message" name="message" id="message"></textarea>
        </div>
       </li>

      </ul>
      <button onclick="contatMail()" type="button" class="contact-submit-btn" id="submit">Send</button>
     </form>

    </div>

    <div class="contact-info">
     <h2 data-aos="fade-up" data-aos-duration="600">INFo</h2>
     <ul class="list-unstyled mb-0">
      <li data-aos="fade-up" data-aos-duration="600" style="height: 200px;">
       <div class="contact-info-item">
        <figure class="mb-0">
         <img src="assets/images/contact-location-icon.png" alt="contact-location-icon">
        </figure>
        <div class="contact-info-content">
         <h5>Address</h5>
         <span><?php print $siteAddress; ?></span>
        </div>
       </div>
      </li>
      <li data-aos="fade-up" data-aos-duration="600">
       <div class="contact-info-item">
        <figure class="mb-0">
         <img src="assets/images/contact-phone-icon.png" alt="contact-phone-icon">
        </figure>
        <div class="contact-info-content">
         <h5>Phone</h5>
         <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
        </div>
       </div>
      </li>
      <li data-aos="fade-up" data-aos-duration="600">
       <div class="contact-info-item">
        <figure class="mb-0">
         <img src="assets/images/contact-email-icon.png" alt="contact-email-icon">
        </figure>
        <div class="contact-info-content">
         <h5>Email</h5>
         <a href="mailto:<?php print $siteEmail; ?>" style="font-size: 13px;"><?php print $siteEmail; ?></a>
        </div>
       </div>
      </li>
     </ul>
    </div>

   </div>
   <div class="w-100 float-left map-con map-con2 position-relative" data-aos="fade-up" data-aos-duration="600">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.8916487673278!2d-58.58502042334938!3d-34.42950724832019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca541965d56db%3A0xcdd42a54563afcf5!2sRio%20Tigris%20Apart%201!5e0!3m2!1sen!2s!4v1690809389702!5m2!1sen!2s" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
  </div>
 </section>
 <?php require_once('footer.php'); ?>
 <?php require_once('script.php'); ?>
</body>

</html>