<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ajax extends Controller {

    protected $auth;
    protected $session;
    protected $user;
    public static $domain_name;

    public function before() {
        parent::before();

        self::$domain_name = 'flibuster.hol.es';
        
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user(); /* получаем данные авторизированого пользователя */
        $this->session = Session::instance();

        if (!$this->auth->logged_in()) {
           return json_encode(array('error'=>'not logged on'));
        }
        if (!$this->auth->logged_in('admin')) {
           echo json_encode(array('error'=>'No access'));return;
        }

    }
      public function action_edit() {
            $_POST = Arr::map('trim', $_POST);
            if(!isset($_POST['table'])) return son_encode(array('error'=> 'data error'));
            if($_POST['table'] == 'Category'){
                    $post = Arr::extract($_POST, array('id','table','name'));
                    $post['name'] = libs::HardSQL($post['name']);
            }  
            if(in_array($post['table'], array('Category')) && is_numeric($post['id'])){
                    $table = ORM::factory($post['table'], (int)$post['id']);
                    if($table->loaded()){
                        // редактируем категорию
                             if($_POST['table'] == 'Category'){
                                    $find =ORM::factory($post['table'])->where('name', '=', $post['name'])->where('parent_id', '=', $table->parent_id)->find();
                                    if ($find->loaded() && $find->id != $_POST['id']) {
                                        echo json_encode(array('error'=>$post['name'] . ' - это название уже занято'));return;
                                    } else {
                                        $table->name = $post['name'];
                                        $table->update();
                                        echo json_encode(array(
                                            'save'=>'ok'
                                            ));return;
                                    }
                             }
                             //========================
                    }else{
                        echo son_encode(array('error'=> 'table error'));return;
                    }
            }
      }
      public function action_add() {
            $_POST = Arr::map('trim', $_POST);
            if(!isset($_POST['table'])) return son_encode(array('error'=> 'data error'));
            if($_POST['table'] == 'Category'){
                    $post = Arr::extract($_POST, array('id','table','name'));
                    $post['name'] = libs::HardSQL($post['name']);
            }  
            if(in_array($post['table'], array('Category')) && is_numeric($post['id'])){
                    $table = ORM::factory($post['table'], (int)$post['id']);
                    if($table->loaded()){
                        // редактируем категорию
                             if($_POST['table'] == 'Category'){
                                    $find =ORM::factory($post['table'])->where('name', '=', $post['name'])->where('parent_id', '=', $table->parent_id)->find();
                                    if ($find->loaded() && $find->id != $_POST['id']) {
                                        echo json_encode(array('error'=>$post['name'] . ' - это название уже занято'));return;
                                    } else {
                                        $add =ORM::factory($post['table']);
                                        $add->name = $post['name'];
                                        $add->insert_as_last_child($table->id);
                                        echo json_encode(array('save'=>'ok'));return;
                                    }
                             }
                             //========================
                    }else{
                        echo son_encode(array('error'=> 'table error'));return;
                    }
            }
      }
   
   

}
