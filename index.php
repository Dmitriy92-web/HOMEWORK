<?php
$topInfo = "New Automation Tool for Your";
$title = "Main";
$year= date(Y);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php
    echo $title;
    ?>
    </title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="top">
        <div class="container top-box">
            <ul class="header">
                <li><a href="index.php"><img src="img/logo.svg" alt="logo"></a></li>
                <li><a href="contacts.php" target="_blank"><img src="img/contact.svg" alt="contact"></a></li>
            </ul>
            <div class="top_info">
                <h1 class="top_heading">
                    <?php 
                echo $topInfo
                ?></h1>
                <p class="text top_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur debitis
                    quod,
                    adipisci
                    deserunt
                    totam ipsa
                    impedit atque rerum, excepturi perferendis beatae voluptates sequi qui vero amet aperiam corrupzti
                    suscipit
                    dolore!</p>
                <a href="#" class="top__button">See Our Project</a>
            </div>
        </div>
    </div>

    <div class="content container">
        <h3 class="heading">What we do to help our client grow in digital era</h3>
        <div class="card-box">
            <div class="card">
                <img src="img/card1.svg" alt="card1" class="card_img">
                <h4 class="heading-mini">Make Your business To Be Better Famous In Internet</h4>
                <p class="text">Выберите для себя наиболее удобный браузер. Я рекомендую пользоваться браузером Google
                    Chrome.
                </p>
                <a href="#" class="card__link">Learn more</a>
            </div>
            <div class="card card_bak">
                <img src="img/card2-1.svg" alt="card2" class="card_img">
                <h4 class="heading-mini">Make Your business To Be Better Famous In Internet</h4>
                <p class="text">Выберите для себя наиболее удобный браузер. Я рекомендую пользоваться браузером Google
                    Chrome.
                </p>
                <a href="#" class="card__link">Learn more</a>
            </div>
            <div class="card">
                <img src="img/card3.svg" alt="card3" class="card_img">
                <h4 class="heading-mini">Make Your business To Be Better Famous In Internet</h4>
                <p class="text">Выберите для себя наиболее удобный браузер. Я рекомендую пользоваться браузером Google
                    Chrome.
                </p>
                <a href="#" class="card__link">Learn more</a>
            </div>
        </div>
    </div>
    <div class="project container">
        <h3 class="heading">Новый заголовок</h3>
        <p class="text text_project">Очень часто при верстке веб-страниц необходимо вкладывать одни теги в другие.</p>

        <div class="project__item">
            <img class="project__img" src="img/project_img1.png" alt="photo">
            <p class="project__text">Smart Home Installation</p>
        </div>
        <div class="project__parent">
            <div class="project__item project__item__margin">
                <img class="project__img" src="img/project_img2.png" alt="photo">
                <p class="project__text2-3">Sparklite App</p>
            </div>
            <div class="project__item">
                <img class="project__img" src="img/project_img3.png" alt="photo">
                <p class="project__text2-3">Car-Rapetition App</p>
            </div>
        </div>
    </div>
    <div class="footer">
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
                <ol>
                    <li>dcdcd</li>
                    <li>dcdcdc</li>
                    <li>dcdcdc</li>
                </ol>
                <div class="footer_copy">
                    <p class="text_copy">&copy;<?php echo $year;?>&quot;Все права защищены&quot;</p>
                </div>
            </div>
        </div>


    </div>
</body>

</html>