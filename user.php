<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/jquery.event.move.js" type="text/javascript"></script>
<script src="js/jquery.twentytwenty.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/twentytwenty.css" type="text/css" media="screen" />
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>COUNTER STRIKE 2</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
                <a href="sign.html"><button type="button" class="btn btn-light"><?php
session_start();
if (isset($_SESSION['user'])) {
    echo("Вы вошли как " . $_SESSION['user']['nick']);
} else {
    echo("Вы не авторизированы.");
}?></button></a>
            </form>
          </div>
        </div>
      </nav>
    <section id="hero" class="d-flex align-items-center justify-content-center">
    </section>
    <section id="bou" class="d-flex align-items-center justify-content-center min-vh-180">
      <div class="container fade-in">
          <div class="row justify-content-center">
              <div class="col-lg-8 d-flex justify-content-center align-items-center">
                  <!-- Apply Bootstrap classes for centering -->
                  <div class="square">
                      <h1>НОВАЯ ЭРА <b>COUNTER-STRIKE</b> НАЧИНАЕТСЯ ЭТИМ ЛЕТОМ</h1>
                      <h6>Counter-Strike 2 — это крупнейший технический скачок в истории серии,
                          обеспечивающий игру новыми возможностями и контентом на годы вперёд.</h6>
                      <h6>Все новые функции игры будут представлены во время официального выпуска этим летом, но путь
                          к Counter-Strike 2 начинается сегодня, с ограниченного теста. Тестирование,
                          доступное избранным игрокам в CS:GO, позволит оценить возможности Counter-Strike 2 и выправить
                          недочёты перед глобальным выпуском.</h6>
                      <h6>Counter-Strike 2 — это бесплатное улучшение CS:GO, которое выйдет
                          этим летом. Так что собирайте снаряжение, оттачивайте своё мастерство
                          и готовьтесь к грядущему!</h6>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section id="meny" class="d-flex align-items-center justify-content-center  min-vh-180" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex justify-content-center align-items-center">
                <div class="cs">
                    <iframe width="100%" height="30%" src="https://www.youtube.com/embed/_y9MpNcAitQ" title="Counter-Strike 2: Responsive Smokes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-text-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <h6 class="mb-3">Игровой процесс</h6>
                                    <p class="mb-4">Новый эффект дыма взаимодействует с другими элементами игры, открывая простор для новых тактик. Пули и гранаты разгоняют дым, расширяя завесу или ненадолго рассеивая её.</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="https://cdn.akamai.steamstatic.com/apps/csgo/images/csgo_react/cs2/smokes_vid2.webm" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="https://cdn.akamai.steamstatic.com/apps/csgo/images/csgo_react/cs2/smokes_vid1.webm" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <div class="text-content text-center">
                                    <h6 class="mb-3">Естественное заполнение пространства</h6>
                                    <p class="mb-4">Теперь дым будет расходиться через открытые двери и выбитые окна, спускаться и подниматься по лестницам, тянуться по коридорам и смешиваться с дымом от других гранат.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-content text-center">
                                    <h6 class="mb-3">Реакция на освещение</h6>
                                    <p class="mb-4">Частицы дыма в Counter-Strike 2 работают с единой системой освещения, из-за чего реалистичнее влияют на свет и цвет.</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="https://cdn.akamai.steamstatic.com/apps/csgo/images/csgo_react//cs2/smokes_vid3.webm" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/java.js"></script>
<div class="footer">
  <p>&copy; 2023 Your Company. All rights reserved.</p>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>