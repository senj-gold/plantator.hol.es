<?php

class Controller_Admin_News extends Controller_Admin_Index {

    public function before() {
        parent::before();
    }

    public function action_index() {
        
        $news = ORM::factory('News')->order_by('data', 'DESC')->find_all();
        $this->set('_news', $news);
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
                        ->label('short_content', __('Короткое описание'))
                        ->label('text', __('Полное описание'))
                        ->rule('title', 'not_empty')
                        ->rule('title', 'min_length', array(':value', '5'))
                        ->rule('title', 'max_length', array(':value', '512'))
                        ->rule('short_content', 'not_empty')
                        ->rule('short_content', 'min_length', array(':value', '5'))
                        ->rule('short_content', 'max_length', array(':value', '512'));
                if($object->check()){
                    
                    $object = ORM::factory('News');
                    $object->values($this->request->post());
                    if($_FILES['img']['tmp_name']){

                        $file = $_FILES['img']['tmp_name'];
                        $name = $_FILES['img']['name'];
                        $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                        $post['img'] = $object->save_img($file, $type);
                        $object->values($post)->save();
                        HTTP::redirect('/admin/news');

                    }else{

                                    $this->errors['img'] = __('Картинка не загружена');
                    }
                    $object->create();
				
                    HTTP::redirect("/admin/news/edit/".$object->pk());
                } else {
                    $errors = $object->errors('models/news');
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
                $object = ORM::factory('News', $id);
                if ($object->loaded()) {
                    if (in_array($name, array('title', 'short_content', 'text'))) {
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
                    $array = array('error' => 'news not found');
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
            $object = ORM::factory('News', $this->request->param('id'));
            if ($object->loaded()) {
                 if($_FILES['img']['tmp_name']){
                    $file = $_FILES['img']['tmp_name'];
                    $name = $_FILES['img']['name'];
                    $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                    $directory = 'media/img/news/';
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
        $news = ORM::factory('News', $this->request->param('id'));
        if($news->loaded()){
            if (is_file('media/img/news/' . $news->img)) {
                if (unlink('media/img/news/' . $news->img)) { }
            }    
            $news->delete();
            HTTP::redirect('/admin/news');
        } else {
            throw new Kohana_HTTP_Exception_404("News not found");
        }
        
    }
    
    public function after() {
        parent::after();
    }

}
