<?php require_once('library.php'); ?>
<?php require_once('lib/basic-functions.php'); ?>
<?php require_once('emails_lib.php'); ?>
<?php
if (isset($_POST['emailfgt'])) {
	$emailfgt = $_POST['emailfgt'];
	if (!empty($emailfgt)) {
		$check = $cal->checkifdataExists($emailfgt, 'email', $user_tb);
		if ($check == 1) {
			print $email_call->forgetpassword($emailfgt, $user_tb, 'email');
		} else {
			print '!Oop email address dose not exist in the systems record!';
		}
	} else {
		print 'Enter a valid email!';
	}
}

if (isset($_POST['email'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$name = $fname . ' ' . $lname;
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$wphone = $_POST['wphone'];
	$address = $_POST['address'];
	$sdate = $_POST['sdate'];
	$services = $_POST['selected'];
	$subject = ucfirst(strtolower($name)) . ' Contacted you! and wants to chat';
	$message = $_POST['message'];
	$passh = uniqid();
	$username = uniqid();
	$blocked_account = 0;
	if (!empty($_POST['email']) && !empty($_POST['message'])) {
		print $email_call->contactUsMail($name, $phone, $email, $subject, $message);

		$feilds = array('id', 'user_code', 'first_name', 'last_name', 'email', 'password', 'date_reg', 'phone', 'blocked_account', 'client_username', 'message', 'address', 'whatsapp_num', 'appointmenta_date');

		$value = array(null, $bassic->randGenerator(), $fname, $lname, $email, $passh, $bassic->getDate(), $phone, $blocked_account, $username, $message, $address, $wphone, $sdate);

		$result = $cal->insertDataB($user_tb, $feilds, $value);

		if ($result === 1) {
			print 'Thank you for reaching out to ' . $siteName . '. We’ve received your details, and our team will contact you shortly to discuss your service request and provide the support you need.';
		} else {
			print  'Please fill all fields';
		}
	} else {
		print  'Please fill all fields';
	}
}

if (isset($_POST['appointmentMail'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$subject = ucfirst(strtolower($name)) . ' Books Appointment!';
	$message = $_POST['message'];
	$datepicker = $_POST['datepicker'];
	$doctor = $_POST['doctor'];
	$department = $_POST['department'];
	if (!empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['phone']) && !empty($_POST['name']) && !empty($_POST['datepicker'])) {
		print $email_call->appointmentMail($name, $phone, $email, $subject, $message, $doctor, $datepicker, $department);
	} else {
		print  'Please fill all fields';
	}
}
?>