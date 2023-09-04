<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компания</title>
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

    <div class="uk-position-relative">
        <?php
        include_once "php/navbar.php";
        ?>
    </div>

    <div class="uk-container uk-margin-top">
        <ul class="uk-breadcrumb">
            <li><a href="index.php">Главная</a></li>
            <li><a href="company.php">О компании</a></li>
            <li><span></span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-small color-text">
        <h2 class="uk-text-bold uk-margin-top">О компании</h2>

        <p class="uk-text-justify">
            Компания <strong>«Форас»</strong> занимается разработкой, производством и поставкой учебного
            оборудования и учебно-наглядных пособий. <br><br>

            <strong>Наша команда</strong> – это команда профессионалов. Выполняем индивидуальные заказы на поставку
            оборудования по
            запросу заказчика. <br><br>
        </p>
        <div>
            <ul class="uk-list uk-list-circle uk-text-justify uk-margin-medium-bottom">
                <li>Мы индивидуально подходим к каждому клиенту и согласовываем все детали поставки товара перед
                    заключением
                    договора.</li>
                <li>Компания является активным участником приоритетного Национального проекта «Образование» РФ.</li>
                <li>В компании работают высококвалифицированные специалисты – методисты, инженеры, конструкторы,
                    организаторы
                    производства, менеджеры.</li>
            </ul>
        </div>

        <p class="uk-text-justify">
            Наше оборудование включено в поставочный перечень Министерства образования и науки по программам «Кабинет
            физики», «Кабинет химии». Мы продолжаем вести активную работу по модернизации учебного оборудования.</p>

        <div class="centers">
            <div class="clients-card uk-margin-medium-top uk-margin-medium-bottom">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-1">
                        <img src="img/card_client.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <p class="uk-text-justify">
            Хорошо отлаженные взаимоотношения с транспортными компаниями позволяют нам доставлять оборудование
            максимально в кратчайшие сроки. <br><br>

            Наше оборудование превращает учебный кабинет в полноценную рабочую среду с уникальными методическими
            решениями и эргономикой, основанными на последних достижениях электроники и информационных технологий. Оно
            <strong>безопасно для здоровья учащихся, сертифицировано и имеет санитарно-эпидемиологические
                заключения</strong>. <br><br>

            <strong>Комплектация кабинетов физики, химии, биологии и других</strong> составлена как комплексная система
            школьного
            оборудования и учебно-наглядных пособий: представлены демонстрационные и лабораторные приборы,
            принадлежности, оборудование общего назначения, технические средства обучения, специализированная мебель,
            печатные и экранно-звуковые пособия и многое другое. <br><br>

            Мы сами создаем новинки учебных приборов и следим за появлениями таких новинок на российском рынке с тем,
            чтобы самые успешные из них включить в наш прайс-лист и предлагать нашим клиентам.
        </p>
    </div>

    <?php
    include_once "php/footer.php";
    ?>

</body>

</html>