<?php

class Controller_Admin_Menu extends Controller_Admin_Index {

    public function before() {
        parent::before();
        
        $categories = ORM::factory('Category')->fulltree();

        $this->template->v_body->v_left_menu = View::factory('admin/block/v_left_menu_categories')->bind('categories', $categories);
    }

    public function action_index() {

        $id = (int) $this->request->param('id');

        if (isset($_POST['add']) && !empty($id)) {
            $this->template->scripts[] = '/media/js/admin/menu.js';
            $post = Arr::map('trim', $_POST);
            $post['cat_id'] = $id;
            $menu = ORM::factory('Menu');
            $menu->values($post);
            if ($menu->check()) {
                if (ORM::factory('Menu')->where('name', '=', $post['name'])->where('cat_id', '=', $id)->find()->loaded()) {
                    $errors = array('Позиция "' . $_POST['name'] . '" уже добавлена');
                } else {
                    $menu->create();
                }
            } else {
                $errors = $menu->errors();
            }
        }
        $menu = array();
        if (empty($id)) {
            $categories = ORM::factory('Category')->fulltree();
        } else {
            $categories = ORM::factory('Category', $id);
            if ($categories->loaded()) {
                if ($categories->has_children()) {
                    $categories = $categories->children();
                } else {
                    $menu = ORM::factory('Menu')->where('cat_id', '=', $id)->order_by('id', 'ASC')->find_all();
                    $categories = array();
                }
            }
        }

//		$pagination = $object->get_pagination();
//        $this->template->scripts[] = '/media/libs/ckeditor/ckeditor.js';
        $this->template->v_body->v_page = View::factory('admin/page/v_menu')
                          ->bind('errors', $errors)
                          ->bind('menu', $menu)
                          ->bind('categories', $categories);
       
//		$this->template->title   = 'iRen - administration system';
//		$this->template->content->objects	 = $object;
//		$this->template->content->objects	 = $object->get_objects($pagination);
//		$this->template->content->pagination = $pagination;
    }

