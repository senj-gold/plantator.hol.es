<?php

class Model_Reservation extends ORM
{
                protected $_table_name = 'reservation';
                protected $_primary_key = 'id';
                
                  protected $_labels = array(
                        'firstname' => 'Імя',
                        'phone' => 'Телефон',
                        'email' => 'Email'
                    );
                  
                  protected $_rules = array(
                            'firstname' => array(
                                'not_empty' => NULL,
                            ),
                            'phone' => array(
                                'not_empty' => NULL,
                            ), 
                            'email' => array(
                                'email' => true,
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