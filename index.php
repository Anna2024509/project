<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header class="container navbar navbar-expand-lg">
    <a href="#" class="logo">
        <img src="images/Logo.png" alt="" class="logo__image">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="nav-panel collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="nav-info">
            <p class="nav-info__phone">+7 (351) 240-12-12</p>
            <div class="nav-info__buttons">
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="images/icon_vk.png" alt="">
                </a>
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="images/icon_vk.png" alt="">
                </a>
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="images/icon_vk.png" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="nav-menu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        О центре
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="search-form d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск..." aria-label="Search">
                <button class="btn" type="submit"><img class="btn_search" src="images/icon_lupa.png" alt=""></button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
    <div class="preview-block">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2><b>Как записаться на прием к врачу через Единый портал государственных услуг</b></h2>
                        <p>Как записаться на прием к врачу подробности</p>
                        <a href="#" class="btn btn-light">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2><b>Как записаться на прием к врачу через Единый портал государственных услуг</b></h2>
                        <p>Как записаться на прием к врачу подробности</p>
                        <a href="#" class="btn btn-light">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2><b>Как записаться на прием к врачу через Единый портал государственных услуг</b></h2>
                        <p>Как записаться на прием к врачу подробности</p>
                        <a href="#" class="btn btn-light">Подробнее</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
        <div class="info-cards">
            <a href="#" class="card btn">
                <div class="card-body">
                    <h5>Памятка для граждан</h5>
                    <p>О гарантиях бесплатного оказания медицинской помощи</p>
                </div>
            </a>
            <a href="#" class="card btn">
                <div class="card-body">
                    <h5>Памятка для граждан</h5>
                    <p>О гарантиях бесплатного оказания медицинской помощи</p>
                </div>
            </a>

            <a href="#" class="card btn">
                <div class="card-body">
                    <h5>Памятка для граждан</h5>
                    <p>О гарантиях бесплатного оказания медицинской помощи</p>
                </div>
            </a>
        </div>
    </div>
        <div class="news-block">
            <div class="news-top">
                <div class="title">
                    <h3>Новости</h3>
                </div>
                <div class="title">
                    <a href="#"><h6>Смотреть все новости&#8599;</h6></a>
                </div>
            </div>
            <div class="news-cards">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Неделя сохранения психического здоровья</h4>
                        <p class="card-text">Челябинская область присоединилась к неделе сохранения психического здоровья</p>
                        <span>ЗДРАВООХРАНЕНИЕ</span>
                        <p class="card-text">Главный врач Челябинского областного центра общественного здоровья и медицинской профилактики Ольга Агеева:</p>
                        <p class="card-text">Сохранение психического здоровья - это основа благополучия каждого из нас,...</p>
                        <p class="card-text">Опубликовано: 2024-10-08</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Неделя безопасности пациента</h4>
                        <p class="card-text">Челябинская область присоединилась к Неделе безопасности пациента и популяризации центров здоровья</p>
                        <span>ЗДРАВООХРАНЕНИЕ</span>
                        <p class="card-text">Главный врач Челябинского областного центра общественного зворовья и медицинской профилактики Ольга Агеева:</p>
                        <p class="card-text">Каждый человек имеет право на охрану здоровья и на медицинскую помощь. Но важно помнить о том, что каждый человек имеет не только права, но и обязанности, например,...</p>
                        <p class="card-text">Опубликовано: 2024-09-17</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Неделя сокращения потребления алкоголя</h4>
                        <p class="card-text">Челябинская область присоединилась к неделе сокращения потребления алкоголя и связанной с ним смертности и заболеваемости</p>
                        <span>ЗДРАВООХРАНЕНИЕ</span>
                        <p class="card-text">Главный врач Челябинского областного центра общественного здоровья и медицинской профилактики Ольга Агеева:</p>
                        <p class="card-text">Некотрые люди убеждены, что алкогольные напитки несут пользу...</p>
                        <p class="card-text">Опубликовано: 2024-09-10</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-info">
            <div class="block-links">
                <div class="title">
                    <h3>Полезные ссылки</h3>
                </div>
                <div class="link-desk">
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                    <a href="#" class="link-card">
                        <div class="card-body">
                            <h6 class="card-title">Мониторинг адресов <img src="images/icon_check.png" alt="" class="icon"></h6>
                            <p class="card-text">сервис по проверке адресов медицинских учреждений</p>
                        </div>
                    </a>
                </div>
                <div class="block-problem">
                    <div class="problem">
                        <div class="d-flex">
                            <img src="images/gosuslugi.png" alt="" class="img">
                        </div>
                        <div class="problem-body">
                            <h5>ГОСУСЛУГИ</h5>
                            <h5>РЕШАЕМ ВОПРОСЫ ВМЕСТЕ</h5>
                            <p>Недовольны работой больн ицы?</p>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-light">
                                Написать о проблеме
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-docs">
                <div class="title">
                    <h3>Документы</h3>
                </div>
                <div class="doc-desk">
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="images/icon_doc.png" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="images/icon_doc.png" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                    <div class="doc">
                        <a class="doc-body" href="#">
                            <img src="images/icon_doc.png" alt="">
                            <div class="relative">
                                <h6>Свидетельство о государственной регистрации программы для ЭВМ</h6>
                                <p>файл pdf 112.31 кб</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-form">
            <div class="text-form">
                <div class="title">
                    <h3>Обратная связь</h3>
                </div>
                <div class="title">
                    <div class="text">Пожалуйста, заполните форму, мы свяжемся с Вами в самое ближайшее время</div>
                </div>
            </div>
            <div class="form">
                <form class="feedback-form">
                    <div class="form-inputs">
                        <div class="mb-3">
                            <label for="inputFIO" class="form-label">ФИО</label>
                            <input type="text" class="form-control" id="inputFIO" placeholder="ФИО" aria-describedby="FIOHelp">
                            <div id="FIOHelp" class="form-text">Введите ФИО</div>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Почтовый адрес" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Введите свой почтовый адрес для связи</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formControlTextarea" class="form-label">Сообщение</label>
                        <textarea class="form-control" id="formControlTextarea" rows="3" aria-describedby="messHelp"></textarea>
                        <div id="messHelp" class="form-text">Введите ваше сообщение</div>
                    </div>
                    <button type="submit" class="btn btn-dark">Отправить</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>