  <?php

  function sendEmail($ebook)
  {

    $to = "dannyandk@gmail.com";
    $subject = "This is subject";

    $message = "<b>This is HTML message.</b>";
    $message .= "<h1>This is headline.</h1>";
    $message .= '<br><a href="https://naijakidsart.com/teliossagi/download.php?file= ' . $ebook . '.pdf">Download WIRE-WIRE ebook</a>';
    $message .= '<br><img src="https://naijakidsart.com/teliossagi/AccessCard.png" alt="Access Card">';

    $header = "From:no-reply@naijakidsart.com \r\n";
    $header .= "Cc:sales@naijakidsart.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $header .= "charset: utf-8\r\n";

    $retval = mail($to, $subject, $message, $header);

    if ($retval == true) {
      echo "Message sent successfully..";
    } else {
      echo "Message could not be sent...";
    }
  }

  // echo pathinfo('', PATHINFO_FILENAME);

  ?>