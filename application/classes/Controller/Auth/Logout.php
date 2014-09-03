<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Logout extends Controller_Auth_Login {

    public function before() {
        parent::before();
    }

    public function action_index() { // экшн выхода
        Auth::instance()->logout(); // выходим и перекитываем на страницу с авторизацией
        HTTP::redirect('/auth/login');
    }

}
