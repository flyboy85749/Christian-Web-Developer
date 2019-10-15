<?php
$email_from = $_POST['email'];

// send email
mail("bill@christianwebdeveloper.com","Newsletter Signup",$email_from);
?> 