<?php
$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'project_sinergy');
$result = mysqli_query($link,'SELECT *   FROM  `libaries` ORDER BY id DESC LIMIT 1; ');





?>




<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body class=" bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 px-mb-4 mb-3 bg-black text-white border-bottom shadow sm">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="py-2 fs-4 text-white">Sinergy project</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="https://synergyacademy.com/lp/v1/?utm_source=yandex_s&utm_medium=cpc&utm_campaign=65376123&utm_content=11126587713&utm_group=4682560681&utm_term=synergy%20academy&site=none&marketer=gav&produkt=93029440&utm_gen=3&otdel=rsv&etext=&yclid=1872979974669787738">Синергия</a>
        <a class=" btn btn-warning me-3 py-2 text-white text-decoration-none " href="home">Главная</a>
    </nav>
</div>
<h1>Личный кабинет</h1>
<div class="container">
    @yield('main')

</div>
<br>


<div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Ваши данные</h4>
        <div class="row g-3">
            <?php
            while($user_reg = mysqli_fetch_array($result)){
            ?>
                <div class="col-sm-6">


                        <label for="firstName" class="form-label">Имя</label>
                        <h3 class="form-control"><?php echo $user_reg['Имя']; ?></h3>




                </div>

                <div class="col-sm-6">

                        <label for="secondName" class="form-label">Фамилия</label>
                        <input class="form-control" value="<?php echo $user_reg['Фамилия']; ?>">




                </div>
                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Отчество</label>
                    <input class="form-control" value="<?php echo $user_reg['Отчество']; ?>">
                </div>



                <div class="col-12">
                    <label for="email" class="form-label">Электронная почта</label>
                    <input class="form-control" value = "<?php echo $user_reg['email']; ?>">
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Паспортные данные</label>
                    <input class="form-control" value=  "<?php echo $user_reg['Паспортные_данные']; ?>">
                </div>

            <?php
                    }

                    ?>

                <a style="text-align: center" class="text-warning" href="/about">Изменить данные</a>


        <hr class="my-4">


</div>


<div style=" text-align: center" class="h-100 p-5 text-black bg-white rounded-3">
    <h2>Море возможностей</h2>
    <p>Посетите сайт Синергии,чтобы узнать больше</p>
    <a class="btn btn-warning" type="button" href="https://synergyacademy.com/lp/v1/?utm_source=yandex_s&utm_medium=cpc&utm_campaign=65376123&utm_content=11126587713&utm_group=4682560681&utm_term=synergy%20academy&site=none&marketer=gav&produkt=93029440&utm_gen=3&otdel=rsv&etext=&yclid=1872979974669787738" >Посетить</a>
</div>

</body>
</html>
