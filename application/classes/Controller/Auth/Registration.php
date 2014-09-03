<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Registration extends Controller_Auth_Login {

    public function before() {
        parent::before();
    }

    public function action_index() { // экшн регистрации
        if ($this->auth->logged_in()) {
            HTTP::redirect('/');
        }
        $data = array();
        if (HTTP_Request::POST == $this->request->method()) {
            try {

                // производим проверку всех полей
                $object = Validation::factory($this->request->post());
                $object
                                  ->label('email', __('E-mail'))
                                  ->label('username', __('Логін'))
                                  ->rule('username', 'not_empty')
                                  ->rule('username', 'min_length', array(':value', '3'))
                                  ->rule('email', 'email')
                ;

                $password = libs::generateCode(8);
                $user = ORM::factory('User') // если проверка пройдена - регистрируем
                                  ->set('email', $this->request->post('email'))
                                  ->set('username', $this->request->post('username'))
                                  ->set('password', $password)
                                  ->save();

                // даем новому пользователю роль для логина
                $user->add('roles', ORM::factory('Role', array('name' => 'login')));

                // очищаем массив с POST
                $_POST = array();

                $to = $this->request->post('email');
                $subject = Kohana::message('auth', 'email.themes.registration');
                $from = Kohana::message('auth', 'email.from');
                $message = 'Вы успешно зарегистрировались с паролем - ' . $password;
                Email::send($to, $from, $subject, $message, $html = false); // отправляем пользователю сообщение с его паролем

                Auth::instance()->force_login($user); // сразу же авторизуем его, без ввода логина и пароля
                HTTP::redirect('/');
            } catch (ORM_Validation_Exception $e) {

                // если во время валидации возникли ошибки
                $data['error'] = $e->errors('models');
                // берем значения ошибок из файла /application/messages/model/user.php
            }
        }
        $data['email'] = array_key_exists('email', $this->request->post()) ? htmlspecialchars($this->request->post('email')) : '';
        $data['username'] = array_key_exists('username', $this->request->post()) ? htmlspecialchars($this->request->post('username')) : '';  // вставляем данные в формы, если они были введены
//		$ulogin = Ulogin::factory();
//		$data['ulogin'] = $ulogin->render();  // рисуем значки соц.сетей

        $this->template->v_body->set($data);
    }

    public function action_changepass() { // экшен смены пароля
        if ($this->auth->logged_in()) {
            HTTP::redirect('/');
        }
        $object = Validation::factory($this->request->post());  // проверяем новый пароль на корректность заполнения
        $object
                          ->rule('newpassword', 'not_empty')
                          ->rule('newpassword', 'min_length', array(':value', '5'));
        if ($object->check()) {  // если новый пароль удовлетворяет требованиям
            $realoldpass = Auth::instance()->get_user()->password; // берем хэш текущего пароль пользователя
            $oldpass = Auth::instance()->hash_password($this->request->post('oldpassword')); // сравниваем с тем, что ввел пользователь
            if ($realoldpass === $oldpass) {  // если они совпадают
                DB::update('users')->set(array('password' => Auth::instance()->hash_password($this->request->post('newpassword'))))->where('id', '=', Auth::instance()->get_user()->id)->execute();
                HTTP::redirect('/auth/?changeok');  // меняем пароль и редиректим на страницу с поздравлением	
            } else {
                HTTP::redirect('/auth/?changefalse');  // если нет - сообщаем об ошибке
            }
        } else {
            HTTP::redirect('/auth/?changefalse'); // если нет - сообщаем об ошибке
        }
    }

    public function action_forgot() { // сброс пароля
        if ($this->auth->logged_in()) {
            HTTP::redirect('/');
        }
        $data = array();
        if (HTTP_Request::POST == $this->request->method()) {  // если были какие-то POST данные
            $data['message'] = Kohana::message('auth', 'passwordSended'); // в любом случае выводим сообщение о том, что пароль отправлен. Пусть думают что все почтовые аккаунты имеют своих владельцев
            $user = ORM::factory('User', array('email' => $this->request->post('email'))); // а теперь действительно ищем - есть ли пользователь со введенным адресом
            if ($user->loaded()) { // если есть
                $session = Session::instance();
                $hash = md5(time() . $this->request->post('email')); // записываем в сессию хэш, который будем проверять
                $session->set('forgotpass', $hash);
                $session->set('forgotmail', $this->request->post('email')); // и почту записываем
                $to = $this->request->post('email');
                $subject = Kohana::message('auth', 'email.themes.passworReset');
                $from = Kohana::message('auth', 'email.from');
                $message = 'Для сброса пароля пройдите по ссылке - <a href="http://narodnatribuna.com.ua/auth/forgot?change=' . $hash . '">СБРОСИТЬ</a>'; // отправляем ссылку с хэшем для сброса пароля
                Email::send($to, $from, $subject, $message, $html = true);
            }
        }
        $restore = Arr::get($_GET, 'change');
        if ($restore) { // если человек прошел по ссылке в письме
            if ($this->session->get('forgotpass') === $restore) { // проверяем его сессию - действительно ли именно он запросил сброс?
                $newpass = substr(md5(time() . $session->get('forgotmail')), 0, 8); // генерируем новый пароль
                $to = $session->get('forgotmail');
                DB::update('users')->set(array('password' => Auth::instance()->hash_password($newpass)))->where('email', '=', $session->get('forgotmail'))->execute(); // ставим новый пароль пользователю
                $session->delete('forgotpass');
                $session->delete('forgotmail'); // очищаем сессию
                $subject = Kohana::message('auth', 'email.themes.newPassword');
                $from = Kohana::message('auth', 'email.from');
                $message = 'Ваш новый пароль - "' . $newpass . '" без кавычек. <a href="http://narodnatribuna.com.ua/auth/login">Войти</a>'; // отправляем новый пароль пользователю
                Email::send($to, $from, $subject, $message, $html = true);
                $data['message'] = Kohana::message('auth', 'newPassSended'); // сообщаем об успехе процедуры
            }
        }
        $data['email'] = array_key_exists('email', $this->request->post()) ? htmlspecialchars($this->request->post('email')) : '';
        $this->template->v_body->v_content->set($data);
    }

    public function action_logout() { // экшн выхода
        Auth::instance()->logout(); // выходим и перекитываем на страницу с авторизацией
        HTTP::redirect('/');
    }

}
