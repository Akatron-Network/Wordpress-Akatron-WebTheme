<?php get_header(); ?>

<?php

if (!empty($_POST)) {
  try {
    $dt = new DateTime("now", new DateTimeZone('Europe/Istanbul'));
    $context = "<table style='min-width: 500px;'>" .
      "<tr> <th style='text-align: left;'>Name:</th> <td>" . htmlspecialchars($_POST["Name"]) . "</td> </tr>" . 
      "<tr> <th style='text-align: left;'>Surname: </th> <td>" . htmlspecialchars($_POST["Surname"]) . "</td> </tr>" .
      "<tr> <th style='text-align: left;'>Mail: </th> <td>" . htmlspecialchars($_POST["Mail"]) . "</td> </tr>" . 
      "<tr> <th style='text-align: left;'>Phone: </th> <td>" . htmlspecialchars($_POST["Phone"]) . "</td> </tr>" . 
      "<tr> <th style='text-align: left;'>Content: </th> <td>" . htmlspecialchars($_POST["Message"]) . "</td> </tr><tr></tr>" . 
      "<tr> <th style='text-align: left;'>Date: </th> <td>" . $dt->format('d/m/Y, H:i:s') . "</td> </tr>" . 
      "<tr> <th style='text-align: left;'>HTTP_X_FORWARD: </th> <td>" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "</td> </tr>" .
      "<tr> <th style='text-align: left;'>REMOTE_ADDR: </th> <td>" . $_SERVER['REMOTE_ADDR'] . "</td> </tr></table>";
    
    $subj = 'Akatron Contact: '. htmlspecialchars($_POST["Name"]) .' '. htmlspecialchars($_POST["Surname"]);

    $ans = wp_mail('info@akatron.net', $subj, $context, array('Content-Type: text/html; charset=UTF-8'));
    if (!$ans) {
      $errorMessage = '<span style="color: red;">Talep gönderilemedi!</span>';
    }
    else {
      $successMessage = '<span style="color: var(--green_pantone); text-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);">Talebiniz alındı!</span>';
    }
  }catch (Exception $e) {
    $errorMessage = $e->getMessage();
  }
}

?>


<?php the_content(); ?>

<?php get_footer(); ?>