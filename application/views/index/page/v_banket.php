<div class="row bg-1 mar-d">
        <div class="row mar-t mar-d-6-25 cell-d-87-5 vpad2">
            <h1 class="pad text-m-center text-t-left">Банкети</h1>
            <p class="pad text-m-center text-t-left"><i>Ми любимо влаштовувати гучні вечірки і запрошувати гостей. Якщо ви хочете весело провести свято чи вихідний - ласкаво просимо в наш заклад. Масу вражень і спогадів гарантуємо  :)</i></p>
            <div id="comp_cc01c7475c1c1bc8726ef56728b746db">
                <section class="row">
                    
                    <?php foreach ($banket as $item): ?>
                        <a id="article<?=$item->id?>"></a>
                        <article id="bx_2647885750_855" class="row vpad2">
                            <header class="pad vpad"><h2><?php echo $item->title?></h2></header>
                            <div class="cell-m-100 cell-t-62-5 pad vpad">
                                <p class="small opacity">
                                    <?php echo $item->short_text?>
                                </p>
                                <p>
                                    <?php echo $item->text?>
                                </p>
                            </div>
                            <div class="cell-m-100 cell-t-37-5 pad vpad">
                                <figure class="row border-radius-1"><img src="/media/img/banket/<?=$item->img?>"></figure>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </section> 
            </div>		
        </div>
    </div>