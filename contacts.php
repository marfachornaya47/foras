<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
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
            <li><a href="contacts.php">Контакты</a></li>
            <li><span></span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-small" style="@media (min-width: 600px) {height: 70%;}">
        <h2 class="uk-text-bold uk-margin-top">Контакты</h2>

        <h4 class="uk-margin-top">Вы можете оставить заявку или самостоятельно обратиться к менеджеру.
        </h4>

        <div class="uk-child-width-expand@s" uk-grid>
            <div>
                <h4 class="uk-text-bold uk-margin-large-top">Контакты менеджера</h4>
                <p>Телефон: +7 (914) 700-56-36</p>
                <p>Почта: 177888@inbox.ru</p>
            </div>
            <div class="uk-grid-item-match">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-text-center">Мы свяжемся с Вами</h3>

                    <?php

                    if (isset($_POST["submit"])) {

                        $admin = "admin@forascompany.ru";
                        $subject = "Заявка от клиента";
                        $mess = "
                      <h1>Клиент оставил заявку</h1>
                      <style>
                        th,
                        td {
                          border: 1px solid rgb(73, 73, 73);
                        }
                        table{
                          width: 500px;
                          background-color: rgb(236, 236, 236);
                        }
                        
                      </style>
                      <table>
                        <tr>
                          <th>Имя</th>
                          <th>Фамилия</th>
                          <th>Номер телефона</th>
                          <th>Почта</th>
                        </tr>
                        <tr>
                          <td>{$_REQUEST['firstname']}</td>
                          <td>{$_REQUEST['lastname']}</td>
                          <td>{$_REQUEST['phonenumber']}</td>
                          <td>{$_REQUEST['emailadress']}</td>
                        </tr>
                      </table>";

                        function adopt($text)
                        {
                            return '=?UTF-8?B?' . Base64_encode($text) . '?=';
                        }

                        $headers = "Content-Type: text/html; charset=utf-8" . PHP_EOL .
                            'From: ' . adopt($subject) . ' <' . $admin . '>' . PHP_EOL .
                            'Reply-To: ' . $admin . '' . PHP_EOL;

                        mail($admin, $subject, $mess, $headers);

                        echo '<script type="text/javascript">document.location.href = "http://forascompany.ru/reviewsSend.html"</script>';

                    }

                    ?>

                    <form class="uk-grid-small" method="post" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label" for="form-stacked-text">Ваше имя</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="firstname" type="text" id="firstname" placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label" for="form-stacked-text">Ваша фамилия</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="lastname" type="text" id="lastname" placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label" for="form-stacked-text">Номер телефона</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="phonenumber" type="text" id="phonenumber" placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label" for="form-stacked-text">Почта</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="emailadress" type="text" id="emailadress" placeholder="">
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-button uk-button-secondary uk-width-1-1 btn-blue" type="submit"
                                name="submit">
                                Оставить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php
    include_once "php/footer.php";
    ?>

</body>

</html>