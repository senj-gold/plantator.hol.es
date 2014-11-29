    <div class="row bg-1 mar-d"> 	 
        <div class="row mar-t mar-d-6-25 cell-d-87-5 vpad2 text-m-center text-t-left">
            <header class="pad vpad">
                <h1>Контактная информация</h1>
                <p><em>Мы любим устраивать шумные вечеринки и приглашать гостей. Если вы хотите весело провести праздник или выходной - добро пожаловать в наше заведение. Массу впечатлений и воспоминаний гарантируем :)</em></p>
            </header>

            <div class="row pad vpad">

                <div class="bx-yandex-view-layout">
                    <div class="bx-yandex-view-map">

                        <div id="BX_YMAP_MAP_cS6y64Sldh" class="bx-yandex-map" style="height: 350px; width: 100%;">
                            <iframe src="http://maps.google.com.ua/maps/ms?hl=uk&amp;client=firefox-a&amp;ie=UTF8&amp;msa=0&amp;msid=118234418215466445607.000496d2a23cb5b0c4d59&amp;ll=50.41062,30.40444&amp;spn=0.009572,0.028239&amp;z=15&amp;output=embed" frameborder="0" scrolling="no" height="350" width="100%" marginwidth="0" marginheight="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row vpad cell-m-100 cell-t-50 text-m-center pad">
                <div style="background: white;" class="vpad cell-m-100">
                    <div class="cell-m-100 vpad text-m-center">
                        <div class="ico_pic_32a_iphone_portrait">&nbsp;</div>
                        <p>
                            +38 (044) 592-36-67<br>
                            <a href="mailto:plantator88@ukr.net"><?=__('Надіслати листа')?></a>
                        </p>
                    </div>
                    <div class="cell-m-100 vpad text-m-center">
                        <div class="ico_pic_32a_map_marker">&nbsp;</div>
                        <p>
                            Киев, ул. Булгакова, д. 17<br>
                            Часы работы с 13:00 до 02:00
                        </p>
                    </div>
                </div>
            </div>		
            <div class="row vpad cell-m-100 cell-t-50 pad text-m-center">
                <div class="bg-2 vpad cell-m-100">
                    <div class="vpad cell-m-100">
                        <div class="ico_pic_32a_edit_2"></div>
                        <p><strong>Вы всегда можете забронировать столик в нашем ресторане</strong></p>
                        <div class="row pad vpad popup">
                            <div class="cell-m-auto border-all-2">
                                <a class="pad vpad link-block mark-bg" href="#">
                                    <strong>Забронировать</strong>
                                </a>
                            </div>
                        </div>
                        <div style="background: url(/media/img/darker.png); position: absolute; z-index: 1; top: 0; left: 0; width: 100%;" class="hidden popup-close">
                            <div class="text-m-center mar-t-25 cell-t-50">
                                <div style="background-color: transparent; cursor: pointer;" class="popup-close bg-2 row pad vpad ico_pic_32b_close ico_pos_right">&nbsp;</div>
                                    <div id="intels_feedback_restaurant" class="bg-1 ajax_container row">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
