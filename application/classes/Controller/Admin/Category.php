<?php

class Controller_Admin_Category extends Controller_Admin_Index {

    public function before() {
        parent::before();

//                $this->template->v_body->v_left_menu->links[]= 'добавить категорию';
//		$this->template->left_menu->links = array(
//			'/admin/articles/create' => 'Добавить статью',
//		);
        //$this->default_template = 'admin/index';
    }

    public function action_index() {

        $objects = ORM::factory('Category')->fulltree();
        $this->set('_items', $objects);

    }
    public function action_getList() {
        $parent = $this->request->query('parent');

        $data = array ();

        $category = ORM::factory('Category');

        if ($parent == "#") {
            $objects = $category->roots();
            foreach ($objects as $object) {
                if (!empty($object->name)) {
                    $data[] = array (
                        "id" => $object->id,
                        "text" => $object->name,
                        "icon" => "fa fa-folder icon-lg icon-state-success",
                        "children" => true,
                        "type" => "root"
                    );
                }
            }
        } else {
            $object = ORM::factory('Category', $parent);
            $childrens = $object->children();
            if (count($childrens) > 0) {
                foreach ($childrens as $children) {
                    if (!empty($children->name)) {
                        $data[] = array (
                            "id" => $children->id,
                            "text" => $children->name . ' (<a href="/admin/menu/clearCaregory/'.$children->id.'" data-question=\'Вы действительно хотите удалить все блюда из категории "'.$children->name.'"?\' class="menu-url admin-delete" title="Удалить все блюда из этого раздела">Очистить</a>)',
                            "icon" => "fa fa-folder icon-lg icon-state-success",
                            "children" => true,
                        );
                    }
                }
            } else {
                $objects = ORM::factory('Menu')->where('cat_id', '=', $object->id)->find_all();
                foreach ($objects as $object) {
                    $data[] = array (
                        "id" => 'menu_' . $object->id,
                        "text" => '<a href="/admin/menu/edit/'.$object->id.'" class="menu-url">'.$object->name.'</a>'. ' ('.$object->heft . ' гр.)'.' '.$object->price.' грн',
                        "icon" => "fa fa-folder icon-lg icon-state-info",
                        "children" => false,
                    );
                }
            }
        }
 
        $this->response->headers('Content-Type','application/json');
        $this->default_template = 'admin/json';
        $this->set('_result', json_encode($data));
    }
    /**
     * 
     * @throws Kohana_HTTP_Exception_404
     */
    public function action_findname()
    {
        $this->default_template = 'admin/json';
        $result = array();
        $query = $this->request->query('query');
        if (isset($query)) {
            $objects = ORM::factory('Category')
                    ->where('name', 'LIKE', $query.'%')
                    ->order_by('scope')
                    ->order_by('lft')
                    ->find_all();
        } else {
            $objects = ORM::factory('Category')
                    ->fulltree();
        }
        foreach ($objects as $object) {
            if (!empty($object->name)) {
                $result[] =  array(
                    'id' => $object->id,
                    'text' => $object->getEmptyLvl().$object->name,
                    'name' => $object->id,
                    'value' => $object->id
                );
            }
        }
            
        $this->set('_result', json_encode($result));
    }
    public function action_create()
    {
        $this->default_template = 'admin/json';
        $errors = array();
        $errors['name'] = array('Категория <b>fg</b> уже добавлена');
        if($this->request->post()){
            $post = $this->request->post();
            $type = $post['type'];
            $id = $post['id'];
            $value = $post['value'];
            $parent = (int)$post['parent'];
            
            if ($type === 'new') {
                if(ORM::factory('Category')->where('name', '=', $value)->where('parent_id', '=', 0)->find()->loaded()){
                    $errors['name'] = array('Категория <b>"'.$value.'"</b> уже добавлена');
                } else {
                    $cat = ORM::factory('Category');
                    $cat->name = $value;
                    $cat->insert_as_last_child($parent);
                }
            } elseif ($type === 'rename') {
                $cld = ORM::factory('Category', $parent)->children();
                if(count($cld) > 0 && ORM::factory('Category')->where('name', '=', $value)->where('parent_id', '=', $cld[0]->parent_id)->find()->loaded()){
                    $errors['name'] = array('Подкатегория <b>"'.$value.'"</b> уже добавлена');
                }else{
                    $cat = ORM::factory('Category', $id);
                    if ($cat->loaded()) {
                        $cat->name = $value;
                        $cat->update();
                    } else {
                        $errors['name'] = array('Категория не найдена');
                    }
                }
            }
        }
        $this->set('_result', array('error' => $errors));
    }
    
    
    public function action_delete() {
        $this->default_template = 'admin/json';
        if($this->request->post()){
            $post = $this->request->post();
            $id = $post['id'];
            if (!in_array($id, array(1,23,24))){
                throw new Kohana_HTTP_Exception_403("No access");
            }
            $cat = ORM::factory('Category', $id);
            if ($cat->loaded()) {
                $cat->delete();
                HTTP::redirect('/admin/category');
            } else {
                throw new Kohana_HTTP_Exception_404("Page not found");
            }
        }
    }
    public function after() {

        parent::after();
    }

}
