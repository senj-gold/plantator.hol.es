<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Afisha extends Controller_Index_Main {

    public function before() {
        parent::before();
        
    }
      public function action_index() {
          $news = ORM::factory('News')->order_by('data', 'DESC')->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_afisha')->bind('news', $news);
          
      }

}