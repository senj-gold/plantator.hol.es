<?php

class Controller_Admin_Category extends Controller_Admin_Index {

    public function before() {
        parent::before();

//                $this->template->v_body->v_left_menu->links[]= 'добавить категорию';
//		$this->template->left_menu->links = array(
//			'/admin/articles/create' => 'Добавить статью',
//		);
    }

    public function action_index() {
        $class = ' full-content pages';

        $this->template->scripts[] = '/media/js/admin/category.js';
        if (isset($_POST['add']) && !empty($_POST['name'])) {
            $cat = ORM::factory('Category');
            $cat->name = $_POST['name'];
            if ($_POST['id'] == 0) {
                if (ORM::factory('Category')->where('name', '=', $_POST['name'])->where('parent_id', '=', 0)->find()->loaded()) {
                    $errors = array('Категория "' . $_POST['name'] . '" уже добавлена');
                } else {
                    $cat->make_root();
                }
            } else {
                $cld = ORM::factory('Category', (int) $_POST['id'])->children();
                if (isset($cld[0]->parent_id) && ORM::factory('Category')->where('name', '=', $_POST['name'])->where('parent_id', '=', $cld[0]->parent_id)->find()->loaded()) {
                    $errors = array('Подкатегория "' . $_POST['name'] . '" уже добавлена');
                } else {
                    $cat->insert_as_last_child((int) $_POST['id']);
                }
            }
        } else if (isset($_POST['add_img']) && $_FILES['img']['tmp_name']) {
            $cat = ORM::factory('Category', $_POST['id']);
            $file = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $type = strtolower(substr($name, 1 + strrpos($name, ".")));
            $cat->img = $this->_upload_img($file, $ext, $_POST['id']);
            $cat->save();
        }
        $object = ORM::factory('Category')->fulltree();

//		$pagination = $object->get_pagination();

        $this->template->v_body->v_page = View::factory('admin/page/v_category')
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



    public function action_delete() {
        $cat = ORM::factory('Category', $this->request->param('id'));

        if (is_file('media/img/category/' . $cat->img)) {
            if (unlink('media/img/category/' . $cat->img)) {
                
            }
        }
        if (isset($_GET['img']) && $_GET['img'] == 'del') {
            if (is_file('media/img/category/' . $cat->img)) {
                if (unlink('media/img/category/' . $cat->img)) {
                    
                }
            }
            if ($cat->loaded()) {
                    $cat->img = NULL;
                    $cat->save();
            } else {
                throw new Kohana_HTTP_Exception_404("Page not found");
            }
        } else {

            if ($cat->has_children()) {
                foreach ($cat->children() as $img) {
                    if (is_file('media/img/category/' . $img->img)) {
                        if (unlink('media/img/category/' . $img->img)) {
                            
                        }
                    }
                }
            }
            if ($cat->loaded()) {
                $cat->delete();
                HTTP::redirect('/admin/category');
            } else {
                throw new Kohana_HTTP_Exception_404("Page not found");
            }
        }
    }

    public function after() {
//		if(empty($this->template->left_menu->links))
//                    $this->template->content->class = ' full-content pages';
        parent::after();
    }

}
