<div class="content<?if(isset($class)):?><?= $class ?><?  endif;?>">
    <h1><span>Меню</span></h1>
    <div class='innerContent'>
        
<form method="POST" enctype="multipart/form-data">
   
    
     <?php echo Ckeditor::instance()->editor('description', isset($_POST['description'])? $_POST['description']:'', array('id'=>'text','width' => '99%')); ?>
     <select name="cat_id">
        <?php foreach ($categories as $val):?>
        <option value="<?=$val->id?>"<?php if($val->lvl == 1):?> disabled=""<?php endif;?><?php if(isset($_POST['cat_id']) && $val->id == $_POST['cat_id']):?> selected=""<?php endif;?>><?=str_repeat('&nbsp;', $val->lvl)?><?=$val->name?></option>
        <?php endforeach;?>
    </select>
    
    <input type="submit" value="Проверить" />

<?php   if(isset($_POST['description'])){
            $html = $_POST['description'];
           
           $dom = new domDocument;

// загружаем html в объект
$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
$dom->preserveWhiteSpace = false;
// элемент по тэгу
$tr = $dom->getElementsByTagName('tr');?>
    <table style="width: 100%;" class="table_center">
        <thead>
        <tr style="border:1px solid #d7d7d7">
            <td>Название блюда</td>
            <td>Выход</td>
            <td>Цена</td>
            <td></td>
        </tr>
        </thead>

<?php foreach ($tr  as $row){
                // получаем все td из tr
                $td_in_tr = $row->getElementsByTagName('td');
        echo '<tr style="border:1px solid #d7d7d7;pagging:5px">';
                        foreach ($td_in_tr  as $key_1 =>$row1){
            echo '<td  style="border:1px solid #d7d7d7;pagging:5px">';
                        // получаем все p в td
                        $p_in_td =  $row1->getElementsByTagName('p');
                            foreach ($p_in_td as $key =>$row_p){
                                  $text = trim($row_p->nodeValue);
                                  
                                  
                                  if((strlen($text) > 2 || is_numeric($text) && !empty($text))){
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
                                            if($key == 0) { echo '<strong>'. $text.'</strong><br>';}else
                                            if($key == 1) { echo ''.$text.'<br>';}else
                                            if($key == 2) { echo '<strong>'. $text.'</strong><br>';}else
                                            if($key == 3)  {echo ''.$text.'';}
                                    }else if($key_1 == 1){
                                      // выход
                                        if($key == 0)  echo $text;
                                    }else if($key_1 == 2){
                                      // цена
                                         if($key == 0)  echo $text;
                                    }
                                }
                            }
            echo '</td>';
                            
                            }
    echo '</tr>';
}
//foreach ($row->getElementsByTagName('p') as $row_p)
//echo $row_p->nodeValue.'<br>';
        }?>
            </table>
    <?php   if(isset($_POST['description'])): ?>
      <input type="submit"  name="save" value="Сохранить" />
      <?php endif;?>
    </form>

    </div>
    </div>
