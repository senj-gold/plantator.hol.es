<?php

class Model_Gallery extends ORM
{
                protected $_table_name = 'gallery';
                protected $_primary_key = 'id';
                
                  protected $_labels = array(
                        'title' => 'Название галереи',
                        'short_content' => 'Короткое описание'
                    );
                  
                  protected $_rules = array(
                            'title' => array(
                                'not_empty' => NULL,
                            ),
                            'short_content' => array(
                                'not_empty' => NULL,
                            ), 
        
    );
  
    protected $_filters = array(
        TRUE => array(
            'trim' => NULL,
        ),
    );
    
                
                protected $_has_one = array();

	/**
	 * "Belongs to" relationships
	 * @var array
	 */
	protected $_belongs_to = array(
//                        'cat' => array(
//                               'model' => 'Category',
//                               'foreign_key' => 'cat_id'
//                       ),
                   );

	/**
	 * "Has many" relationships
	 * @var array
	 */
	protected $_has_many =array(
                        'photo' => array(
                               'model' => 'Galleryphoto',
                               'foreign_key' => 'gallery_id'
                       ),
            );
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