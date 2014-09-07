<div class="content<?if(isset($class)):?><?= $class ?><?  endif;?>">
    <h1><span>Меню</span></h1>
    <div class='innerContent'>
        <?php if ($errors) :?>
            <div class="inputBlock alert error"><?= implode(', ', $errors); ?><a href="#"></a></div>
        <?php endif; ?>

        <?php foreach ($categories as $val): ?>
                <form action="" method="POST" enctype="multipart/form-data"  style="width: 100%;line-height: 25px;">
                <table style="width: 100%;" class="tr-hover">
                    <tr>
                        <td>
                            <div  class="hover-show-hover">
                                <input type="hidden" name="id" value="<?= $val->id ?>">
                                <?= str_repeat('&nbsp;&nbsp;&nbsp;', $val->lvl); ?>
                                <span class="edit-hidden-click name" <?php if ($val->lvl == 1): ?>style="font-size: 20px;"<?php endif; ?>><?= $val->name ?></span>
                                <input class="edit-show-click " type="text" name="name" value="<?= $val->name ?>">
                            </div>
                        </td>
                        <td width="120px;">
                            <?php if($val->menu->count_all() > 0):?><a href="/admin/menu/index/<?=$val->id?>">(<?=$val->menu->count_all();?> шт.) подробнее</a><?php endif;?>
                        </td>
                    </tr>
                </table>
            </form>
        <?php endforeach; ?>
<?php if(count($menu) > 0):?>
<a href="/admin/menu/delall/<?=  Request::initial()->param('id')?>">Очистить раздел ваще )))</a>
                <table style="width: 100%;" class="tr-hover table_center">
                    <thead>
        <tr style="border:1px solid #d7d7d7">
            <td>Название блюда</td>
            <td>Выход</td>
            <td>Цена</td>
            <td></td>
        </tr>
        </thead>
        
        <?php foreach ($menu as $val): ?>
                    <tr>
                        <td  style="border:1px solid #d7d7d7;padding:5px">
                            <form action="" method="POST" enctype="multipart/form-data"  style="width: 100%;line-height: 25px;">
                                <div  class="hover-show-hover">
                                    <input type="hidden" name="id" value="<?= $val->id ?>">
                                    <strong class="edit-hidden-click name"><?= $val->name ?></strong>
                                    <input class="edit-show-click " type="text" name="name" value="<?= $val->name ?>">
                                    <a href="/admin/menu/delete/<?= $val->id ?>" title="Удалить" class="delete-botton show-hover data-confirm" data-confirm="Вы действительно хотите удалить блюдо '<?= $val->name ?>'" style="left: 15px;"></a>
                                    <div><?= $val->description ?></div>
                                    <div><strong><?= $val->name_en ?></strong></div>
                                    <div><?= $val->description_en ?></div>
                                </div>
                            </form>
                        </td>
                        <td style="border:1px solid #d7d7d7;padding:5px">
                            <a href="#" data-type="text" id="heft" data-pk="<?=$val->id?>" data-title="Введите выход" class="editable editable-click admin-editable-menu"><?=$val->heft?></a>
                        </td>
                        <td style="border:1px solid #d7d7d7;padding:5px">
                            <?=$val->price?>
                        </td>
                    </tr>
                
        <?php endforeach; ?>
            </table>
<?php endif;?>
    </div>
  
    <!--End innerContent-->
</div>