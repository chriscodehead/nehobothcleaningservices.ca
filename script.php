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

<script>
 function appointmentMail() {
  $('i#sp5').attr("class", "fa fa-spinner fa-spin");
  var hr = new XMLHttpRequest();
  var url = "reg_process.php";
  var email = document.getElementById('email').value;
  var name = document.getElementById('name').value;
  var datepicker = document.getElementById('date').value;
  var doctor = document.getElementById('doctor').value;
  var department = document.getElementById('department').value;
  var phone = document.getElementById('phone').value;
  var message = document.getElementById('message').value;
  var appointmentMail = 'appointmentMail';

  var vars = "email=" + email + "&name=" + name + "&message=" + message + "&phone=" + phone + "&datepicker=" + datepicker + "&doctor=" + doctor + "&department=" + department + "&appointmentMail=" + appointmentMail;
  if (email == "" || name == "" || message == "") {
   sweetUnpre("Please fill all necessary fields!");
   $('i#sp5').attr("class", "");
  } else {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if (!emailReg.test(email)) {
    sweetUnpre('Please use a valid email address!');
    $('i#sp5').attr("class", "");
   } else {

    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
     //  console.log(hr);
     if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
      sweetUnpre(return_data);
      $('i#sp5').attr("class", "");
      //setTimeout(refreshPage,2000);
      if (return_data == 'Internal error. Mail fail to send') {

      } else {
       document.getElementById('email').value = "";
       document.getElementById('name').value = "";
       document.getElementById('message').value = "";
       document.getElementById('date').value = "";
       document.getElementById('doctor').value = "";
       document.getElementById('department').value = "";
       document.getElementById('phone').value = "";
      }
     }
    }
    hr.send(vars); // Actually execute the request
   } //email
   sweetUnpre('processing...');
  } //else empty
 }
</script>

<script>
 function contatMail() {
  var hr = new XMLHttpRequest();
  var url = "reg_process.php";
  var email = document.getElementById('email').value;
  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  var phone = document.getElementById('phone').value;
  var message = document.getElementById('message').value;
  var wphone = document.getElementById('wphone').value;
  var address = document.getElementById('address').value;
  var sdate = document.getElementById('sdate').value;
  var selected = document.getElementById("select").value;
  var vars = "email=" + email + "&fname=" + fname + "&message=" + message + "&selected=" + selected + "&phone=" + phone + "&wphone=" + wphone + "&address=" + address + "&sdate=" + sdate + "&lname=" + lname;
  if (email == "" || fname == "" || message == "") {
   sweetUnpre("Please fill all necessary fields!");
  } else {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if (!emailReg.test(email)) {
    sweetUnpre('Please use a valid email address!');
   } else {
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
     //  console.log(hr);
     if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
      sweetUnpre(return_data);
      //setTimeout(refreshPage,2000);
      if (return_data == 'Internal error. Mail fail to send') {

      } else {
       document.getElementById('email').value = "";
       document.getElementById('fname').value = "";
       document.getElementById('lname').value = "";
       document.getElementById('message').value = "";
       document.getElementById('phone').value = "";
       document.getElementById('wphone').value = "";
       document.getElementById('address').value = "";
       document.getElementById('sdate').value = "";
      }
     }
    }
    hr.send(vars); // Actually execute the request
   } //email
   sweetUnpre('processing...');
  } //else empty
 }
</script>