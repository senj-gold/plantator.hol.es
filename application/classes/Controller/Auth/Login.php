<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Login extends Controller_Base {

    public function before() {
        parent::before();
        
         $this->template->v_body = View::factory('auth/v_auth');
         $this->template->styles[] = '/media/css/auth/auth.css';
         $this->template->scripts[] = '/media/js/auth/auth.js';
    }

    public function action_index() { // экшн для входа
        if ($this->auth->logged_in()) {
            HTTP::redirect('/');
        }
        $data = array();
        if (HTTP_Request::POST == $this->request->method()) {  // если переданы POST данные
            // проверяем - стоит ли флаг - запомнить меня
            $remember = array_key_exists('rememberme', $this->request->post()) ? (bool) $this->request->post('rememberme') : FALSE;
            // пробуем авторизовать пользователя
            $user = Auth::instance()->login($this->request->post('email'), $this->request->post('password'), $remember);

            if ($user) { // если авторизовали успешно
                if ($this->session->get('redirectAfterLogin') != '') {
                    $redirect = $this->session->get('redirectAfterLogin');
                    $this->session->delete('redirectAfterLogin');
                    HTTP::redirect($redirect); // редиректим куда надо (см. выше)
                }
                HTTP::redirect('/');
            } else {
                $data['error']['email'] = Kohana::message('auth', 'wrongPass'); // если не удалось авторизоваться - выводим соответствующий мессадж
            }
            $data['email'] = $this->request->post('email');
        }
//		$ulogin = Ulogin::factory(); 
//		$data['ulogin'] = $ulogin->render(); // рисуем значки соц.сетей
        $data['email'] = array_key_exists('email', $this->request->post()) ? htmlspecialchars($this->request->post('email')) : '';
        $data['username'] = array_key_exists('username', $this->request->post()) ? htmlspecialchars($this->request->post('username')) : ''; // вставляем данные в формы, если они были введены

        $this->template->v_body->set($data);
    }
}
