<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="icon" href="img/favicon.png">
 <link rel="stylesheet" href="use.fontawesome.com/releases/v5.15.4/css/all.css">
 <title><?php print $title; ?></title>
 <link rel="stylesheet" href="assets/css/unpkg.com_blaze-slider%401.9.3_dist_blaze.css">
 <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="assets/css/aos.css">
 <link rel="stylesheet" href="assets/css/superclasses.css">
 <link rel="stylesheet" href="assets/css/custom.css">
 <link rel="stylesheet" href="assets/css/mobile.css">

 <meta name="description" content="<?php print @$description; ?>" />
 <meta name="keywords" content="<?php print @$keyword; ?>" />
 <meta name="Classification" content="Cleaning Services">
 <meta name="target" content="Cleaning Services companies">
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
 <meta name="GOOGLEBOT" content="index follow" />
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="bingbot" content="index follow" />
 <meta name="Slurp" content="index follow" />

 <meta property="fb:app_id" content="">
 <meta property="og:locale" content="en_US" />
 <meta property="og:site_name" content="<?php print @$siteName; ?>" />
 <meta property="og:title" content="<?php print @$title; ?>" />
 <meta property="og:type" content="article" />
 <meta property="og:description" content="<?php print @$description; ?>" />
 <meta property="og:url" content="<?php print @$siteDomain; ?>">
 <meta property="og:image" content="<?php print @$siteDomain; ?>img/favicon.png">
 <meta property="og:image:secure_url" content="<?php print @$siteDomain; ?>img/favicon.png" />
 <meta property="og:image:width" content="600" />
 <meta property="og:image:height" content="415" />

 <meta name="twitter:card" content="<?php print @$siteName; ?>" />
 <meta name="twitter:title" content="<?php print @$title; ?>" />
 <meta name="twitter:url" content="<?php print @$siteDomain; ?>">
 <meta name="twitter:description" content="<?php print @$description; ?>" />
 <meta name="twitter:image" content="<?php print @$siteDomain; ?>img/favicon.png" />
 <meta name="twitter:domain" content="<?php print @$siteDomain; ?>">
 <meta name="twitter:creator" content="<?php print @$siteName; ?>">
 <meta itemprop="name" content="<?php print @$siteName; ?>">
 <meta itemprop="description" content="<?php print @$description; ?>">
 <meta itemprop="image" content="<?php print @$siteDomain; ?>img/favicon.png">
 <link rel="stylesheet" href="toast/jquery.toast.css">
 <link href="sweetalert-js/sweetalert.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="sweetalert-js/sweetalert.min.js"></script>
 <script type="text/javascript">
  function sweetUnpre(msg) {
   swal(
    msg
   );
  }
 </script>
 <style>
  .iimg {
   width: 350px;
   height: 343px;
   object-fit: cover;
   transition: transform 0.3s ease;
   /* smooth animation */
   border-radius: 5px;
   /* optional */
  }

  .iimg:hover {
   transform: scale(1.1);
   /* expands the image by 10% */
  }

  /* Pagination container */
  .mil-page-pagination {
   list-style: none;
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 8px;
   /* space between items */
   padding: 0;
   margin: 20px 0;
  }

  /* Pagination items */
  .mil-page-pagination li {
   display: inline-block;
  }

  /* Links */
  .mil-page-pagination li a {
   display: block;
   padding: 8px 14px;
   background: #f5f5f5;
   color: #333;
   border-radius: 6px;
   text-decoration: none;
   font-size: 14px;
   font-weight: 500;
   transition: all 0.3s ease;
   border: 1px solid #ddd;
  }

  /* Hover effect */
  .mil-page-pagination li a:hover {
   background: #007bff;
   /* primary blue */
   color: #fff;
   border-color: #007bff;
  }

  /* Active page */
  .mil-page-pagination li.mil-current a {
   background: #007bff;
   color: #fff;
   font-weight: bold;
   border-color: #007bff;
   cursor: default;
  }

  /* Disabled state */
  .mil-page-pagination li.disabled a {
   background: #e9ecef;
   color: #aaa;
   pointer-events: none;
   border-color: #ddd;
   cursor: not-allowed;
  }
 </style>
</head>