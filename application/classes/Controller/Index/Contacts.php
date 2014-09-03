<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Contacts extends Controller_Index_Main {

    public function before() {
        parent::before();
        

    }
      public function action_index() {
        $this->template->v_body->v_page = View::factory('index/page/v_contacts');
          
      }

}