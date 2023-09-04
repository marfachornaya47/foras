<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8"></script>
    <script src="js/main.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94021293, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/94021293" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <div id="app">

        <div class="uk-position-relative">
            <?php
            include_once "php/navbar.php";
            ?>
        </div>

        <div class="uk-container uk-container-small uk-margin-top">

            <ul class="uk-breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><span></span></li>
            </ul>

            <div class="uk-child-width-expand@s uk-text-center cent-categ-card" uk-grid>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/robotech.php">Робототехника</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/simulators.php">Симуляторы</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/stends.php">Стенды
                        испытательные/обучающие по
                        профессиям</a>
                </div>
            </div>

            <div class="uk-child-width-expand@s uk-text-center cent-categ-card" uk-grid>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/constructors.php">Конструкторы основных
                        наук</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/cvadrocopt.php">Квадрокоптеры</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/laminar.php">Ламинарные боксы</a>
                </div>
            </div>

            <div class="uk-child-width-expand@s uk-text-center cent-categ-card" uk-grid>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/selhoz.php">Сельское хозяйство</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/avtodel.php">Автодело</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/sensor.php">Сенсорные комнаты</a>
                </div>
            </div>

            <div class="uk-child-width-expand@s uk-text-center cent-categ-card" uk-grid>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/mebmet.php">Мебель металлическая</a>
                </div>
                <div>
                    <a class="uk-button uk-button-default inner" href="../pages/others.php">Разное</a>
                </div>
                <div>
                    <!-- <button class="uk-button uk-button-default">Сенсорные комнаты</button> -->
                </div>
            </div>

        </div>

        <?php
        include_once "php/footer.php";
        ?>

    </div>

</body>

</html>