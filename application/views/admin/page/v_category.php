<div class="content<?if(isset($class)):?><?= $class ?><?  endif;?>">
    <h1>
        <form action="" method="POST" enctype="multipart/form-data" style="float: left;margin-left: 5px;">
            <table>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="0">
                        <input type="text" name="name" style="margin-left: 10px;padding-left: 5px" placeholder="Добавить категорию">
                    </td>
                    <td>
                        <?= Form::submit('add', 'Добавить категорию', array('class' => 'm')); ?>
                    </td>
                </tr>
            </table>
        </form>
    </h1>
    <div class='innerContent'>
        <?php if ($errors): ?> <div class="inputBlock alert error">  <?= implode(', ', $errors); ?> <a href="#"></a> </div>  <?php endif; ?>
       
        <?php foreach ($object as $val): ?>
            <form action="" method="POST" enctype="multipart/form-data"  style="width: 100%;line-height: 25px;">
                <table style="width: 100%;" class="tr-hover">
                    <tr>
                        <td>
                            <div  class="hover-show-hover">
                                <input type="hidden" name="id" value="<?= $val->id ?>">
                                <?= str_repeat('&nbsp;&nbsp;&nbsp;', $val->lvl); ?>
                                <span class="edit-hidden-click name" <?php if ($val->lvl == 1): ?>style="font-size: 20px;"<?php endif; ?>><?= $val->name ?></span>
                                <input class="edit-show-click " type="text" name="name" value="<?= $val->name ?>">
                                <?php if ($val->lvl == 2): ?><botton class="edit-botton show-hover" title="Редактировать"></botton><?php endif;?>
                                <botton class="save-botton show-click" title="Сохранить"></botton>
                                <?php if($val->lvl == 1):?><botton class="save-botton-add show-click" title="Добавить"></botton><?php endif;?>
                                <?php if($val->menu->count_all() == 0 && $val->lvl != 1):?><a href="/admin/category/delete/<?= $val->id ?>" title="Удалить" class="delete-botton show-hover data-confirm" data-confirm="Вы действительно хотите удалить раздел '<?= $val->name ?>'"></a><?php endif;?>
                                <?php if($val->lvl == 1):?><botton class="add-botton show-hover" title="Добавить раздел"></botton><?php endif;?>
                            </div>
                        </td>
                        <td width="120px;">
                            <?php if($val->menu->count_all() > 0):?><a href="/admin/menu/index/<?=$val->id?>">(<?=ORM::factory('Menu')->where('cat_id', '=', $val->id)->count_all();?> шт.) подробнее</a><?php endif;?>
                        </td>
                    </tr>
                </table>
            </form>
        <?php endforeach; ?>
    </div>
</div> 