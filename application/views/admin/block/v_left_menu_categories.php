    <div class="menu">
            <h1><span>Меню</span></h1>
            <ul>
                <?php foreach($categories as $val):?>
                <li><?= str_repeat('&nbsp;&nbsp;&nbsp;', $val->lvl); ?>
                    <?php if(Request::initial()->param('id') == $val->id):?>
                        <a><?=$val->name?></a>
                    <?php else:?>
                        <a href="/admin/menu/index/<?=$val->id;?>"><?=$val->name?></a>
                    <?php endif;?>
                        (<?=$val->menu->count_all()?>)
                </li>
                <?php endforeach;?>
            </ul>	
    </div>