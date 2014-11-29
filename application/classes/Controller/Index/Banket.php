<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Banket extends Controller_Index_Main {

    public function before() {
        parent::before();
        

    }
    public function action_index() {
        $this->template->title 		= 'Плантатор бакети';
        $this->template->keywords 	= 'Банкетный зал, банкет';
        $news = ORM::factory('Banket')->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_banket')->bind('banket', $news);
    }

}