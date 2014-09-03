<div class="content<?php if(isset($class)):?><?= $class ?><?php endif;?>">
    <h1><span><?=__('Фотогалерея')?></span></h1>
    <div class='innerContent'>
        <?php if ($errors) :?>
            <div class="inputBlock alert error"><?= implode(', ', $errors); ?><a href="#"></a></div>
        <?php endif; ?>        
            
           <?php $i = 0; foreach ($object as $val):?>
                        
                                <a href="/admin/gallery/edit/<?=$val->id?>"> <h2><b style="font-size: 20px;"><?=$val->title?></b></h2></a><br>
                                <div> <?=$val->short_content?></div>
                                <a href="/admin/gallery/delete/<?=$val->id?>"><?=__('Удалить галерею (вместе с фото)')?></a>
                                <br>
                                <br>
                                <br>
                                <br>
                       
            <?php endforeach;?>

    </div>
    <!--End innerContent-->
</div> 
<!--End content-->	