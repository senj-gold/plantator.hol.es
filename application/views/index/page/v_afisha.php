    <div class="row bg-1 mar-d">
        <div class="row mar-t mar-d-6-25 cell-d-87-5 vpad2">
            <h1 class="pad text-m-center text-t-left">Афіша</h1>
            <p class="pad text-m-center text-t-left"><i>Ми любимо влаштовувати гучні вечірки і запрошувати гостей . Якщо ви хочете весело провести свято чи вихідний - ласкаво просимо до нашого закладу . Масу вражень та спогадів гарантуємо :)</i></p>
            <div id="comp_f6daca05f65415d798ec4860d557d3e1">
                <section class="row">
                    <?php foreach ($news as $val):?>
                        <a id="article<?=$val->id?>"></a>
                        <article id="bx_2647885750_<?=$val->id?>" class="row vpad2 text-m-center text-t-left">
                            <div class="cell-m-100 cell-t-37-5 pad vpad">
                                <figure class="row border-radius-1"><img src="/imagefly/w500-h233-c/media/img/news/<?= $val->img ?>" /></figure>
                            </div>
                            <div class="cell-m-100 cell-t-62-5 pad vpad">
                                <h2><?=$val->title?></h2>
                                <p class="small opacity"><?php $date = explode(' ', $val->data);$date = explode('-', $date[0]);?><?=$date[2].'.'.$date[1].'.'.$date[0]?></p>
                                <p><?=$val->short_content?></p>
                                <?php if(!empty($val->text)):?>
                                <div>
                                    <p class="dropdown">
                                        <a href="#" class="js">Подробнее</a></p>
                                    <div class="hidden small"><?=$val->text?></div>
                                </div>
                                <?php endif;?>
                            </div>
                        </article>
                    <?php endforeach;?>
                </section> </div>		
        </div>
    </div>