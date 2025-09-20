<!DOCTYPE html>
<html lang="zxx">

<?php
require_once('include.php');
$active4 = 'active';
$title = 'Cleaning Tips & Guides | ' . $siteName;
$description = 'Discover expert cleaning tips, home care guides, and professional advice from ' . $siteName . '. Learn how to keep your home, office, and rental spaces sparkling clean.';
$keyword = 'cleaning tips, home cleaning blog, office cleaning guide, Airbnb cleaning tips, eco-friendly cleaning, ' . $siteName . ' blog, professional cleaning advice, post-construction cleaning guide, move in move out cleaning tips, residential cleaning blog';
require_once('head.php');

if (isset($_GET['page'])) {
 $page = $_GET['page'];
} else {
 $page = 1;
}

$no_of_records_per_page = 100;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page); ?>

<body id="switcher-body">
 <?php require_once('loader.php'); ?>
 <?php require_once('header.php'); ?>

 <section id="back-top" class="w-100 float-left banner-con sub-banner gallery-banner position-relative">
  <div class="banner-inner-con position-relative">
   <div class="wrapper2">
    <div class="row">
     <div class="col-lg-7 col-md-7">
      <div class="banner-title">
       <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">Welcome to the Nehoboth Cleaning Services Blog</h1>
       <p class="mb-0" data-aos="fade-up" data-aos-duration="600">Keeping your home, office, or rental property clean shouldn’t feel overwhelming. That’s why we’ve created this blog to share practical cleaning tips, expert advice, and professional insights that make maintaining a fresh and healthy space easier for you.</p>
      </div>
     </div>
     <div class="col-lg-5 col-md-5">
      <div class="banner-img" data-aos="fade-up" data-aos-duration="600">
       <figure class="mb-0">
        <img src="assets/images/blog-banner-img.png" alt="blog-banner-img">
       </figure>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="w-100 float-left blog-con">
  <div class="container">
   <div class="blog-title text-center position-relative">
    <h2 data-aos="fade-up" data-aos-duration="600">You can know more
     <span class="d-block color-01d0cc">about us by our blog</span>
    </h2>
   </div>
   <div class="blog-inner-con position-relative">
    <div class="row">

     <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
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

    <div class="row" style="margin-top: 50px;">
     <div class="col-lg-12">
      <div class="mil-up mil-p-0-f mil-mt-40">
       <ul class="mil-page-pagination">
        <li class="mil-current"><a href="?page=1">1</a></li>
        <li class="<?php if ($page <= 1) {
                    echo 'disabled';
                   } ?>"><a href="<?php if ($page <= 1) {
                                   echo '#';
                                  } else {
                                   echo "?page=" . ($page - 1);
                                  } ?>">Prev</a></li>
        <li><a>...</a></li>
        <li class="<?php if ($page >= $total_pages) {
                    echo 'disabled';
                   } ?>"><a href="<?php if ($page >= $total_pages) {
                                   echo '#';
                                  } else {
                                   echo "?page=" . ($page + 1);
                                  } ?>">Next</a></li>
        <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
       </ul>
      </div>
     </div>
    </div>

   </div>
   <nav aria-label="Page navigation example" id="pagination-demo" data-aos="fade-up" data-aos-duration="600">
   </nav>
  </div>
 </section>

 <?php require_once('footer.php'); ?>
 <?php require_once('script.php'); ?>

</body>

</html>