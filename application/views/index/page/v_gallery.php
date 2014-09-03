<div class="row bg-1 mar-d">
        <div class="row mar-t mar-d-6-25 cell-d-87-5">
            <div id="comp_ebf295296160fa9eabc9630b660c613c">
                <section class="row">
                    <?php foreach ($gallery as $val):?>
                    <a id="article858"></a>
                    <article id="bx_2647885750_858" class="row vpad2">
                        <header class="pad vpad text-m-center text-t-left">
                            <h1><?=$val->title?></h1>
                            <p>
                                <em><?=$val->title?><?=$val->short_content?></em>
                            </p>
                        </header>
                        <div class="row text-m-center text-t-left">
                            <div class="cell-m-auto button-group pad vpad">
                                <?php $i =0; foreach ($val->photo->find_all() as $photo): $i++;?>
                                    <?php if($i ==1):?>
                                            <div class="cell-m-auto switcher active">
                                                <a href="#" class="pad mark-ico ico_pic_16b_radio_unchecked ico_pos_16_center" style="display: none;"></a>
                                                <a href="#" class="hidden pad mark-ico ico_pic_16b_radio_checked ico_pos_16_center" style="display: inline;"></a>
                                            </div>
                                    <?php else:?>
                                        <div class="cell-m-auto switcher">
                                            <a href="#" class="hidden pad mark-ico ico_pic_16b_radio_unchecked ico_pos_16_center" style="display: inline;"></a>
                                            <a href="#" class="pad mark-ico ico_pic_16b_radio_checked ico_pos_16_center" style="display: none;"></a>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                            <div class="row">
                                <?php $i =0; foreach ($val->photo->find_all() as $photo): $i++;?>
                                    <?php if($i ==1):?>
                                            <div class="pad vpad hidden" style="display: block;">
                                                <figure><img src="/media/img/gallery/<?=$photo->filename?>"></figure>
                                                <p class=""><?=$photo->text?></p>
                                            </div>
                                    <?php else:?>
                                         <div class="pad vpad" style="display: none;">
                                                <figure><img src="/media/img/gallery/<?=$photo->filename?>"></figure>
                                                <p class=""><?=$photo->text?></p>
                                            </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </article>
                    <?php endforeach;?>
                    </section> </div>	
        </div>
    </div>
