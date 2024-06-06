<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("./sections/head.php");
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Education.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Montserrat:wght@400;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body class="container-fluid body_section">
   <?php
   include("./sections/header.php");
   
   ?>
    <section id=Section1>
        <div class="row">
            <div class="col-lg-6 col-md">
                <img class="Programming" src="Image/Programming.svg" alt="">
            </div>
            <div class="col-lg-6 col-md Coding">
                <h1><?=$language["hereismystory"];?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="Heading">
                <h1><?=$language["education"];?></h1>
                <br>
            </div>
            <div class="timeline">
                <div class="timeline-month">
                <?=$language["education"];?>
                </div>
                <div class="timeline-section">
                    <div class="timeline-date">
                        2023 - 2027
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="timeline-box">
                                <div class="box-title">
                                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>Sivas Cumhuriyet Üniversitesi
                                    <p class="degree">Bilişim Sistemleri ve Teknolojileri</p>
                                </div>
                                <div class="box-content">
                                    <!-- <a class="btn btn-sm btn-dark float-right" role="button" href="https://jcboseust.ac.in/" -->
                                       <!-- target=_blank style="color: white;">Website</a> -->
                                    <div class="box-item">💥 Üniversitem esnasında 3 adet Tübitak, 1 Adet Teknofest Projesi yaptım.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="Heading">
                <h1><?=$language["worklife"];?></h1>
                <br>
            </div>
            <div class="timeline">
                <div class="timeline-month">
                <?=$language["workcompany"];?>
                </div>
                <div class="timeline-section">
                    <div class="timeline-date">
                        2022 - 2023
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="timeline-box">
                                <div class="box-title">
                                    <i class="fas fa-school" aria-hidden="true"></i>Muhasebe Şirketi
                                    <p class="degree">Muhasebe Yardımcı Elemanı</p>
                                </div>
                                <div class="box-content">
                                    <!-- <a class="btn btn-sm btn-dark float-right" role="button" href="https://jcboseust.ac.in/" -->
                                       <!-- target=_blank style="color: white;">Website</a> -->
                                    <div class="box-item">💥 Babamın yanında Muhasebe öğrenmek için çalıştım.</div>
                                    <!-- <div class="box-item"><b>💥 CGPA</b>: 7.14 </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-section">
                    <div class="timeline-date">
                        2022 - 2023
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="timeline-box">
                                <div class="box-title">
                                    <i class="fas fa-school" aria-hidden="true"></i>Papitya Bilişim
                                    <p class="degree">Co-Founder / Backend Developer</p>
                                </div>
                                <div class="box-content">
                                    <a class="btn btn-sm btn-dark float-right" role="button"
                                        style="color: white;">Detaylar</a>
                                    <div class="box-item">💥 İlk başta backend developer olarak çalışmaya başladığım bu şirkette hevesim ve bilgim sayesinde Co-Founder seviyesine kadar geldim. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-section">
                    <div class="timeline-date">
                        2023 - Halen
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="timeline-box">
                                <div class="box-title">
                                    <i class="fas fa-school" aria-hidden="true"></i>World İlkevim Gayrimenkul
                                    <p class="degree">Co-Founder / Backend Developer</p>
                                </div>
                                <div class="box-content">
                                    <a class="btn btn-sm btn-dark float-right" role="button"
                                        style="color: white;">Detaylar</a>
                                        <div class="box-item">💥 Yöneticilere gerek kalmayacak kadar detaylı bir Otomasyon sistemi yazdım.</div>
                                        <div class="box-item">💥 Çalışana belirlenmiş performans ölçüm sistemini kullanarak ödül veya ceza verebilen bir sistem kodladım.</div>
                                        <div class="box-item">💥 Çalışan eğer kötü performans verirse otomatik çıkışını veren bir sistem kodladım.</div>
                                        <div class="box-item">💥 Bunların yanında sosyal medya danışmanlığı da verdim.</div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-section">
                    <div class="timeline-date">
                        2023 - Halen
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="timeline-box">
                                <div class="box-title">
                                    <i class="fas fa-school" aria-hidden="true"></i>DIK Holding
                                    <p class="degree">CTO / Co-Founder</p>
                                </div>
                                <div class="box-content">
                                    <a class="btn btn-sm btn-dark float-right" role="button"
                                        style="color: white;">Detaylar</a>
                                        <div class="box-item">💥 Türkiye'nin gelişimini hızlandıracak ve eksikliklerini kapatacak, herkese adil ve eşit fırsatlar vermeyi planlayan bir startup.</div>
                                        <div class="box-item">💥 Türkiye'nin İLKlerini yapacak olan firma.</div>
                                        <div class="box-item">💥 Gelişmeler için beklemede kalın ve bizi <label class="redtext">BEKLEYIN</label></div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
