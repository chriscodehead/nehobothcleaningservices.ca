<!DOCTYPE html>
<html lang="zxx">

<?php
require_once('include.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
 $user_id = $_GET['id'];
} else {
 header("location:blog-detail");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$active4 = 'active';
$title = $row['title'];
$description = 'Discover expert cleaning tips, home care guides, and professional advice from ' . $siteName . '. Learn how to keep your home, office, and rental spaces sparkling clean.';
$keyword = 'cleaning tips, home cleaning blog, office cleaning guide, Airbnb cleaning tips, eco-friendly cleaning, ' . $siteName . ' blog, professional cleaning advice, post-construction cleaning guide, move in move out cleaning tips, residential cleaning blog';
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
       <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">Blog Detail</h1>
       <p class="mb-0" data-aos="fade-up" data-aos-duration="600">Keeping your home, office, or rental property clean shouldn’t feel overwhelming. That’s why we’ve created this blog to share practical cleaning tips, expert advice, and professional insights that make maintaining a fresh and healthy space easier for you.</p>
      </div>
     </div>
     <div class="col-lg-5 col-md-5 order-md-0 order-1">
      <div class="banner-img">
       <figure class="mb-0">
        <img src="assets/images/blog-banner-img.png" alt="blog-banner-img">
       </figure>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="w-100 float-left single-blog-con position-relative">
  <div class="wrapper">
   <div class="row">
    <div class="col-lg-8 col-md-8">
     <div class="single-blog-details" data-aos="fade-up" data-aos-duration="600">
      <figure>
       <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>">
      </figure>
      <h2 data-aos="fade-up" data-aos-duration="600"><?php print $row['title']; ?></h2>
      <ul class="list-unstyled position-relative d-flex admin-con" data-aos="fade-up"
       data-aos-duration="600">
       <li><i class="fas fa-user"></i> By : <?php print $row['admin_name']; ?></li>
       <li><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?></li>
      </ul>
      <p data-aos="fade-up" data-aos-duration="600" style="text-align: justify;"><?php print $row['news']; ?></p>
     </div>
    </div>

    <div class="col-lg-4 col-md-4">
     <div class="single-generic-box mb-0" data-aos="fade-up" data-aos-duration="600">
      <h3>Popular Posts</h3>
      <div class="recant-post">
       <ul class="list-unstyled mb-0">


        <?php $sql = query_sql("SELECT * FROM $news ORDER BY RAND() LIMIT 4");
        if (mysqli_num_rows($sql) > 0) {
         $c = 0;
         while ($row = mysqli_fetch_assoc($sql)) { ?>
          <li>
           <div class="recant-post-box position-relative">
            <figure class="mb-0">
             <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="recant-post1">
            </figure>
            <div class="recant-post-content">
             <a href="blog-detail?id=<?php print $row['id']; ?>">
              <h4><?php print $bassic->reduceTextLength($row['title'], 20); ?></h4>
             </a>
             <div class="recant-calander"><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?>
             </div>
            </div>
           </div>
          </li>
         <?php $c++;
         }
        } else { ?>
         <h4 style="padding: 20px;">No updates found!</h4>
        <?php } ?>

       </ul>
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