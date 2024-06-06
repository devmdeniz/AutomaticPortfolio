<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Mehmet Deniz Kumcu</title>
  <link rel="icon" href="Image/diklogo.jpg">
  <?php
    $userlanguage = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
    if ($userlanguage == "en") {
    include("./Languages/en.php");
  } else {
    include("./Languages/tr.php");
  }
  ?>
