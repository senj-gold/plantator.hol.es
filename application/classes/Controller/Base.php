<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    protected $auth;
    protected $session;
    protected $user;
    public static $domain_name;
    public $template = 'v_base';
    public $auth_required = false;
    public $auto_render = true;

    public function before() {
        parent::before();
        self::$domain_name = 'flibuster.hol.es';
//        $region_obj = new Model_Geo();
//        $region_obj->define_region();
//        $arr_lang  = ORM::factory('Lang')->get_array_alias();
      

        // Авторизация
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user(); /* получаем данные авторизированого пользователя */
        $this->session = Session::instance();
       

//         $seo = ORM::factory('article')->where('alias', '=', 'main')->find();
//
        $this->template->title 		= '';
//        $this->template->title 		= $seo->title;
        $this->template->description    = '';
//        $this->template->description    = $seo->description;
        $this->template->keywords 	= '';
//        $this->template->keywords 	= $seo->keywords;

        // Подключаем стили
        $this->template->styles = array();
        $this->template->scripts = array('/media/libs/jquery-1.9.1.min.js');
      
//        if (!$this->auth->logged_in()) {
//            $this->template->scripts[] = '/media/js/page/auth.js';
//        }
    }

}