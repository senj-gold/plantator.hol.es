    <div class="row mar-d">
        <!-- Slider -->
        <div class="slider_container bg-2 row" style="background: url(/media/img/slider_back.jpg) no-repeat center;">
            <div class="button-group row mar-t mar-d-6-25 cell-d-87-5 pad vpad text-m-center">
                <div class="cell-m-auto">
                    <div class="row cell-m-auto switcher">
                        <a href="#" class="hidden mark-ico pad ico_pic_16b_radio_unchecked ico_pos_16_center" style="display: inline;"></a>
                        <a href="#" class="mark-ico pad ico_pic_16b_radio_checked ico_pos_16_center" style="display: none;"></a>
                    </div>
                    <div class="row cell-m-auto switcher active">
                        <a href="#" class="mark-ico pad ico_pic_16b_radio_unchecked ico_pos_16_center" style="display: none;"></a>
                        <a href="#" class="hidden mark-ico pad ico_pic_16b_radio_checked ico_pos_16_center" style="display: inline;"></a>
                    </div>
                </div>
            </div>
            <div class="mar-t mar-d-6-25 cell-d-87-5 text-m-center text-t-left" style="height: 260px;">
                <div id="bx_2004265238_1013" class="row" style="display: none;">
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <h2 class="massive font2">Смачна піцца</h2>
                        <p>Дуже смачна піцца!</p>
                    </div>
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <figure><img src="/media/img/4e71ca6feb167d947554740f22df80dc.png"></figure>
                    </div>
                </div>
                <div id="bx_2004265238_1014" class="row hidden" style="display: block;">
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <h2 class="massive font2">Банкет гарно</h2>
                        <p>Проведення банкетів, свадьб, дні народження. От 200 грн на особу. <a href="/banket/">Деталі</a></p></div>
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <figure><img src="/media/img/1f3c133a1e2cc060582eb1bcf09eb3b5.png"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-1 mar-d row text-m-center text-t-left">
        <div class="mar-t mar-d-6-25 cell-d-87-5 row">
            <div class="row">
                <div class="cell-m-100 cell-t-50">
                    <!-- menu -->
                    <section>
                        <?php foreach ($texts as $val):?>
                        <article id="bx_2037796212_<?=$val->id?>" class="vpad">
                            <header class="pad vpad">
                                <h2>
                                    <a class="link-block" href="/menu/<?=$val->cat_id?>/"><?=$val->title?></a>
                                </h2>
                            </header>
                            <div class="row">
                                <div class="cell-m-100 cell-t-50 pad vpad">
                                    <figure>
                                        <a class="link-block" href="/menu/<?=$val->id?>/">
                                            <img src="/imagefly/w340/media/img/main/<?=$val->img?>" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="cell-m-100 cell-t-50 pad vpad">
                                    <p class="small">
                                        <?=$val->text?></p>
                                </div>
                            </div>
                        </article>
                        <?php endforeach;?>
                       
                    </section>				
                </div>
                <div class="cell-m-100 cell-t-50">
                    <!-- blunch -->
                    <section class="row vpad pad" style="background: white; display: none">
                        <header class="row pad vpad"><h2>Бизнес-ланч</h2></header>
                        З 12.00 до 16.00 - бізнес-ланч на вибір ( ...грн). Тим, хто стежить за своїм здоров’ям,  в таверні "ПЛАНТАТОР" запропонують страви з дієтичного меню. 
                        <article id="bx_2004265238_850" class="cell-m-100 pad text-m-center text-t-left">
                            <div class="cell-d-75">
                                <div class="row vpad small">
                                    <div class="row border-bottom-3">
                                        <div class="cell-t-50">
                                            Салат из свежих овощей<div class="only-m row small opacity">Свежие Бакинские огурцы и помидоры, болгарский перец, зеленый лук, зелень, оливковое масло</div>                                            
                                        </div>
                                        <div class="cell-t-50 text-m-center text-t-right opacity">250 гр</div>
                                    </div>
                                    <div class="not-m row small opacity">Свежие Бакинские огурцы и помидоры, болгарский перец, зеленый лук, зелень, оливковое масло</div>                                        
                                </div>
                                <div class="row vpad small">
                                    <div class="row border-bottom-3">
                                        <div class="cell-t-50">Харчо<div class="only-m row small opacity">Отварная говяжья грудинка с томатом, рисом и специями</div></div>
                                        <div class="cell-t-50 text-m-center text-t-right opacity">350 гр</div>
                                    </div>
                                    <div class="not-m row small opacity">Отварная говяжья грудинка с томатом, рисом и специями</div>
                                </div>
                                <div class="row vpad small">
                                    <div class="row border-bottom-3">
                                        <div class="cell-t-50">Оджахури со свининой<div class="only-m row small opacity">Обжаренные кусочки свинины с картофелем и луком со специями на кеци</div>                                            
                                        </div>
                                        <div class="cell-t-50 text-m-center text-t-right opacity">250 гр</div>
                                    </div>
                                    <div class="not-m row small opacity">Обжаренные кусочки свинины с картофелем и луком со специями на кеци</div>
                                </div>
                                <div class="row vpad small">
                                    <div class="row border-bottom-3">
                                        <div class="cell-t-50">Понедельник</div>
                                        <div class="cell-t-50 text-m-center text-t-right opacity"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-m-100 cell-d-25 text-m-center text-t-left text-d-center vpad">
                                <div class="cell-m-auto pad vpad big font2 bg-4 border-radius-2 border-all-2">
                                    <div class="vpad">350 руб</div>
                                </div>
                            </div>
                        </article>
                        <div class="row pad vpad"><a href="/blunch/">Показать більше</a></div>
                    </section>
                    <!-- Reservation -->
                    <section class="row pad vpad bg-2 text-m-center" style="margin-top: 30px;">
                        <div class="vpad cell-m-100">
                            <div class="ico_pic_32a_edit_2"></div>
                            <p><strong>Ви завжди можете забронювати столик в ресторане</strong></p>
                            <div class="row pad vpad popup">
                                <div class="cell-m-auto border-all-2">
                                    <a class="pad vpad link-block mark-bg" href="#"><strong>Забронювати</strong></a>
                                </div>
                            </div>
                            <div style="background: url(http://restaurant.intels.pro/bitrix/templates/intels_restaurant_tweed/images/darker.png); position: absolute; z-index: 1; top: 0; left: 0; width: 100%;" class="hidden popup-close">
                                <div class="text-m-center mar-t-25 cell-t-50">
                                    <div style="background-color: transparent; cursor: pointer;" class="popup-close bg-2 row pad vpad ico_pic_32b_close ico_pos_right">&nbsp;</div>
                                    <div id="intels_feedback_restaurant" class="bg-1 ajax_container row">
                                        <?php if ($status == 0):?>
                                        <div class="vpad">
                                            <div class="ico_pic_32a_edit_2">&nbsp;</div>
                                        </div>
                                        <div class="vpad border-top-1 cell-m-auto">
                                            <h3 class="text-upper opacity">Бронювання столика</h3>
                                        </div>
                                        <form action="/" method="POST">
                                            <input type="hidden" name="sessid" id="sessid" value="7e1d1d96423e412591f48952fd6173d4">
                                            <div class="cell-m-100">
                                                <div style="width: 10em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input5343479">Чісло персон*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input5343479" style="padding-right: 65px;" class="text-m-left input_mask_int cell-m-100 border-all-1 pad vpad" type="text" name="count" value="1">
                                                            <div style="float: left; margin-left: -50px; width: 50px;" class="input_counter bg-4">
                                                                <a style="height: 27px;" class="mark-bg link-block ico_pic_16a_arrow_up_1" href="#">&nbsp;</a>
                                                                <a style="height: 27px;" class="mark-bg link-block ico_pic_16a_arrow_down_1" href="#">&nbsp;</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 12em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input3554523">Дата*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input3554523" style="padding-right: 65px;" class="input_mask_date cell-m-100 border-all-1 pad vpad text-m-left" type="text" name="date" value="<?=date('d.m.Y')?>">
                                                            <div style="float: left; margin-left: -50px; width: 50px;" class="input_dropdown bg-4">
                                                                <a class="vpad mark-bg link-block ico_pic_32a_calendar_1" href="#">&nbsp;</a>
                                                            </div>
                                                        </div>
                                                        <div style="cursor: pointer; position: absolute; z-index: 1;" class="bg-3 text-m-left input_options hidden small border-right-1 border-bottom-1 border-left-1">
                                                            <div class="cell-m-auto active"><div class="mark-bg pad vpad nowrap"><?=date('d.m.Y')?></div></div>
                                                            <?php for ($i = 1;$i <= 14; $i++):?>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap"><?=date('d.m.Y', mktime(0,0,0,date('m'),date('d')+$i,date('Y')))?></div></div>
                                                            <?php endfor ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 10em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row"><label for="input7482801">Час*</label></div>
                                                        <div class="row">
                                                            <input id="input7482801" style="padding-right: 65px;" class="text-m-left input_mask_time cell-m-100 border-all-1 pad vpad" type="text" name="time" value="19:00">
                                                            <div style="float: left; margin-left: -50px; width: 50px;" class="input_dropdown bg-4">
                                                                <a class="vpad mark-bg link-block ico_pic_32a_alarm" href="#">&nbsp;</a>
                                                            </div>
                                                        </div>
                                                        <div style="cursor: pointer; position: absolute; z-index: 1;" class="bg-3 text-m-left input_options hidden small border-left-1 border-right-1 border-bottom-1">
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">13:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">14:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">15:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">16:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">17:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">18:00</div></div>
                                                            <div class="cell-m-auto active"><div class="mark-bg pad vpad nowrap">19:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">20:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">21:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">22:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">23:00</div></div>                                                         
                                                        </div>
                                                </div></div>
                                                        
                                            </div>
                                            <div class="cell-m-100">
                                                <div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input6232613">Ваше імя*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input6232613" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="firstname" value="<?= isset($post['firstname']) ? $post['firstname'] : ''?>" required />
                                                            
                                                        </div>
                                                        <div class="row" style="color:red;font-weight: bolder">
                                                            <?php if(isset($post['firstname']) && empty($post['firstname'])):?>Введіть будь ласка імя<?php endif?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100">
                                                <div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <?= $errors ? $errors[0] : '' ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100">
                                                <div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input3008444">Телефон*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input3008444" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="phone" value="<?= isset($post['phone']) ? $post['phone'] : ''?>" required />
                                                        </div>
                                                        <div class="row" style="color:red;font-weight: bolder">
                                                            <?php if(isset($post['phone']) && empty($post['phone'])):?>Введіть будь ласка телефон<?php endif?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100"><div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100"><div class="row"><label for="input6803875">E-mail</label></div>
                                                        <div class="row"><input id="input6803875" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="email" value="<?= isset($post['email']) ? $post['email'] : ''?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100"><div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad"><div class="input_container cell-m-100">
                                                        <div class="row"><label for="input9346253">Додатково</label></div>
                                                        <div class="row"><input id="input9346253" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="text" value="<?= isset($post['text']) ? $post['text'] : ''?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?/*<div class="cell-m-100">
                                                <div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input6167423">Введите слово на картинке*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input6167423" class="cell-m-100 border-all-1 pad vpad" type="text" name="captcha_word" value="" maxlength="50">
                                                            <figure class="cell-m-100">
                                                                <img src="/bitrix/tools/captcha.php?captcha_sid=0c2fb597c42bf0f6f2df42d292a2ab44" alt="CAPTCHA">
                                                            </figure>
                                                            <input type="hidden" name="captcha_sid" value="0c2fb597c42bf0f6f2df42d292a2ab44">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>*/?>
                                            <div class="row">
                                                <div class="cell-m-100">
                                                    <div style="max-width: 16em;" class="cell-m-auto pad vpad">
                                                        <div class="row bg-4">
                                                            <input type="hidden" name="submit" value="submit">
                                                            <input class="reservation_input bg-4 pad vpad cell-m-100 border-0 ajax_submit mark-bg" type="submit" value="Забронювати">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <?php else:?>
                                        Дякуємо.<br>
                                        Ваш заказ прийнятий.<br>
                                        Чекаемо на Вас <?=$post['date']?> в <?=$post['time']?>.
                                        <input class="popup-close reservation_input bg-4 pad vpad cell-m-100 border-0 ajax_submit mark-bg" type="submit" value="Закрити">
                                    <?php endif?>
                                </div>
                            </div>
                        </div>				
                    </section>
                </div>
            </div>

            <!-- Afisha -->
            <div id="comp_b0c2ee6f2831d9c8667bb24c12df460d">
                <section class="row vpad2">
                    <header class="pad vpad">
                        <h2 class="massive">Афіша</h2>
                    </header>
                    <?php foreach ($news as $val):?>
                            <article id="bx_2647885750_<?=$val->id?>" class="row pad vpad cell-m-100 cell-t-25 text-m-center text-t-left small">
                                <a href="/afisha/#article<?=$val->id?>">
                                    <figure class="row border-radius-1"><img src="/imagefly/w340-h159-c/media/img/news/<?= $val->img ?>" /></figure>
                                    <h3><?=$val->title?></h3>
                                </a>
                                <p class="opacity"><?php $date = explode(' ', $val->data);$date = explode('-', $date[0]);?><?=$date[2].'.'.$date[1].'.'.$date[0]?></p>
                                <p><?=$val->short_content?></p>
                            </article>
                            
                    <?php endforeach;?>
                    <div class="row pad vpad"><a href="/afisha/">Показати більше</a></div></section> </div>	
            <div class="row pad" style="background: white;">
                <section class="vpad2 small cell-t-75 mar-t-12-5 cell-d-50 mar-d-25 text-m-left">
                    <h2>Ресторан Плантатор</h2>
                    <p>Атмосфера позитивна, творча, завжди лунає приємний сучасний лаунж і латинос. </p>
                    <p>Що четверга:  диджей ЛОЛА</p>
                    <p>Що п’ятниці: діджей АЛЕКС</p>
                    <p>Що неділі: майстер-класи для дітей</p>
                    <p>Ми дбайливо оберігаємо традиції української гостинності та приділяємо увагу найменшим дрібничкам для вашого затишку,  створюючи спокійну атмосферу для позитивного відпочинку. </p>
                    <p>Вітаємо в одязі стриманість, лаконічність, виключення елементів спортивного стилю.</p>
                    <p>Якщо ви хочете внести різноманітність у буденний розпорядок свого життя, позитивній атмосфері провести час з рідними і друзями, вирушайте до таверни "ПЛАНТАТОР". </p>
                    <p>Київ, вул.Булгакова, б. 17. Часи работи від 13:00 до 02:00.<br>+38 (044) 592-36-67</p>
                </section>
            </div>
        </div>
    </div>

