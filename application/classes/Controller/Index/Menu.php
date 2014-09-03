<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Menu extends Controller_Index_Main {

    public function before() {
        parent::before();
        

    }
      public function action_index() {
        $this->template->v_body->v_page = View::factory('index/page/v_menu');
      }
      public function action_1() {
          $category = ORM::factory('Category')->where('lvl', '=', 1)->find_all();
          $category_2 = ORM::factory('Category')->where('lvl', '=', 2)->where('parent_id', '=', 1)->find_all();
                    
        $this->template->v_body->v_page = View::factory('index/page/v_menu')
                          ->bind('category', $category)
                          ->bind('category_2', $category_2);
      }
      public function action_23() {
          $category = ORM::factory('Category')->where('lvl', '=', 1)->find_all();
          $category_2 = ORM::factory('Category')->where('lvl', '=', 2)->where('parent_id', '=', 23)->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_menu')
                          ->bind('category', $category)
                          ->bind('category_2', $category_2);
      }
      public function action_24() {
          $category = ORM::factory('Category')->where('lvl', '=', 1)->find_all();
          $category_2 = ORM::factory('Category')->where('lvl', '=', 2)->where('parent_id', '=', 24)->find_all();
        $this->template->v_body->v_page = View::factory('index/page/v_menu')
                          ->bind('category', $category)
                          ->bind('category_2', $category_2);
      }

}