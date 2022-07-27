<?php

namespace App\Http\Controllers;

use App\Libary;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');

    }


    public function about(){
        return view('about');

    }



    public function logger(){

        return view('logger');

    }

    public function cabinet(){
        return view('cabinet');
        }


    public function password(){
        return view('password');

    }

    function gen_password($length = 5)
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




    public function pass(){
        return view('pass');

    }

    public function logger_check(Request $request){
    $valid = $request->validate([
        'email' => 'required|min:4',
        'Имя' => 'required',
        'Фамилия'=>'required',
        'Отчество'=>'required',
        'Пароль'=> 'required|min:6|max:55',
        'Паспортные данные'
    ]);




        $user_model = new Libary();
        $user_model->Имя = $request->Имя;
        $user_model->Фамилия = $request->Фамилия;
        $user_model->Отчество = $request->Отчество;
        $user_model->email = $request->email;
        $user_model->Паспортные_данные = $request->Паспортные_данные;
        $user_model->Пароль = bcrypt($request->Пароль); //laravel hashed password
        $user_model->save();
        return redirect()->route('cabinet');


    }


}
