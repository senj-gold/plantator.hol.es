<?php

class Model_Category extends ORM_MPTT
{
                protected $_table_name = 'categories';
                protected $_primary_key = 'id';
                
                protected $_has_many =array(
                    'menu' => array(
                        'model'=>'Menu',
                        'foreign_key' => 'cat_id')
                    );
                
                public function getEmptyLvl()
                {
                    return str_repeat(
                            html_entity_decode('&nbsp;', ENT_QUOTES, 'UTF-8'), ($this->lvl + 1) * 3
                        );
                }
}