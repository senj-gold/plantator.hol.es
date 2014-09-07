<?php

class Model_Menu extends ORM
{
                protected $_table_name = 'menu';
                protected $_primary_key = 'id';
                
                protected $_has_one = array();

	/**
	 * "Belongs to" relationships
	 * @var array
	 */
	protected $_belongs_to = array(
        'category' => array(
               'model' => 'Category',
               'foreign_key' => 'cat_id'
       ),
   );

	/**
	 * "Has many" relationships
	 * @var array
	 */
	protected $_has_many =array();
		
	/**
	 * Rule definitions for validation
	 *
	 * @return array
	 */
	public function rules() 
	{
		return array();
	}
	
	/**
	 * Filter definitions for validation
	 *
	 * @return array
	 */
	public function filters() 
	{
		return array();
	}
}