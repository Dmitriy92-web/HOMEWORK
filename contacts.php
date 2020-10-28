<?php

$title = "Contacts";
$year= date(Y);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="container top-box">
        <ul class="header">
            <li><a href="index.php"><img src="img/logo.svg" alt="logo"></a></li>
            <li><a href="contacts.php" target="_blank"><img src="img/contact.svg" alt="contact"></a></li>
        </ul>
    </div>

    <div class="contacts-header contacts-header-back">
        <div class="container">
            <h2 class="heading-contacts">Contact Us</h2>
            <p class="text contacts_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut
                labore et dolore magna aliqua.</p>
        </div>

    </div>
    <div class="container main">
        <div class="contacts-info">
            <img src="img/photo_contacts.png" alt="photo">
            <h4 class="heading-mini heading-mini_contacts">ADDRESS</h4>
            <p class="text text_contacts">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            <h4 class="heading-mini heading-mini_phone">PHONE </h4>
            <ul class="margin">
                <li class="padding">8(915)-555-55-55</li>
                <li>8(800)777-77-77</li>
            </ul>
            <h4 class="heading-mini heading-mini_service">ONLINE SERVICE</h4>
            <ul>
                <li class="padding"><a href="mailto:test@domain.local" target="_blank">test@domain.local</a></li>
                <li><a href="https://www.on-lineservice.ru/" target="_blank">Сервис</a></li>
            </ul>
        </div>
        <div class="form_right">
            <h4 class="heading-mini heading-mini-form">SEND US MESSAGE </h4>
            <form class="margin_form" action="#">
                <input class="form padding_form" type="text" size="30" placeholder="Full name"><br>
                <input class="form padding_form" type="email" size="30" placeholder="Email"><br>
                <textarea class="form padding_form" cols="30" rows="5" placeholder="Message "></textarea><br>
                <button class="button" type="submit">submit</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            <script>(function () {
                    var setting = { "height": 250, /*"width": 400,*/ "zoom": 17, "queryString": "улица Юных Ленинцев, 27, Москва, Россия", "place_id": "ChIJhbccogG1SkERkgZJjLZdvmI", "satellite": false, "centerCoord": [55.66666662325058, 37.752707300000004], "cid": "0x62be5db68c490692", "lang": "ru", "cityUrl": "/russia/moscow", "cityAnchorText": "Карта [CITY1], Central Federal District, Россия", "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "259373" };
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=259373';
                    s.async = true;
                    s.onload = function (e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();</script><a href="https://1map.com/ru/map-embed">1 Map</a>
        </div>
    </div>

    <div class="footer footer_contact">
        <div class="container">
            <div class="footer_top">
                <div class="footer_text">
                    <h3 class="heading heading-footer">Intersted to woek with our team?</h3>
                    <p class="text text__footer">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere,
                        praesentium!
                    </p>
                </div>
                <a class="footer__botton" href="#">Let's Talk</a>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="footer_bottom">
                <ul class="footer_info">
                    <li class="grow grow_padding">ул.Юных Ленинцев, д.27</li>
                    <li class="grow grow_padding">8(800)777-77-77</li>
                    <li class="grow">test@domain.local</li>
                </ul>
                <div class="footer_copy">
                    <p class="text_copy">&copy;<?php echo $year;?>&quot;Все права защищены&quot;</p>
                </div>
            </div>
        </div>


    </div>

</body>

</html>