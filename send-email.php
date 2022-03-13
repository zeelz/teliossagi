  <?php

  function sendEmail($ebook, $email)
  {

    $normalizedName = implode("", explode("-", $ebook));

    $to = $email;
    $subject = "Your eBook is Here - Teliossagi.com";
    $content = "";
    $content .= "<table align='center' style='font-family: Helvetica Neue,sans-serif; color: #303030;'><tr><td>";
    $content .= "<div style='background-image: url(https://naijakidsart.com/teliossagi/book-lib.jpg); height: 50px; margin-top: 10rem;'><p style='background: rgba(0, 0, 0, .6); padding: 11px; font-size: 1.5rem; color: #FFF;text-align: center;'>Teliossagi</p></div>";
    $content .= "<div style='text-align: center; margin-bottom: 2rem; background-color: #def6ff; padding: 5rem 3rem;'>";
    $content .= "<p style='font-size: 2rem; font-weight: bold; margin: 0;'>Here's is your Download</p>";
    $content .= "<p>Thank you for purchasing <strong>" . $normalizedName . "</strong>. We hope it bring much value to you. <br> Click the button below to download the eBook</p>";
    $content .= "<div style='margin-top:3rem;'><a href='https://naijakidsart.com/teliossagi/download.php?file=" . $ebook . ".pdf' style='padding: 12px 32px; border-radius: 50px; color: #ffffff; background-color: #e43c5c; text-decoration: none;'>Click to download eBook</a></div>";
    $content .= "</div>";
    $content .= "<div><p style='text-align: center;'>234 (0) 809 453 9393 <br> Lagos, Nigeria</p></div>";
    $content .= "</td></tr></table>";


    $header = "From:no-reply@naijakidsart.com \r\n";
    $header .= "Cc:sales@naijakidsart.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $header .= "charset: utf-8\r\n";

    $retval = mail($to, $subject, $content, $header);

    if ($retval == true) {

      header("Location: /teliossagi?customer=" . $email . "&reference=" . $_GET['reference']);
    } else {
      header("Location: /teliossagi?error=yes");
    }
  }

  // echo pathinfo('', PATHINFO_FILENAME);

  ?>