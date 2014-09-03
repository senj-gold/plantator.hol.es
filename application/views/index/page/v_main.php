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
                        <h2 class="massive font2">Вкусная пицца</h2>
                        <p>По четвергам в нашем ресторане день пиццы. Более 30 видов пиццы, уроки от шеф-повара!</p>
                    </div>
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <figure><img src="/media/img/4e71ca6feb167d947554740f22df80dc.png"></figure>
                    </div>
                </div>
                <div id="bx_2004265238_1014" class="row hidden" style="display: block;">
                    <div class="cell-m-100 cell-t-50 pad vpad">
                        <h2 class="massive font2">Банкет красиво</h2>
                        <p>Проведение банкетов, свадеб, корпоративных мероприятий. От 2500 руб на человека. <a href="/banket/">Подробнее</a></p></div>
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
                        <?php foreach ($category as $val):?>
                        <article id="bx_2037796212_<?=$val->id?>" class="vpad">
                            <header class="pad vpad">
                                <h2>
                                    <a class="link-block" href="/menu/<?=$val->id?>/"><?=$val->name?></a>
                                </h2>
                            </header>
                            <div class="row">
                                <div class="cell-m-100 cell-t-50 pad vpad">
                                    <figure>
                                        <a class="link-block" href="/menu/<?=$val->id?>/">
                                            <img src="/imagefly/w340-h159-c/media/img/prev_<?=$val->id?>.jpg" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="cell-m-100 cell-t-50 pad vpad">
                                    <p class="small">
                                        <?php if($val->id == 1):?>
                                        В таверні "ПЛАНТАТОРА"- колоніальна кухня: португальска, мавританська, староісапнська. Меню містить зі звичайних продуктів в незвичайному виконанні і кілька рідкісних екзотичних старв. Великі порції і демократичнеі ціни. Головні складові цих страв - пряні тарви, екзотичні спеції, що володіють безліччю чудових властивостей. Фантазія, апетит і цікавіст від цих відомостей розігруються неймовірно. Хоч шеф-кухар "ПЛАНТАТОРА" і не бував у колоніях, до вивчення кухні він поставився серйозно і меню складає досконально вивчаючи всі кулінарні вподобання. Для любителів традиційної кухні-меню класичної європейскої кухні.
                                            <?php elseif($val->id == 23):?>
                                        В барному меню, крім традиційних напоїв, багато незвичних коктейлів, наприклад ...., колоніальні коктейлі....Всі вина подаються на розлив, ціни за келих - від ... , вина грузинські, французьки, італійськи, чилійськи, а також іспанські.
                                            <?php elseif($val->id == 24):?>
                                        В таверні "ПЛАНТАТОР" проводяться всі види банкетних заходів як із закриттям (до 40 осіб, від 230 грн на персону), так і незакриті в окремих зонах (до 20 осіб). Є оригінальне банкетне меню - колоніальне і традиційне домашнє. Висококваліфіковані кухарі із задоволенням запропонують Вам шедеври свого кулінарного мистецтва. 
                                            <?php endif;?></p>
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
                        <div class="row pad vpad"><a href="/blunch/">Показать больше</a></div>
                    </section>
                    <!-- Reservation -->
                    <section class="row pad vpad bg-2 text-m-center" style="margin-top: 30px;">
                        <div class="vpad cell-m-100">
                            <div class="ico_pic_32a_edit_2"></div>
                            <p><strong>Вы всегда можете забронировать столик в нашем ресторане</strong></p>
                            <div class="row pad vpad popup">
                                <div class="cell-m-auto border-all-2">
                                    <a class="pad vpad link-block mark-bg" href="#"><strong>Забронировать</strong></a>
                                </div>
                            </div>
                            <div style="background: url(http://restaurant.intels.pro/bitrix/templates/intels_restaurant_tweed/images/darker.png); position: absolute; z-index: 1; top: 0; left: 0; width: 100%;" class="hidden popup-close">
                                <div class="text-m-center mar-t-25 cell-t-50">
                                    <div style="background-color: transparent; cursor: pointer;" class="popup-close bg-2 row pad vpad ico_pic_32b_close ico_pos_right">&nbsp;</div>
                                    <div id="intels_feedback_restaurant" class="bg-1 ajax_container row">
                                        <div class="vpad">
                                            <div class="ico_pic_32a_edit_2">&nbsp;</div>
                                        </div>
                                        <div class="vpad border-top-1 cell-m-auto">
                                            <h3 class="text-upper opacity">Бронирование столика</h3>
                                        </div>
                                        <form action="/" method="POST">
                                            <input type="hidden" name="sessid" id="sessid" value="7e1d1d96423e412591f48952fd6173d4">
                                            <div class="cell-m-100">
                                                <div style="width: 10em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row">
                                                            <label for="input5343479">Число персон*</label>
                                                        </div>
                                                        <div class="row">
                                                            <input id="input5343479" style="padding-right: 65px;" class="text-m-left input_mask_int cell-m-100 border-all-1 pad vpad" type="text" name="PERSONS" value="1">
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
                                                            <input id="input3554523" style="padding-right: 65px;" class="input_mask_date cell-m-100 border-all-1 pad vpad text-m-left" type="text" name="DATE" value="03.04.2014">
                                                            <div style="float: left; margin-left: -50px; width: 50px;" class="input_dropdown bg-4">
                                                                <a class="vpad mark-bg link-block ico_pic_32a_calendar_1" href="#">&nbsp;</a>
                                                            </div>
                                                        </div>
                                                        <div style="cursor: pointer; position: absolute; z-index: 1;" class="bg-3 text-m-left input_options hidden small border-right-1 border-bottom-1 border-left-1">
                                                            <div class="cell-m-auto active"><div class="mark-bg pad vpad nowrap">03.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">04.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">05.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">06.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">07.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">08.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">09.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">10.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">11.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">12.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">13.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">14.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">15.04.2014</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">16.04.2014</div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 10em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100">
                                                        <div class="row"><label for="input7482801">Время*</label></div>
                                                        <div class="row">
                                                            <input id="input7482801" style="padding-right: 65px;" class="text-m-left input_mask_time cell-m-100 border-all-1 pad vpad" type="text" name="TIME" value="19:00">
                                                            <div style="float: left; margin-left: -50px; width: 50px;" class="input_dropdown bg-4">
                                                                <a class="vpad mark-bg link-block ico_pic_32a_alarm" href="#">&nbsp;</a>
                                                            </div>
                                                        </div>
                                                        <div style="cursor: pointer; position: absolute; z-index: 1;" class="bg-3 text-m-left input_options hidden small border-left-1 border-right-1 border-bottom-1">
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">12:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">13:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">14:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">15:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">16:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">17:00</div></div>
                                                            <div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">18:00</div></div>
                                                            <div class="cell-m-auto active"><div class="mark-bg pad vpad nowrap">19:00</div>
                                                            </div><div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">20:00</div>
                                                            </div><div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">21:00</div>
                                                            </div><div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">22:00</div>
                                                            </div><div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">23:00</div>
                                                            </div><div class="cell-m-auto"><div class="mark-bg pad vpad nowrap">00:00</div>
                                                            </div>
                                                                
                                                        </div>
                                                            
                                                </div></div>
                                                        
                                            </div>
                                            <div class="cell-m-100">
                                                <div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100"><div class="row">
                                                            <label for="input6232613">Ваше имя*</label></div>
                                                        <div class="row"><input id="input6232613" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="AUTHOR" value=""></div>
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
                                                            <input id="input3008444" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="PHONE" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100"><div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad">
                                                    <div class="input_container cell-m-100"><div class="row"><label for="input6803875">E-mail</label></div>
                                                        <div class="row"><input id="input6803875" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="EMAIL" value=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100"><div style="width: 100%; max-width: 32em;" class="cell-m-auto pad vpad"><div class="input_container cell-m-100">
                                                        <div class="row"><label for="input9346253">Дополнительно</label></div>
                                                        <div class="row"><input id="input9346253" class="text-m-left cell-m-100 border-all-1 pad vpad" type="text" name="TEXT" value=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell-m-100">
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
                                            </div>
                                            <div class="row">
                                                <div class="cell-m-100">
                                                    <div style="max-width: 16em;" class="cell-m-auto pad vpad">
                                                        <div class="row bg-4">
                                                            <input type="hidden" name="PARAMS_HASH" value="dd655626fd0bb311a4b4a7f257ef423c">
                                                            <input type="hidden" name="submit" value="submit">
                                                            <input class="reservation_input bg-4 pad vpad cell-m-100 border-0 ajax_submit mark-bg" type="submit" value="Забронировать">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                        <h2 class="massive"><?=__('Афиша')?></h2>
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
                    <div class="row pad vpad"><a href="/afisha/">Показать больше</a></div></section> </div>	
            <div class="row pad" style="background: white;">
                <section class="vpad2 small cell-t-75 mar-t-12-5 cell-d-50 mar-d-25 text-m-left">
                    <h2>Ресторан Плантатор</h2>
                    <p>Мы готовим для наших гостей только вкусные и полезные блюда. Разнообразная итальянская и грузинская кухни - это наш профиль.</p>
                    <p>Если вы думаете, где провести свадьбу, день рождения или корпоративное мероприятие - добро пожаловать в наш ресторан. Большой зал, живая музыка и, конечно, специальное меню по специальным ценам.</p>
                    <p>Работаете рядом с нами? Тогда, милости просим на бизнес-ланч. Каждый день новое меню. Идеальное место для обеда или деловых переговоров.</p>
                    <p>Киев, ул.Булгакова, д. 17. Часы работы с 13:00 до 02:00.<br>+38 (044) 592-36-67</p>
                </section>
            </div>
        </div>
    </div>

