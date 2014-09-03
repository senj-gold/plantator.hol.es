<?php

class Controller_Admin_News extends Controller_Admin_Index {

    public function before() {
        parent::before();

//                $this->template->v_body->v_left_menu->links[]= 'добавить категорию';
//		$this->template->left_menu->links = array(
//			'/admin/articles/create' => 'Добавить статью',
//		);
    }

    public function action_index() {
        $class = ' full-content pages';

        $this->template->scripts[] = '/media/js/admin/news.js';
//        if (isset($_POST['add']) && !empty($_POST['name'])) {
//            $cat = ORM::factory('Category');
//            $cat->name = $_POST['name'];
//            if ($_POST['id'] == 0) {
//                if (ORM::factory('Category')->where('name', '=', $_POST['name'])->where('parent_id', '=', 0)->find()->loaded()) {
//                    $errors = array('Категория "' . $_POST['name'] . '" уже добавлена');
//                } else {
//                    $cat->make_root();
//                }
//            } else {
//                $cld = ORM::factory('Category', (int) $_POST['id'])->children();
//                if (isset($cld[0]->parent_id) && ORM::factory('Category')->where('name', '=', $_POST['name'])->where('parent_id', '=', $cld[0]->parent_id)->find()->loaded()) {
//                    $errors = array('Подкатегория "' . $_POST['name'] . '" уже добавлена');
//                } else {
//                    $cat->insert_as_last_child((int) $_POST['id']);
//                }
//            }
//        } else if (isset($_POST['add_img']) && $_FILES['img']['tmp_name']) {
//            $cat = ORM::factory('Category', $_POST['id']);
//            $file = $_FILES['img']['tmp_name'];
//            $name = $_FILES['img']['name'];
//            $type = strtolower(substr($name, 1 + strrpos($name, ".")));
//            $cat->img = $this->_upload_img($file, $ext, $_POST['id']);
//            $cat->save();
//        }
        $object = ORM::factory('News')->order_by('data', 'DESC')->find_all();

//		$pagination = $object->get_pagination();

        $this->template->v_body->v_page = View::factory('admin/page/v_news')
                          ->bind('errors', $errors)
                          ->bind('class', $class)
                          ->bind('object', $object);
//		$this->template->title   = 'iRen - administration system';
//		$this->template->content->objects	 = $object;
//		$this->template->content->objects	 = $object->get_objects($pagination);
//		$this->template->content->pagination = $pagination;
    }

    /**
     * Новая работа в портфолио
     */



    public function action_create() {
         $class = ' full-content pages';
        $this->template->scripts[] = '/media/js/admin/news.js';
        
        if(isset($_POST['create'])){
           $post = Arr::map('trim', $_POST);
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
                                            ->rule('short_content', 'max_length', array(':value', '512'))
 ;
                                            if($object->check()){
                    if($_FILES['img']['tmp_name']){

                                    $news = ORM::factory('News');
                         $file = $_FILES['img']['tmp_name'];
                        $name = $_FILES['img']['name'];
                        $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                        $post['img'] = $news->save_img($file, $type);
                          $news->values($post)->save();
                          HTTP::redirect('/admin/news');

                    }else{

                                    $this->errors['img'] = __('Картинка не загружена');
                    }
                      }else{
                                                                           $this->errors = $object->errors('models/news');
                                                                          
                                            }
             } catch (ORM_Validation_Exception $e) {

				// если во время валидации возникли ошибки
				 $this->errors=$e->errors();			
				// берем значения ошибок из файла /application/messages/model/user.php
			}
            
            
        }
          $this->template->v_body->v_page = View::factory('admin/page/v_news_edit')
                          ->bind('errors', $this->errors)
                          ->bind('class', $class);
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
                throw new Kohana_HTTP_Exception_404("Page not found");
            }
        
    }

    public function after() {
//		if(empty($this->template->left_menu->links))
//                    $this->template->content->class = ' full-content pages';
        parent::after();
    }

}
