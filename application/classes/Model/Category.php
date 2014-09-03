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
}