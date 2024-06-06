<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<?php
include("./sections/head.php")
?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body class="container-fluid body_section">
          <?php 
          include("./sections/header.php");
          
          ?>
          <section id = "Home">
              <div class="row column1">
                <div class="col-lg-6 col-md-6 first-image">
                    <img class = "boyimage" src="Image/20200630_162659.gif" alt="">
                </div>  
                  <div class="col-lg-6 section-1">
                      <h1 class = "Hello"><?=$language["hello"];?><span class="wave">👋</span></h1>
                      <p><?=$language["hello_desc"];?></p>
                          <div class=social_media_icon>
                            <a class="btn" href="https://www.instagram.com/dev.mdeniz/" target=_blank>
                              <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn" href="https://www.linkedin.com/in/mehmetdenizkumcu/" target=_blank>
                              <i class="fab fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a class="btn" href="https://github.com/devmdeniz" target=_blank>
                              <i class="fab fa-github"></i>
                            </a>
                            <a class="btn" href="mailto:deniz@dikholding.com" target=_blank>
                            <i class="fas fa-envelope"></i>
                            </a>
                          </div>
                  </div>
                  <div class="Image-boy col-lg-6"><img class="boy" src="Image/Boy-image.png" alt=""></div>
              </div>
          </section>


          <section id=Whatido>
            <hr>
              <div class = "row feature-1">
                  <div class="col-lg-6 col-md-6 Feature-first-image">
                  <video width="500px" height="500px" class="Feature-svg-image" autoplay loop muted>
  <source src="Image/global_animated.mp4" type="video/mp4">
</video>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <h1 class= "Feature-Heading" ><?=$language["what_dikholding"];?></h1>
                    <div class = "Data-Analytic">
                      <p class ="Features-paragraph"><?=$language["what_dikholding_desc"];?></p>
                      <p  class ="Features-paragraph"><?=$language["what_dikholding_desc2"];?></p>
                      <p  class ="Features-paragraph"><?=$language["what_dikholding_desc3"];?></p>
                      </div>
                </div>
              </div>
              <div class="row feature-3">
                <div class = "col-lg-6 col-md-6 Feature-third-image">
                    <img class = "Feature-svg-image-3" src="Image/Coding.svg" alt="">
                  </div>
                  <div class="col-lg-6 col-md-6 feature-coding">
                    <h1 class="Feature-Heading"><?=$language["team"];?></h1>
                    <div class = "Data-Analytic">
                      <p class ="Features-paragraph">
                      <?=$language["team_desc"];?></p>
                      <p  class ="Features-paragraph">
                      <?=$language["team_desc2"];?></p>
                        </div>
                  </div>
              </div>
               
        
          </section>
</body>
</html>
