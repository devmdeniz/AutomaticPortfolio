<!DOCTYPE html>
<html lang="en">

    <head>
    <?php
include("./sections/head.php")
?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="Project.css">

        <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </head>
      <body class="container-fluid body_section">
<?php
include("./sections/header.php");
?>
                <section id=Projects class="Section1">
                  <h3><a href="https://github.com/devmdeniz">Projelerim:</a></h3>
                    <div class="row Section1">
                      <!-- <div class="col-sm-6">
                        <a class="Project-box" target="_blank" href="https://github.com/AjitVerma15/Advance-Attendence-System">
                        <div class="card boxx">
                          <div class="card-body">
                            <h5 class="card-title">Advanced Attendence System</h5>
                            <p class="card-text project-text">This project makes the traditional attendence system advance by including features
                              like marking attendence of students automatically using face recognition and detection.
                              <span class="iconify" data-icon="logos:python" data-inline="false"></span>
                            </p>

                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a  class="Project-box" target="_blank" href="https://github.com/AjitVerma15/Telegram-Bot" >
                        <div class="card boxx">
                          <div class="card-body">
                            <h5 class="card-title">Telegram Bot</h5>
                            <p class="card-text project-text">This bot gives news on diferent topics like sports, entertainment, according to location and can do small-talk and also
                              show the covid cases in your state.<span class="iconify" data-icon="logos:python" data-inline="false"></span><img class="iconify" src="Image/dialogflow.png" alt=""></p>
                          </div>
                        </div>
                      </a>
                      </div> -->
                      <?php
                      // GitHub kullanıcı adı
                      include("./config.php");
$username = github_username;
$url = "https://api.github.com/users/$username/repos";

// cURL kullanarak API çağrısı yapın
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP');
$response = curl_exec($ch);
curl_close($ch);

// JSON yanıtını PHP dizisine dönüştürün
$repos = json_decode($response, true);

// HTML şablonunuzu oluşturun ve verileri yazdırın
foreach ($repos as $repo) {
  if($repo["name"] != "devmdeniz"){
  // Proje başlığı ve açıklaması
  $title = htmlspecialchars($repo['name']);
  $description = htmlspecialchars($repo['description']);
  $html = <<<HTML
  <div class="col-sm-6">
      <a class="Project-box" target="_blank" href="{$repo['html_url']}">
          <div class="card boxx">
              <div class="card-body">
                  <h5 class="card-title">$title</h5>
                  <p class="card-text project-text">$description</p>
              </div>
          </div>
      </a>
  </div>
  HTML;
  echo $html;
}}
                      ?>
                    </div>
                </section>


</body>
</html>
