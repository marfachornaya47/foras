<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@s" uk-grid="masonry: true"
    uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 50">
    <?php

    while ($record = mysqli_fetch_assoc($resultset)) { ?>
        <div>

            <div class="uk-card uk-card-default uk-text-center uk-card-hover">
                <div class="uk-card-media-top">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow>
                        <ul class="uk-slideshow-items card-img-s">
                            <?php if ($record['img_name1'] != null && $record['img_name2'] != null && $record['img_name3'] != null) { ?>
                                <li>
                                    <img src="../img/<?php echo $record['img_name1']; ?>" alt="">
                                </li>
                                <li>
                                    <img src="../img/<?php echo $record['img_name2']; ?>" alt="">
                                </li>
                                <li>
                                    <img src="../img/<?php echo $record['img_name3']; ?>" alt="">
                                </li>
                            <?php } elseif ($record['img_name1'] != null && $record['img_name2'] != null && $record['img_name3'] == null) { ?>
                                <li>
                                    <img src="../img/<?php echo $record['img_name1']; ?>" alt="">
                                </li>
                                <li>
                                    <img src="../img/<?php echo $record['img_name2']; ?>" alt="">
                                </li>
                            <?php } elseif ($record['img_name1'] != null && $record['img_name2'] == null && $record['img_name3'] == null) { ?>
                                <li>
                                    <img src="../img/<?php echo $record['img_name1']; ?>" alt="">
                                </li>
                            <?php } ?>
                        </ul>

                        <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-next uk-slideshow-item="next"></a>

                    </div>
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">
                        <?php echo $record['product_name']; ?>
                    </h3>
                    <p>
                        <?php echo $record['short_desc']; ?>
                    </p>
                    <button class="uk-button uk-button-secondary btn-test"><a href="#<?php echo $record['href']; ?>"
                            uk-toggle>Подробнее</a></button>

                    <div id="<?php echo $record['href']; ?>" class="uk-modal-container" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-child-width-expand@s" uk-grid>
                                <div uk-slideshow="min-height: 500; animation: fade">

                                    <div class="uk-position-relative uk-visible-toggle uk-black" tabindex="-1">

                                        <ul class="uk-slideshow-items uk-text-center">
                                            <?php if ($record['img_name1'] != null && $record['img_name2'] != null && $record['img_name3'] != null) { ?>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name1']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name2']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name3']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                            <?php } elseif ($record['img_name1'] != null && $record['img_name2'] != null && $record['img_name3'] == null) { ?>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name1']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name2']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                            <?php } elseif ($record['img_name1'] != null && $record['img_name2'] == null && $record['img_name3'] == null) { ?>
                                                <li>
                                                    <img src="../img/<?php echo $record['img_name1']; ?>"
                                                        style="padding-top: 5rem;" alt="">
                                                </li>
                                            <?php } ?>
                                        </ul>

                                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                            uk-slidenav-previous uk-slideshow-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                            uk-slidenav-next uk-slideshow-item="next"></a>

                                    </div>

                                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

                                </div>

                                <div>
                                    <h3><strong>
                                            <?php echo $record['product_name']; ?>
                                        </strong></h3>
                                    <p align="justify">
                                        <?php echo $record['full_desc']; ?>
                                    </p>
                                    <strong align="justify">Узнать цену и другие подробности можно оставив
                                        заявку.</strong>
                                    <button class="uk-button uk-button-secondary btn-blue uk-margin-medium-top"
                                        href="#modal-center" uk-toggle>Оставить заявку</button>


                                    <div id="modal-center" class="uk-flex-top" uk-modal>
                                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                            <button class="uk-modal-close-default" type="button" uk-close></button>

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
                                                    <th>Сообщение</th>
                                                    </tr>
                                                    <tr>
                                                    <td>{$_REQUEST['firstname']}</td>
                                                    <td>{$_REQUEST['lastname']}</td>
                                                    <td>{$_REQUEST['phonenumber']}</td>
                                                    <td>{$_REQUEST['emailadress']}</td>
                                                    <td>{$_REQUEST['message']}</td>
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
                                                    <label class="uk-form-label" for="form-stacked-text">Ваше
                                                        имя</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" name="firstname" type="text" id="firstname" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2@s">
                                                    <label class="uk-form-label" for="form-stacked-text">Ваша
                                                        фамилия</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" name="lastname" type="text" id="lastname" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <label class="uk-form-label" for="form-stacked-text">Номер
                                                        телефона</label>
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
                                                    <label class="uk-form-label" for="form-stacked-text">Сообщение</label>
                                                    <div class="uk-form-controls">
                                                        <textarea class="uk-textarea" rows="3" name="message" type="text" id="message"
                                                            aria-label="Textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <button class="uk-button uk-button-secondary uk-width-1-1 btn-blue" type="submit" name="submit">
                                                        Оставить заявку</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>