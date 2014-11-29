<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Main extends Controller_Base {

    public function before() {
        parent::before();
        if (!$this->auth->logged_in()) {
            $this->session = Session::instance();
            $this->session->set('redirectAfterLogin', $_SERVER['REQUEST_URI']);
        }
        $this->template->styles[] = '/media/css/colors.css';
        $this->template->styles[] = '/media/css/cell.css';
        $this->template->styles[] = '/media/css/kernel_main.css';
        $this->template->styles[] = '/media/css/template_ace.css';
        $this->template->styles[] = '/media/css/core.css';
        $this->template->styles[] = '/media/css/core_popup.css';
        $this->template->styles[] = '/media/css/styles.css';
        $this->template->styles[] = '/media/css/index/block/head.css';
        $this->template->styles[] = '/media/css/base.css';


        // Подключаем скрипты
        $this->template->scripts[] = '/media/libs/jquery.maskedinput.js';
        $this->template->scripts[] = '/media/libs/jquery.syncheight.js';
        $this->template->scripts[] = '/media/libs/modernizr.custom.03381.js';
        $this->template->scripts[] = '/media/libs/script.js';
        $this->template->scripts[] = '/media/libs/kernel_main.js';
        $this->template->scripts[] = '/media/libs/core.js';
        $this->template->scripts[] = '/media/libs/core_ajax.js';
        $this->template->scripts[] = '/media/libs/core_fx.js';
        $this->template->scripts[] = '/media/libs/session.js';
        $this->template->scripts[] = '/media/libs/core_window.js';
        $this->template->scripts[] = '/media/libs/utils.js';
        $this->template->scripts[] = '/media/libs/core_popup.js';
//        $this->template->scripts[] = '/media/js/base.js';


        $this->template->v_body = View::factory('index/v_body');
        $this->template->v_body->v_libs = View::factory('index/block/v_libs');
        $this->template->v_body->v_head = View::factory('index/block/v_head');
        $this->template->v_body->v_footer = View::factory('index/block/v_footer');
    }

    public function action_index() {
        $post = $this->request->post();
        $status = 0;
        $errors = array();
        if($post && !empty($post['firstname']) && !empty($post['phone'])){
            $reserv = ORM::factory('Reservation');
            $post['phone'] = str_replace(array(' ', '(', ')', '-'), '', $post['phone']);
            $post['date'] = new \DateTime($post['date']);
            $post['date'] = $post['date']->format('Y-m-d');
            $reserv->values($post);
            try {
                $reserv->create();
                $post['date'] = new \DateTime($post['date']);
                $post['date'] = $post['date']->format('d-m-Y');
                $status = 1;
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors();
            }
            
        }
        
        $texts = ORM::factory('Main')->find_all();
        $category = ORM::factory('Category')->where('lvl', '=', 1)->find_all();
        $news = ORM::factory('News')->order_by('data', 'DESC')->limit(4)->find_all();
        
        $this->template->v_body->v_page = View::factory('index/page/v_main')
                          ->bind('category', $category)
                          ->bind('news', $news)
                          ->bind('post', $post)
                          ->bind('texts', $texts)
                          ->bind('status', $status)
                          ->bind('errors', $errors)
                      ;
    }
}
