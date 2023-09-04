<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="icon" href="img/icon1.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css?v=1.4">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/js/uikit-icons.min.js"></script>

</head>

<body>

    <div class="uk-position-relative">
        <?php
        include_once "../php/navbar.php";
        ?>
    </div>

    <div class="uk-container uk-margin-top">

        <ul class="uk-breadcrumb">
            <li><a href="../index.php">Главная</a></li>
            <li><a href="../catalog.php">Каталог</a></li>
            <li><a href="../pages/robotech.php">Робототехника</a></li>
            <li><a href="../products/roboduinoR3.php">Yahboom Roboduino Uno R3</a></li>
        </ul>


        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow style="height:500px; padding-top: 5rem;">

                <ul class="uk-slideshow-items" style="margin: 0px auto;width:300px;height:200px;margin-top: 50px;text-align:center;">
                    <li>
                        <img src="../img/r1.jpg" alt="">
                    </li>
                    <li>
                        <img src="../img/r2.jpg" alt="">
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slideshow-item="next"></a>

            </div>
            <div>
                <h3><strong>Умный робот Yahboom Roboduino Uno R3 с WiFi-камерой, совместимый с Arduino UNO</strong></h3>
                <p align="justify">
                    Автомобильный комплект для интеллектуального робота Roboduino - это обучающий и забавный комплект,
                    основанный на плате расширения привода робота Yahboom (совместимой с Arduino UNO).
                    Он содержит красочный ультразвуковой модуль, который объединяет свет и обнаружение RGB,
                    3-канальный модуль отслеживания, ИК-контроллер, модуль камеры WIFI, платформа 2DOF и
                    другие компоненты, которые позволяют автомобилю осуществлять интеллектуальное отслеживание
                    и автоматическое предотвращение, холодный свет, пение зуммера, ИК-управление и т. Д.
                    Мы специально разработали приложение iOS / Android для автомобиля Roboduino, и использовал
                    его с модулем камеры WIFI и платформой 2DOF. Он может передавать захваченное видео в
                    интерфейс приложения для отображения, а также снимать фотографии и видео.
                    <br>
                    <br>
                   <strong>Узнать цену и другие подробности можно оставив заявку.</strong>
                </p>
                <button class="uk-button uk-button-secondary btn-blue">Оставить заявку</button>
            </div>

        </div>

    </div>

    <?php
    include_once "../php/footer.php";
    ?>

</body>

</html>