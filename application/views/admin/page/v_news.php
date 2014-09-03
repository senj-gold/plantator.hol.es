<div class="content<?php if(isset($class)):?><?= $class ?><?php endif;?>">
    <h1><span>Новости</span></h1>
    <div class='innerContent'>
        <?php if ($errors) :?>
            <div class="inputBlock alert error"><?= implode(', ', $errors); ?><a href="#"></a></div>
        <?php endif; ?>        
            <table border="1" class="table_top">
                    <tbody>
           <?php foreach ($object as $val):?>
                        <tr>
                            <td><img src="/imagefly/w500-h233-c/media/img/news/<?= $val->img ?>" /></td>
                            <td>
                                <div> <h2><b><?=$val->title?></b></h2></div><br>
                                <div> <?=$val->short_content?></div><br>
                                <div> <?=$val->text?></div>
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="/admin/news/delete/<?=$val->id?>"><?=__('Удалить новость')?></a>
                            </td>
                        </tr>
                      
            <?php endforeach;?>
                    </tbody>
                </table>

    </div>
    <!--End innerContent-->
</div> 
<!--End content-->	