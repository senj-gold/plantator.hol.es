<?php

class Controller_Admin_Banket extends Controller_Admin_Index {

    public function before() {
        parent::before();
    }

    public function action_index() {
        
        $news = ORM::factory('Banket')->find_all();
        $this->set('_banket', $news);
    }
    

    public function action_create() {
        $errors = array();
		$post = $this->request->post();
		if ($post) {
			try {
                // производим проверку всех полей
                $object = Validation::factory($post);
                $object
                        ->label('title',  __('Название') )
                        ->label('short_text', __('Короткое описание'))
                        ->label('text', __('Полное описание'))
                        ->rule('title', 'not_empty')
                        ->rule('title', 'min_length', array(':value', '5'))
                        ->rule('title', 'max_length', array(':value', '255'))
                        ->rule('short_text', 'not_empty')
                        ->rule('short_text', 'min_length', array(':value', '5'));
                if($object->check() && $_FILES['img']['tmp_name']){
                    
                    $object = ORM::factory('Banket');
                    $object->values($this->request->post());
                        $file = $_FILES['img']['tmp_name'];
                        $name = $_FILES['img']['name'];
                        $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                        $post['img'] = $object->save_img($file, $type);
                        $object->values($post)->save();
                        HTTP::redirect('/admin/banket');

                    $object->create();
				
                    HTTP::redirect("/admin/banket/");
                } else {
                    $errors = $object->errors('models/banket');
                    if(!$_FILES['img']['tmp_name']){
                        $errors[] = __('Картинка не загружена');
                    }
                }
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}
        $this->set('_errors', $errors);
        $this->set('post', $post);
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
                $object = ORM::factory('Banket', $id);
                if ($object->loaded()) {
                    if (in_array($name, array('title', 'short_text', 'text'))) {
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
            $object = ORM::factory('Banket', $this->request->param('id'));
            if ($object->loaded()) {
                 if($_FILES['img']['tmp_name']){
                    $file = $_FILES['img']['tmp_name'];
                    $name = $_FILES['img']['name'];
                    $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                    $directory = 'media/img/banket/';
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
                $array = array('error' => 'category not found');
            }
        } else {
            $array = array('error' => 'data empty');
        }
        $this->set('_result', json_encode($array));
    }
    public function action_delete() {
        $news = ORM::factory('Banket', $this->request->param('id'));
        if($news->loaded()){
            if (is_file('media/img/banket/' . $news->img)) {
                if (unlink('media/img/banket/' . $news->img)) { }
            }    
            $news->delete();
            HTTP::redirect('/admin/banket');
        } else {
            throw new Kohana_HTTP_Exception_404("Banket not found");
        }
        
    }
    
    public function after() {
        parent::after();
    }

}
