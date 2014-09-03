<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Blud extends Controller_Index_Main {

    public function before() {
        parent::before();
        

    } 
      public function action_index() {
          $blud = ORM::factory('Menu', $this->request->param('id'));
          if(!$blud->loaded()){
    throw new HTTP_Exception_404('Page not found');
          }
          $this->name->title=$blud->name;
          
        $this->template->v_body->v_page = View::factory('index/page/v_blud')
                          ->bind('blud', $blud);
      }
      

}