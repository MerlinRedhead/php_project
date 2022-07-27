
@extends('base')


@section('title')Регистрация@endsection

@section('main')
    <h1>Введите свои данные</h1>


    @if($errors->any())
        <div class="alert alert-info">
            <ul>
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/logger/check">
        @csrf
        <?php
        function gen_password($length = 8)
        {
            $password = '';
            $arr = array(
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
                'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
                'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
            );

            for ($i = 0; $i < $length; $i++) {
                $password .= $arr[random_int(0, count($arr) - 1)];
            }
            return $password;
        }
        ?>
        <input email="email" name="email" id="email" placeholder="Введите email" class="form-control">
        <br>
       <input type="Имя" name="Имя" id="Имя" placeholder="Введите ваше имя" class="form-control">
        <br>
        <input type="Фамилия" name="Фамилия" id="Фамилия" placeholder="Введите вашу Фамилию" class="form-control">
        <br>
        <input type="Отчество" name="Отчество" id="Отчество" placeholder="Введите ваше Отчество" class="form-control">
        <br>
        <input type="Паспортные_данные" name="Паспортные_данные" id="Паспортные_данные" placeholder="Введите ваши паспортные данные" class="form-control">
        <br>
        <input type="password" password="Пароль" name="Пароль" id="Пароль" placeholder="Ваш пароль" class="form-control" value="<?=$password = gen_password(6)?>">
        <br>
        <div>
            <button style="text-align: center" type="submit" class="btn btn-success">Зарегестрироваться</button>

        </div>



@endsection

