<?php

class Model_News extends ORM
{
    protected $_table_name = 'news';
    protected $_primary_key = 'id';
                
//                  protected $_labels = array(
//                        'title' => 'Название',
//                        'short_content' => 'Короткое описание',
//                        'text' => 'Полное описание'
//                    );
//                  
//                  protected $_rules = array(
//                            'title' => array(
//                                'not_empty' => NULL,
//                            ),
//                            'short_content' => array(
//                                'not_empty' => NULL,
//                            ),   
//                            'text' => array(
//                            ),   
//        
//    );
//  
//    protected $_filters = array(
////        TRUE => array(
////            'trim' => NULL,
////        ),
//    );
    
                
//                protected $_has_one = array();
//
//	/**
//	 * "Belongs to" relationships
//	 * @var array
//	 */
//	protected $_belongs_to = array(
////                        'cat' => array(
////                               'model' => 'Category',
////                               'foreign_key' => 'cat_id'
////                       ),
//                   );
//
//	/**
//	 * "Has many" relationships
//	 * @var array
//	 */
//	protected $_has_many =array();
//		
//	/**
//	 * Rule definitions for validation
//	 *
//	 * @return array
//	 */
//	public function rules() 
//	{
//		return array();
//	}
//	
//	/**
//	 * Filter definitions for validation
//	 *
//	 * @return array
//	 */
//	public function filters() 
//	{
//		return array();
//	}
         public function save_img($file,$ext) {
            if ($ext == NULL) {   $ext = 'jpg';        }
      
            
                $symbols = '0123456789qwertyuiopasdfghjklzxcvbnm';
                $filename = '';
                
                for ($i = 0; $i < 10; $i++) {
                    $key = rand(0, strlen($symbols)-1);
                    $filename .= $symbols[$key];
                }
            

            $directory = 'media/img/news/';
             // генерируем название
  
            $image = Image::factory($file);
            $image->save("$directory/$filename.$ext");// сохряняем оригинал
            
//            $ratio = $image->width / $image->height;// коефициент картинки
            
//        $watermark= Image::factory("resources/images/log.png"); 
//        $ratio = $image->width / $image->height;
//        $ratio_2 = $watermark->width / $watermark->height;
//         if($ratio < $ratio_2){
//            $watermark->resize($image->width, $image->height, Image::WIDTH);
//        }else{
//            $watermark->resize($image->width, $image->height, Image::HEIGHT);
//        }      
//        $image->watermark($watermark, NULL, NULL, 20);
//         $image->save("$directory/$filename.$ext");

            // лого для стр. события    
//            $width = '500';        
//            $height = '233'; 
//            if($image->height > $height || $image->width > $width){
//                // изменяем размер изобржаения и загружаем
//                $original_ratio = $width / $height;// нужный коефициент картинки
//                if($ratio > $original_ratio){
//                    $image->resize($width, $height, Image::WIDTH);
//                }else{
//                    $image->resize($width, $height, Image::HEIGHT);
//                }
//            }
//            $image->save("$directory/500_233_$filename.$ext");
          
            
            return $filename.'.'.$ext;
        }
}