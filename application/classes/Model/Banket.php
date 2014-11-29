<?php

class Model_Banket extends ORM
{
    protected $_table_name = 'banket';
    protected $_primary_key = 'id';
                
    public function save_img($file,$ext) {
        if ($ext == NULL) {   $ext = 'jpg';        }
      
            
        $symbols = '0123456789qwertyuiopasdfghjklzxcvbnm';
        $filename = '';
                
        for ($i = 0; $i < 10; $i++) {
            $key = rand(0, strlen($symbols)-1);
            $filename .= $symbols[$key];
        }

        $directory = 'media/img/banket/';
  
        $image = Image::factory($file);
        $image->save("$directory/$filename.$ext");// сохряняем оригинал
         
        return $filename.'.'.$ext;
    }
}