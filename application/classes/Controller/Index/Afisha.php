<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Afisha extends Controller_Index_Main {

    public function before() {
        parent::before();
        
    }
      public function action_index() {
        $this->template->title 		= 'Плантатор афіша';
        $this->template->keywords 	= 'гучні вечірки, весело провести свято, Подаруйте дітям';
        $news = ORM::factory('News')->order_by('data', 'DESC')->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_afisha')->bind('news', $news);
          
      }

}