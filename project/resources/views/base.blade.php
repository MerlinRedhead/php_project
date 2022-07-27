<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class=" bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 px-mb-4 mb-3 bg-black text-white border-bottom shadow sm">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="py-2 fs-4 text-white">Sinergy project</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="https://synergyacademy.com/lp/v1/?utm_source=yandex_s&utm_medium=cpc&utm_campaign=65376123&utm_content=11126587713&utm_group=4682560681&utm_term=synergy%20academy&site=none&marketer=gav&produkt=93029440&utm_gen=3&otdel=rsv&etext=&yclid=1872979974669787738">Синергия</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/home">Главная</a>
    </nav>
    <a class="me-3 py-2 btn btn-outline-primary" href="/logger">Зарегистрироваться</a>
    <a class="me-3 py-2 btn btn-outline-primary" href="/password">Войти</a>
    <a class="me-3 py-2 btn btn-outline-primary" href="/cabinet">Личный кабинет</a>
</div>
<div class="container">
    @yield('main')
</div>
    <div style="text-align:center" class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Войти</h1>
        <p class=" fs-4"> Войдите в ваш личный кабинет</p>
        <a href="/password"><button class="btn btn-primary btn-lg" type="button">Войти</button></a>
    </div>
    <div style=" text-align: center" class="h-100 p-5 text-black bg-white rounded-3">
        <h2>Море возможностей</h2>
        <p>Посетите сайт Синергии,чтобы узнать больше</p>
        <a class="btn btn-warning" type="button" href="https://synergyacademy.com/lp/v1/?utm_source=yandex_s&utm_medium=cpc&utm_campaign=65376123&utm_content=11126587713&utm_group=4682560681&utm_term=synergy%20academy&site=none&marketer=gav&produkt=93029440&utm_gen=3&otdel=rsv&etext=&yclid=1872979974669787738" >Посетить</a>
    </div>

</body>
</html>
