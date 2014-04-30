<!DOCTYPE html>
<html lang="en">
<head>   <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-theme.min.css" rel="stylesheet">
</head>				
					
<?php

$to_email = "YourEmail@YourWebsite.com";
$from_email =  $_POST['email'];
$subject = "You just received a message from your website.";
$message =  $_POST['message'];
if ($_POST['message']) {
				mail($to_email, $subject, $message, $from_email);
				}
?>
<body>			
<div class="row">
  <div class="col-xs-6">
		
		<div class="col-sm-4">
		</div>
		<div class="col-sm-8">
		<?php
		
		if ($_POST['message']) {
echo "<strong>Your message has been sent!</strong>";
}
?>
</div>

<form class="form-horizontal" role="form" method="post" action="contactform.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Your Email</label>
    <div class="col-sm-8">
      <input type="from_email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Your Message</label>
    <div class="col-sm-8">
		<textarea name="message" class="form-control" cols="20" rows="4"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

</div>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
