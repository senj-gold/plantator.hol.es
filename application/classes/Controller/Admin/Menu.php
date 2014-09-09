<?php

class Controller_Admin_Menu extends Controller_Admin_Index {

    public function before() {
        parent::before();
    }
    public function action_index() {
        $diches = ORM::factory('Menu')->find_all();
        $this->set('_diches', $diches);
    }
    public function action_create() {
        $objects = ORM::factory('Category')->fulltree();
        $this->set('_categories', $objects);
		$errors = array();
		
		if ($this->request->post()) {
			try {
                $object = ORM::factory('Menu');
				$object->values($this->request->post());
                $object->create();
				
				HTTP::redirect("/admin/menu/edit/".$object->pk());
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

        $this->set('_errors', $errors);
    }
    public function action_edit() {
        $id = (int) $this->request->param('id');
        $menu = ORM::factory('Menu', $id);
        if(!$menu->loaded()){
            throw new Kohana_HTTP_Exception_404("Page not found");
        }
        $objects = ORM::factory('Category')->fulltree();
        $this->set('_categories', $objects);
        $this->set('_object', $menu);
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
                $object = ORM::factory('Menu', $id);
                if ($object->loaded()) {
                    if (in_array($name, array('name', 'description', 'name_en', 'description_en', 'heft', 'price', 'cat_id'))) {
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
                    $array = array('error' => 'room not found');
                }
            } else {
                $array = array('error' => 'data');
            }
        } else {
            $array = array('error' => 'data empty');
        }
        $this->set('_result', json_encode($array));
    }
     /**
     * delete
     * 
     * @throws Kohana_HTTP_Exception_404 
     */
    public function action_delete() {
        $dish = ORM::factory('Menu', $this->request->param('id'));
        if ($dish->loaded()) {
            $dish->delete();
                HTTP::redirect('/admin/menu');
        } else {
                throw new Kohana_HTTP_Exception_404("Page not found");
        }
    }

    public function action_load() {
        $post = $this->request->post();
        $items = array();
        $errors = array();
        if($post && is_numeric($post['cat_id'])){
            $dom = new domDocument;
            $html = $post['description'];
            
            // загружаем html в объект
            $dom->loadHTML('<?xml encoding="UTF-8">'.$html);
            $dom->preserveWhiteSpace = false;
                
            // элемент по тэгу
            $trs = $dom->getElementsByTagName('tr');
                foreach ($trs  as $tr){
                    $menu = ORM::factory('Menu');
                    $menu->cat_id = (int)$post['cat_id'];
                    $item = array();
                    $tds = $tr->getElementsByTagName('td');
                    foreach ($tds  as $key_1 =>$td){
                        $ps =  $td->getElementsByTagName('p');
                        foreach ($ps as $key =>$p){
                            $text = trim($p->nodeValue);
                            if(strlen($text) > 2 || is_numeric($text)){
                                if ($key_1 === 0) {
                                    $item['name_'.$key] = $text;
                                    if ($key === 0) {
                                        $menu->name = $text;
                                    } elseif ($key === 1) {
                                        $menu->description =$text;
                                    } elseif ($key === 2) {
                                        $menu->name_en =  $text;
                                    } elseif($key === 3) {
                                        $menu->description_en =  $text;                                                
                                    }
                                } elseif ($key_1 === 1) {
                                    $item['heft'] = $text;
                                    if($key == 0) $menu->heft =   $text;
                                }else if($key_1 == 2){
                                    $item['price'] = $text;
                                    if($key == 0) $menu->price = $text;
                                }
                            }
                        }
                    }
                    if(isset($post['save'])){
                        $menu->create();
                    }
                    $items[] = $item;
                }
                 if(isset($post['save'])){
                        HTTP::redirect('/admin/menu');
                    }
        } elseif ($post) {
            $errors['cat_id'] = 'Укажите категорию';
        }
        $categories = ORM::factory('Category')->fulltree();
        $this->set('_categories', $categories);
        $this->set('_post', $post);
        $this->set('_table', $items);
        $this->set('_errors', $errors);
     
    }
//    function readDocx($filePath) {
//    // Create new ZIP archive
//    $zip = new ZipArchive;
//    $dataFile = '/media/doc/document.xml';
//    // Open received archive file
//    if (true === $zip->open($filePath)) {
//        // If done, search for the data file in the archive
//        if (($index = $zip->locateName($dataFile)) !== false) {
//            // If found, read it to the string
//            $data = $zip->getFromIndex($index);
//            // Close archive file
//            $zip->close();
//            // Load XML from a string
//            // Skip errors and warnings
//            $xml = DOMDocument::loadXML($data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
//            // Return data without XML formatting tags
//
//            $contents = explode('\n',strip_tags($xml->saveXML()));
//            $text = '';
//            foreach($contents as $i => $content) {
//                $text .= $contents[$i];
//            }
//            return $text;
//        }
//        $zip->close();
//    }
//    return "";
//}
//
    public function action_clearCaregory() {
        $id = $this->request->param('id');
        if(!empty($id)){
            DB::delete('menu')->where('cat_id', '=', $id)->execute();            
        }
        HTTP::redirect('/admin/category');
    }


    public function after() {
        parent::after();
    }
}
