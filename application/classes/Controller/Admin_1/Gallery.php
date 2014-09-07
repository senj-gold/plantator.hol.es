<?php

class Controller_Admin_Gallery extends Controller_Admin_Index
{

    public function before()
    {
        parent::before();

//                $this->template->v_body->v_left_menu->links[]= 'добавить категорию';
//		$this->template->left_menu->links = array(
//			'/admin/articles/create' => 'Добавить статью',
//		);
    }
    public function action_index()
    {

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
        $object = ORM::factory('Gallery')->order_by('data', 'ASC')->find_all();

//		$pagination = $object->get_pagination();

        $this->template->v_body->v_page = View::factory('admin/page/v_gallery')
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
    public function action_edit()
    {
        $this->template->styles[] = '/media/css/admin/upload.css';

        $this->template->scripts[] = '/media/libs/jquery.knob.js';
        $this->template->scripts[] = '/media/libs/jquery.ui.widget.js';
        $this->template->scripts[] = '/media/libs/jquery.iframe-transport.js';
        $this->template->scripts[] = '/media/libs/jquery.fileupload.js';
        $this->template->scripts[] = '/media/js/admin/gallery.js';

        $class = ' full-content pages';
        $id = $this->request->param('id');

        $gallery = ORM::factory('Gallery', (int) $id);
        if ($gallery->loaded())
        {
            $this->template->v_body->v_page = View::factory('admin/page/v_gallery_edit')
                ->bind('object', $gallery)
                ->bind('errors', $this->errors)
                ->bind('class', $class);
            ;
        }
        else
        {
            throw new HTTP_Exception_404('Gallery not found');
        }
    }

    public function action_create()
    {
        $class = ' full-content pages';

        if (isset($_POST['create']))
        {
            $post = Arr::map('trim', $_POST);
            try
            {

                // производим проверку всех полей
                $object = Validation::factory($post);
                $object
                    ->label('title', __('Название'))
                    ->label('short_content', __('Короткое описание'))
                    ->label('text', __('Полное описание'))
                    ->rule('title', 'not_empty')
                    ->rule('title', 'min_length', array(':value', '5'))
                    ->rule('title', 'max_length', array(':value', '512'))
                    ->rule('short_content', 'not_empty')
                    ->rule('short_content', 'min_length', array(':value', '5'))
                    ->rule('short_content', 'max_length', array(':value', '512'))
                ;
                if ($object->check())
                {


                    $gallery = ORM::factory('Gallery');

                    $gallery->values($post)->save();
                    HTTP::redirect('/admin/gallery');
                }
                else
                {
                    $this->errors = $object->errors('models/news');
                }
            }catch (ORM_Validation_Exception $e)
            {

                // если во время валидации возникли ошибки
                $this->errors = $e->errors();
                // берем значения ошибок из файла /application/messages/model/user.php
            }
        }
        $this->template->v_body->v_page = View::factory('admin/page/v_gallery_create')
            ->bind('errors', $this->errors)
            ->bind('class', $class);
    }

    public function action_delete()
    {
        $gallery = ORM::factory('Gallery', $this->request->param('id'));
        if ($gallery->loaded())
        {
            foreach ($gallery->photo->find_all() as $photo)
            {
                if (is_file('media/img/gallery/' . $photo->filename))
                {
                    if (unlink('media/img/gallery/' . $photo->filename))
                    {
                        
                    }
                }
                $photo->delete();
            }
            $gallery->delete();
            HTTP::redirect('/admin/gallery');
        }
        else
        {
            throw new Kohana_HTTP_Exception_404("Page not found");
        }
    }
    public function action_deletephoto()
    {
        $this->template = View::factory('json');
        
        $gallery = ORM::factory('Galleryphoto', $this->request->param('id'));
        if ($gallery->loaded())
        {
            
                if (is_file('media/img/gallery/' . $gallery->filename))
                {
                    if (unlink('media/img/gallery/' . $gallery->filename))
                    {
                        
                    }
                }
            $gallery->delete();
            $content = array('del' => __('Фото удалено'));
        }
        else
        {
               $content = array('error' => __('Галерея не найдена'));
        }
     
        $this->template->content = $content;
    }

    public function action_uploadtext()
    {
        $this->template = View::factory('json');
        $gallery = ORM::factory('Galleryphoto', (int) $this->request->param('id'));
        if ($gallery->loaded() && !empty($_POST['text']))
        {
            $gallery->text = libs::HardSQL($_POST['text']);
            $gallery->save();
            $content = array('save'=>__('Изменения сохранены'));
        }
        else
        {
            $content = array('error' => __('Галерея не найдена'));
        }
        $this->template->content = $content;
    }

    public function action_upload()
    {
        $this->template = View::factory('json');
        $gallery = ORM::factory('Gallery', (int) $this->request->param('id'));
        if ($gallery->loaded())
        {
            $allowed = array('png', 'jpg', 'gif', 'jpeg');
            $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($extension), $allowed))
            {
                $content = array('error' => __('Файл должен быть в формате png, jpg, gif и jpeg'));
            }
            else
            {

                if (isset($_FILES['upl']['tmp_name']))
                {
                    $file = $_FILES['upl']['tmp_name'];
                    $name = $_FILES['upl']['name'];
                    $type = strtolower(substr($name, 1 + strrpos($name, ".")));
                    $gallery_p = ORM::factory('Galleryphoto');
                    $gallery_p->gallery_id = $gallery->id;
                    $filename = $gallery_p->save_img($file, $type);
                    $gallery_p->filename = $filename;
                    $gallery_p->save();
                    $content = array(
                        'name' => $filename,
                        'id' => $gallery_p->pk()
                        );
                }
                else
                {
                    $content = array('error' => __('Файл не найден'));
                }
            }
        }
        else
        {
            $content = array('error' => __('Галерея не найдена'));
        }


        $this->template->content = $content;
    }

    public function after()
    {
//		if(empty($this->template->left_menu->links))
//                    $this->template->content->class = ' full-content pages';
        parent::after();
    }

}
