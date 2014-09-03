<div class="content<?php if (isset($class)): ?><?= $class ?><?php endif; ?>">
    <h1><span><?= __('Фотогалерея') ?></span></h1>
    <div class='innerContent'>
        <a href="/admin/gallery/delete/<?= $object->id ?>"><?= __('Удалить галерею (вместе с фото)') ?></a>  
        <?php if ($errors) : ?>
            <div class="inputBlock alert error"><?= implode(', ', $errors); ?><a href="#"></a></div>
        <?php endif; ?> 

        <div style="margin-left: 0 auto;text-align: center;"> <h2><b><?= $object->title ?></b></h2></div>
        <div style="margin-left: 0 auto;text-align: center; "> <?= $object->short_content ?></div><br>
        <form id="upload" class="form-load" method="post" action="/admin/gallery/upload/<?= Request::initial()->param('id') ?>" enctype="multipart/form-data">
            <div id="drop"><?= __('Перетяните сюда файл из папки либо выберите на компютере') ?><a><?= __('Выбрать') ?></a>
                <input type="file" name="upl" multiple />
            </div>
            <ul></ul>
        </form>
        <div id="append-img">
            <?php foreach ($object->photo->order_by('galleryphoto.id', 'DESC')->find_all() as $photo): ?>
                <div class="img-input-text">
                    <a class="del-photo" title="<?=__('Удалить')?>" data-text="<?=__('Вы действительно хотите удалить фото?')?>" href="/admin/gallery/deletephoto/<?= $photo->id ?>"></a>
                    <img src="/imagefly/w400-h400-c/media/img/gallery/<?= $photo->filename ?>" />
                        <input type="text" name="text" value="<?= $photo->text ?>" id="input-text-<?=$photo->id?>" />
                        <input type="submit" data-id="<?=$photo->id?>" class="save-text" value="сохранить" />
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <!--End innerContent-->
</div> 
<!--End content-->	