<div class="content<?php if(isset($class)):?><?= $class ?><?php endif;?>">
    <h1><span><?=__('Добавление новости')?></span></h1>
    <div class='innerContent'>
        <?php if ($errors) :?>
            <div class="inputBlock alert error"><?= implode(', ', $errors); ?><a href="#"></a></div>
        <?php endif; ?>
            <form method="POST" enctype="multipart/form-data">
                <table border="1">
                    <tbody>
                        <tr>
                            <td><?=__('Название')?>*</td>
                            <td><input type="text" name="title" value="<?php if(isset($_POST['title'])) echo $_POST['title']?>" /></td>
                        </tr>
                        <tr>
                            <td><?=__('Короткое описание')?>*</td>
                            <td><input type="text" name="short_content" value="<?php if(isset($_POST['short_content'])) echo $_POST['short_content']?>" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="create" value="<?=__('Сохранить')?>" /></td>
                        </tr>
                    </tbody>
                </table>

            </form>
  

    </div>
    <!--End innerContent-->
</div> 
<!--End content-->	