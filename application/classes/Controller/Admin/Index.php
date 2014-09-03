<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Base {

    public function before() {
        parent::before();

        if (!$this->auth->logged_in()) {
            $this->session = Session::instance();
            $this->session->set('redirectAfterLogin', $_SERVER['REQUEST_URI']);
            HTTP::redirect('/auth/login');
        }
        if (!$this->auth->logged_in('admin')) {
            throw new HTTP_Exception_403('No access');
        }

        $this->template->styles[] = '/media/css/admin/base.css';
        $this->template->scripts[] = '/media/js/admin/base.js';

        $this->template->v_body = View::factory('admin/v_body');
        $this->template->v_body->v_head = View::factory('admin/block/v_head');
        $this->template->v_body->v_left_menu = View::factory('admin/block/v_left_menu');
        $this->template->v_body->v_left_menu->links = array();
    }

}
