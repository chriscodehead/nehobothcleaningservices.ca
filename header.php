<!-- TOP BAR CON -->
<div class="w-100 float-left top-bar-con">
   <div class="wrapper">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
            <div class="socisl-con d-flex align-items-center justify-content-md-start justify-content-center">
               <span class="text-white d-inline-block text-uppercase">Follow Us:</span>
               <ul class="list-unstyled mb-0 d-flex">
                  <li><a href="<?php print $siteFacebook; ?>"><i
                           class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                  </li>
                  <li><a href="<?php print $siteTwitter; ?>"><i
                           class="fab fa-twitter d-flex align-items-center justify-content-center"></i></a>
                  </li>
                  <!-- <li><a href="https://www.linkedin.com/login"><i
         class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
      </li> -->
                  <li><a href="<?php print $siteInstagram; ?>"><i
                           class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                  </li>
               </ul>
            </div>
         </div>
         <div
            class="col-lg-6 col-md-6 col-12 d-flex justify-content-md-end align-items-center justify-content-center">
            <div class="client-info">
               <ul class="list-unstyled mb-0 d-flex">
                  <li><a href="tel:<?php print $sitePhone; ?>"><img src="assets/images/phone-icon.png" alt="phone-icon"> <?php print $sitePhone; ?></a></li>
                  <li><a href="mailto:<?php print $siteEmail; ?>"><img src="assets/images/email-icon.png"
                           alt="email-icon"><?php print $siteEmail; ?></a></li>
               </ul>
            </div>
         </div>
      </div>

   </div>
</div>


<header class="w-100 float-left header-con">
   <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark px-0">
         <a class="navbar-brand d-lg-none" href="./">
            <img src="img/logo.png" alt="mobile-logo">
         </a>

         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
         </button>


         <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link <?php print @$active1; ?> p-0" href="./">HOME</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 <?php print @$active2; ?>" href="about">ABOUT US </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 <?php print @$active3; ?>" href="services">Services</a>
               </li>
            </ul>

            <a class="navbar-brand d-none d-lg-block" href="./">
               <figure class="mb-0">
                  <img src="img/logo.png" alt="logo-img">
               </figure>
            </a>
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link p-0 <?php print @$active4; ?>" href="gallery">Gallery</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?php print @$active5; ?>" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blogs
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="blog">Blog</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 <?php print @$active6; ?>" href="contact">Contact Us</a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</header>