<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Forgot extends Controller_Auth_Login{


    public function before() {
        parent::before();
    }

	

	public function action_index() // сброс пароля
	{
           if ($this->auth->logged_in()) {
            HTTP::redirect('/');
        }
        $data = array();
        if (HTTP_Request::POST == $this->request->method()) {  // если были какие-то POST данные
            $user = ORM::factory('User', array('email' => $this->request->post('email'))); // а теперь действительно ищем - есть ли пользователь со введенным адресом
            if ($user->loaded()) { // если есть
                $hash = md5(time() . $this->request->post('email')); // записываем в сессию хэш, который будем проверять
                $this->session->set('forgotpass', $hash);
                $this->session->set('forgotmail', $this->request->post('email')); // и почту записываем
                $to = $this->request->post('email');
                $subject = Kohana::message('auth', 'email.themes.passworReset');
                $from = Kohana::message('auth', 'email.from');
                $message = 'Для сброса пароля пройдите по ссылке - <a href="http://'.Controller_Base::$domain_name.'/auth/forgot?change=' . $hash . '">СБРОСИТЬ</a>'; // отправляем ссылку с хэшем для сброса пароля
                Email::send($to, $from, $subject, $message, $html = true);
                $data['message'] = Kohana::message('auth', 'passwordSended'); // в любом случае выводим сообщение о том, что пароль отправлен. Пусть думают что все почтовые аккаунты имеют своих владельцев
            } else {
                $data['error']['email'] = Kohana::message('auth', 'emailNot'); // в любом случае выводим сообщение о том, что пароль отправлен. Пусть думают что все почтовые аккаунты имеют своих владельцев
            }
        }
        $restore = Arr::get($_GET, 'change');
        if ($restore) { // если человек прошел по ссылке в письме
            if ($this->session->get('forgotpass') === $restore) { // проверяем его сессию - действительно ли именно он запросил сброс?
                $newpass = substr(md5(time() . $this->session->get('forgotmail')), 0, 8); // генерируем новый пароль
                $to = $this->session->get('forgotmail');
                DB::update('users')->set(array('password' => Auth::instance()->hash_password($newpass)))->where('email', '=', $this->session->get('forgotmail'))->execute(); // ставим новый пароль пользователю
                $this->session->delete('forgotpass');
                $this->session->delete('forgotmail'); // очищаем сессию
                $subject = Kohana::message('auth', 'email.themes.newPassword');
                $from = Kohana::message('auth', 'email.from');
                $message = 'Ваш новый пароль - "' . $newpass . '" без кавычек. <a href="http://'.Controller_Base::$domain_name.'/auth/login">Войти</a>'; // отправляем новый пароль пользователю
                Email::send($to, $from, $subject, $message, $html = true);
                $data['message'] = Kohana::message('auth', 'newPassSended'); // сообщаем об успехе процедуры
            }
        }
        $data['email'] = array_key_exists('email', $this->request->post()) ? htmlspecialchars($this->request->post('email')) : '';
        $this->template->v_body->set($data);
	}	
}