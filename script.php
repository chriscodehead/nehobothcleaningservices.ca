<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/unpkg.com_blaze-slider%401.9.3_dist_blaze-slider.dev.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
<script src="assets/css/switcher/js/bootstrap-select.html"></script>
<script src="assets/css/switcher/js/evol.colorpicker.min.html" type="text/javascript"></script>
<script src="assets/css/switcher/js/dmss.html"></script>
<script>
 $('#client-slider').owlCarousel({
  loop: true,
  margin: 30,
  nav: true,
  navText: ["<img src='assets/images/left-arrow.png'>", "<img src='assets/images/right-arrow.png'>"],
  responsive: {
   0: {
    items: 1
   },
   600: {
    items: 2
   },
   1000: {
    items: 3
   }
  }
 })
 $('#service-slider').owlCarousel({
  loop: true,
  margin: 38,
  nav: true,
  navText: ["<img src='assets/images/left-arrow.png'>", "<img src='assets/images/right-arrow.png'>"],
  responsive: {
   0: {
    items: 1
   },
   576: {
    items: 2
   },
   768: {
    items: 3
   },
   992: {
    items: 3
   },
   1200: {
    items: 4
   }
  }
 })
</script>
<script>
 AOS.init();
</script>