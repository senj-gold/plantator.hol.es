<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Gallery extends Controller_Index_Main {

    public function before() {
        parent::before();
        

    }
      public function action_index() {
          
        $this->template->title 		= 'Плантатор галереи';
         $gallery = ORM::factory('Gallery')->order_by('data','ASC')->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_gallery')->bind('gallery', $gallery);
          
      }

}