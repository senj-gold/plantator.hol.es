<div class="row bg-1 mar-d">
        <div class="row mar-t mar-d-6-25 cell-d-87-5">
            <section class="row">
                <header class="text-m-center text-t-left vpad row">
                    <div class="vpad">
                        <?php foreach ($category as $val):?>
                        <div class="cell-m-auto"><a class="pad<?php if(Request::initial()->action() == $val->id): $name = $val->name;?> active<?php endif;?>" href="/menu/<?=$val->id?>/"><strong><?=$val->name?></strong></a></div>
                        <?php endforeach;?>
                    </div> 
                    <div class="vpad"><h1 class="pad"><?=$name?></h1></div>
                    <div class="vpad">
                        <?php foreach ($category_2 as $val):?>
                        <span class="pad nowrap"><a class="js scroll-down" href="#article<?=$val->id?>"><?=$val->name?></a></span>
                        <?php endforeach;?>
                    </div>
                </header>
                 <?php foreach ($category_2 as $val):?>
                <a id="article<?=$val->id?>"></a>
                <article id="bx_2037796212_<?=$val->id?>" class="vpad2 row">
                    <div id="comp_c2fb1cfe0a15c9ac71189bf8996f1fd3">
                        <header class="vpad pad text-m-center text-t-left">
                            <h2 class="huge"><?=$val->name?></h2>
                        </header>
                        <?php $menu = ORM::factory('Menu')->where('cat_id', '=', $val->id)->order_by('id', 'ASC')->find_all()?>
                        <?php foreach ($menu as $val_menu):?>
                        <div id="bx_2647885750_<?=$val_menu->id?>" class="row vpad pad text-m-center text-t-left">
                            <div class="row border-bottom-3">
                                <div class="cell-t-50"><?=$val_menu->name?>
                                    <div class="only-m row small opacity"><?=$val_menu->description?></div>                                        
                                </div>
                                <div class="cell-t-50 text-m-center text-t-right">
                                    <span class="nowrap big"><?=$val_menu->price?> <?php if(!empty($val_menu->price)):?>грн<?php endif?></span>
                                    <span class="not-m opacity small nowrap"><?php if(!empty($val_menu->heft)):?> / <?=$val_menu->heft?><?php endif?></span>
                                    <div class="only-m opacity small nowrap"><?=$val_menu->heft?> <?php if(!empty($val_menu->heft)):?><?php endif?></div>                                        
                                </div>
                            </div>
                            <div class="not-m row small opacity"><?=$val_menu->description?></div>
                        </div>
                        <?php endforeach;?>
                       </article>
                <?php endforeach;?>
            </div>
            </div>