    /**
     * Новая работа в портфолио
     */
    public function action_load() {
        if(isset($_POST['save'])){
                 $dom = new domDocument;
                  $html = $_POST['description'];
                // загружаем html в объект
                $dom->loadHTML('<?xml encoding="UTF-8">'.$html);
                $dom->preserveWhiteSpace = false;
                // элемент по тэгу
                $tr = $dom->getElementsByTagName('tr');
                foreach ($tr  as $row){
                            $menu = ORM::factory('Menu');
                            $menu->cat_id = (int)$_POST['cat_id'];
                
                            $td_in_tr = $row->getElementsByTagName('td');
                            foreach ($td_in_tr  as $key_1 =>$row1){
                                        $p_in_td =  $row1->getElementsByTagName('p');
                                         foreach ($p_in_td as $key =>$row_p){
                                  $text = trim($row_p->nodeValue);
                                  
                                  
                                  if(strlen($text) > 2 || is_numeric($text)){
                                      // названия блюд
                                    if($key_1 == 0){
//                                        $stron =  $row_p->getElementsByTagName('strong');
//                                        $b =  $row_p->getElementsByTagName('b');
//                                        foreach ($stron as $key =>$val){
//                                                   echo '<strong>'. $text.'</strong><br>';   
////                                                    $strong = $val->nodeValue;
////                                                  echo gettype($strong);
//                                        }
//                                        foreach ($b as $key =>$val){
//                                                  echo '<strong>'. $text.'</strong><br>';
////                                                    $strong = $val->nodeValue;
////                                                  echo gettype($strong);
//                                        }
                                            if($key == 0) { $menu->name = $text;}else
                                            if($key == 1) {$menu->description =$text; }else
                                            if($key == 2) {$menu->name_en =  $text;}else
                                            if($key == 3)  {$menu->description_en =  $text;}
                                    }else if($key_1 == 1){
                                      // выход
                                        if($key == 0) $menu->heft =   $text;
                                    }else if($key_1 == 2){
                                      // цена
                                         if($key == 0) $menu->price = $text;
                                    }
                                }
                            }
                            }
                            $menu->save();
                    }
                    unset($_POST['description']);
        }
        $categories = ORM::factory('Category')->fulltree();
         $this->template->v_body->v_page  = View::factory('admin/page/v_menu_load')->bind('categories', $categories);
     
    }
       function readDocx($filePath) {
    // Create new ZIP archive
    $zip = new ZipArchive;
    $dataFile = '/media/doc/document.xml';
    // Open received archive file
    if (true === $zip->open($filePath)) {
        // If done, search for the data file in the archive
        if (($index = $zip->locateName($dataFile)) !== false) {
            // If found, read it to the string
            $data = $zip->getFromIndex($index);
            // Close archive file
            $zip->close();
            // Load XML from a string
            // Skip errors and warnings
            $xml = DOMDocument::loadXML($data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            // Return data without XML formatting tags

            $contents = explode('\n',strip_tags($xml->saveXML()));
            $text = '';
            foreach($contents as $i=>$content) {
                $text .= $contents[$i];
            }
            return $text;
        }
        $zip->close();
    }
    // In case of failure return empty string
    return "";
}

    public function action_delall() {
        $id = $this->request->param('id');
        if(!empty($id)){
            DB::delete('menu')->where('cat_id', '=', $id)->execute();            
        }
        HTTP::redirect('/admin/menu');
    }
    public function action_create() {
        $this->template->content = View::factory('admin/blocks/category/edit');
//		$object = ORM::factory('category');
//		$errors = array();
//		
//		if ($_POST)
//		{
//			try
//			{
//				// Создаём запись
////				$object = $object->create_article($_POST);
////				
////				$this->request->redirect("/admin/category/");
//			}
//			catch (ORM_Validation_Exception $e) 
//			{
//				$errors = Arr::flatten($e->errors(""));
//			}
//		}

        $this->template->content->title = 'Добавить категорию';
        $this->template->content->errors = $errors;
        $this->template->content->object = $object;
    }

    /**
     * Редактирование основних параметров работи в портфолио
     * 
     * @throws Kohana_HTTP_Exception_404
     */
    public function action_edit() {
        $objects = ORM::factory('Category')->fulltree();
        $errors = array();

// Если рабр\оти нет, тогда 404 ошибка
        if (!$object->loaded())
//                    throw new Kohana_HTTP_Exception_404("Страница не найдена");
            if ($_POST) {
                try {
// Обновление даних
                    if ($_POST['fun'] == 'add') {
                        $object = ORM::factory('Category')->values($_POST);
                        if ($_POST['id'] == 0)
                            $object->make_root();
                        else
                            $object->insert_as_last_child((int) $_POST['id']);
                    }else if ($_POST['fun'] == 'edit') {
                        $object = ORM::factory('Category', (int) $_POST['id'])->values($_POST)->update();
                    } else if ($_POST['fun'] == 'del') {
                        $object = ORM::factory('Category', (int) $_POST['id']);
                        if ($object->loaded())
                            $object->delete();
                    }

                    HTTP::redirect("/admin/category/edit");
                } catch (ORM_Validation_Exception $e) {
                    $errors = Arr::flatten($e->errors(""));
                }
            }

        $this->template->title = 'Редактирование';

        $this->template->v_body->v_page = View::factory('admin/blocks/category/edit');
        $this->template->v_body->v_page->objects = $objects;
        $this->template->v_body->v_page->errors = $errors;
    }

    /**
     * Удаление работу
     * 
     * @throws Kohana_HTTP_Exception_404 
     */
    public function action_delete() {
        $cat = ORM::factory('Menu', $this->request->param('id'));
//
//        if (is_file('media/img/category/' . $cat->img)) {
//            if (unlink('media/img/category/' . $cat->img)) {
//                
//            }
//        }
//        if (isset($_GET['img']) && $_GET['img'] == 'del') {
//            if (is_file('media/img/category/' . $cat->img)) {
//                if (unlink('media/img/category/' . $cat->img)) {
//                    
//                }
//            }
//            if ($cat->loaded()) {
//                $cat->img = NULL;
//                $cat->save();
//            } else {
//                throw new Kohana_HTTP_Exception_404("Page not found");
//            }
//        } else {

//            if ($cat->has_children()) {
//                foreach ($cat->children() as $img) {
//                    if (is_file('media/img/category/' . $img->img)) {
//                        if (unlink('media/img/category/' . $img->img)) {
//                            
//                        }
//                    }
//                }
//            }
            if ($cat->loaded()) {
                $cat->delete();
                HTTP::redirect($this->request->referrer());
            } else {
                throw new Kohana_HTTP_Exception_404("Page not found");
            }
//        }
    }

    public function after() {
//         $this->template->v_body->v_page->editor = Ckeditor::instance();
//		if(empty($this->template->left_menu->links))
//                    $this->template->content->class = ' full-content pages';
        parent::after();
    }

}
