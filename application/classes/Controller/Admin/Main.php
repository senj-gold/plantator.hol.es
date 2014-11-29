<?php

class Controller_Admin_Main extends Controller_Admin_Index {

    public function before() {
        parent::before();
    }

    public function action_index() {
        
        $news = ORM::factory('Main')->find_all();
        $this->set('_tests', $news);
    }
    
    public function action_save() {
        $this->default_template = 'admin/json';
        $array = array();
        if ($this->request->post()) {
            $post = $this->request->post();
            $name = (string) Arr::get($post, 'name', false);
            $id = (int) Arr::get($post, 'pk', false);
            $value = trim(Arr::get($post, 'value', false));

            if ($name && $id) {
                $object = ORM::factory('Main', $id);
                if ($object->loaded()) {
                    if (in_array($name, array('title', 'text'))) {
                        $object->$name = $value;
                        try {
                            $object->save();
                            $array = array('save' => 'ok');
                        } catch (ORM_Validation_Exception $e) {
                            $array['error'] = Arr::flatten($e->errors(""));
                        }
                    } else {
                        $array = array('error' => 'atribut ' . $name . ' not found');
                    }
                } else {
                    $array = array('error' => 'banket not found');
                }
            } else {
                $array = array('error' => 'data');
            }
        } else {
            $array = array('error' => 'data empty');
        }
        $this->set('_result', json_encode($array));
    }
    public function action_saveimg()
    {
        $this->default_template = 'admin/json';
        $array = array();
        if ($this->request->param('id')) {
            $object = ORM::factory('Main', $this->request->param('id'));
            if ($object->loaded()) {
                 if($_FILES['img']['tmp_name']){
                    $file = $_FILES['img']['tmp_name'];
                    $name = $_FILES['img']['name'];
                    $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                    $directory = 'media/img/main';
                     if (is_file($directory . $object->img)) {
                        if (unlink($directory . $object->img)) {

                        }
                    }
                    $object->img = $object->save_img($file, $type);
                    $object->save();
                    $array['file'] = $object->img;
                } else {
                    $array = array('error' => 'File empty');
                }
            } else {
                $array = array('error' => 'block not found');
            }
        } else {
            $array = array('error' => 'data empty');
        }
        $this->set('_result', json_encode($array));
    }
    
    public function after() {
        parent::after();
    }

}
