
<?php

$content = "";

$content .= "<table align='center' style='font-family: Helvetica Neue,sans-serif; color: #303030;'><tr><td>";
$content .= "<div style='background-image: url(book-lib.jpg); height: 50px; margin-top: 10rem;'><p style='background: rgba(0, 0, 0, .6); padding: 11px; font-size: 1.5rem; color: #FFF;text-align: center;'>Teliossagi</p></div>";
$content .= "<div style='text-align: center; margin-bottom: 2rem; background-color: #def6ff; padding: 5rem 3rem;'>";
$content .= "<p style='font-size: 2rem; font-weight: bold; margin: 0;'>Here's is your Download</p>";
$content .= "<p>Thank you for purchasing ###. We hope it bring much value to you. <br> Click the button below to download the eBook</p>";
$content .= "<div style='margin-top:3rem;'><a href='#' style='padding: 12px 32px; border-radius: 50px; color: #ffffff; background-color: #e43c5c; text-decoration: none;'>Click to download eBook</a></div>";
$content .= "</div>";
$content .= "<div><p style='text-align: center;'>234 (0) 809 453 9393 <br> Lagos, Nigeria</p></div>";
$content .= "</td></tr></table>";

echo $content;

header("Location: /?foo=bar&city=lagos");
?>
