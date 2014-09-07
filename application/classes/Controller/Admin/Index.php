<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Twig {

    public function before() {
        parent::before();

        if (!$this->auth->logged_in()) {
            $this->session->set('redirectAfterLogin', $_SERVER['REQUEST_URI']);
            HTTP::redirect('/auth/login');
        }
        if (!$this->auth->logged_in('admin')) {
            throw new HTTP_Exception_403('No access');
        }

//        $this->template->styles[] = '/media/libs/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css';
//        $this->template->styles[] = '/media/libs/metronic/assets/global/plugins/select2/select2.css';
//        $this->template->styles[] = '/media/libs/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css';
//        
//        
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/respond.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/jquery.blockui.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/jquery.cokie.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/uniform/jquery.uniform.min.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/select2/select2.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/select2/select2_locale_ru.js';
//        $this->template->scripts[] = '/media/libs/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js';
//        $this->template->scripts[] = '/media/js/admin/base.js';
        
//        $this->template->v_body = View::factory('admin/v_body');
//        $this->template->v_body->v_head = View::factory('admin/block/v_head');
//        $this->template->v_body->v_left_menu = View::factory('admin/block/v_left_menu');
//        $this->template->v_body->v_left_menu->links = array();
    }
    public function action_index()
    {
        
    }

}
