<header>
    <!-- menu -->
    <div class="bg-2 mar-d row small">
        <nav class="only-m row">
            <div class="dropdown text-m-center">
                <a href="#" class="mark-bg link-block ico_pic_32b_list_1 pad vpad text-upper">&nbsp;</a>
            </div>
            <div class="hidden row">
                <div class="border-top-1 text-m-center<?php if (Request::initial()->controller() == 'Menu'): ?> active<?php endif; ?>"><a href="/menu/1/" class="link-block pad vpad mark-bg"><?= __('Меню') ?></a></div> 
                <!--<div class="border-top-1 text-m-center"><a href="/blunch/" class="link-block pad vpad mark-bg">Бизнес-ланч</a></div>--> 
                <div class="border-top-1 text-m-center<?php if (Request::initial()->controller() == 'Afisha'): ?> active<?php endif; ?>"><a href="/afisha/" class="link-block pad vpad mark-bg">Афиша</a></div>
                <div class="border-top-1 text-m-center<?php if (Request::initial()->controller() == 'Banket'): ?> active<?php endif; ?>"><a href="/banket/" class="link-block pad vpad mark-bg">Банкеты</a></div>
                <div class="border-top-1 text-m-center<?php if (Request::initial()->controller() == 'Gallery'): ?> active<?php endif; ?>"><a href="/gallery/" class="link-block pad vpad mark-bg">Фотогалерея</a></div>
                <div class="border-top-1 text-m-center<?php if (Request::initial()->controller() == 'Contacts'): ?> active<?php endif; ?>"><a href="/contacts/" class="link-block pad vpad mark-bg">Контакты и бронирование</a></div>
            </div>						<!-- social -->
            <div class="hidden vpad pad nowrap border-top-1 text-m-center">
                <a href="/"><img src="/media/img/vkontakte.png"></a>
                <a href="/"><img src="/media/img/odnoklassniki.png"></a>
                <a href="/"><img src="/media/img/facebook.png"></a>
                <a href="/"><img src="/media/img/twitter.png"></a>
            </div>
        </nav>
        <nav class="not-m mar-t mar-d-6-25 cell-d-87-5 row">
            <div class="cell-t-auto"><a href="/" style="width: 50px;" class="link-block pad vpad mark-bg ico_pic_16b_home">&nbsp;</a></div>
            <div class="cell-t-auto<?php if (Request::initial()->controller() == 'Menu'): ?> active<?php endif; ?>"><a href="/menu/1/" class="link-block pad vpad mark-bg"><?= __('Меню') ?></a></div>
            <!--<div class="cell-t-auto"><a href="/blunch/" class="link-block pad vpad mark-bg">Бизнес-ланч</a></div>-->
            <div class="cell-t-auto<?php if (Request::initial()->controller() == 'Afisha'): ?> active<?php endif; ?>"><a href="/afisha/" class="link-block pad vpad mark-bg">Афиша</a></div>
            <div class="cell-t-auto<?php if (Request::initial()->controller() == 'Banket'): ?> active<?php endif; ?>"><a href="/banket/" class="link-block pad vpad mark-bg">Банкеты</a></div>
            <div class="cell-t-auto<?php if (Request::initial()->controller() == 'Gallery'): ?> active<?php endif; ?>"><a href="/gallery/" class="link-block pad vpad mark-bg">Фотогалерея</a></div>
            <div class="cell-t-auto<?php if (Request::initial()->controller() == 'Contacts'): ?> active<?php endif; ?>"><a href="/contacts/" class="link-block pad vpad mark-bg">Контакты и бронирование</a></div>
        </nav>
    </div>
    <!-- logo, contacts  -->
    <div class="bg-1 mar-d row" style="opacity: 0.9;">
        <div class="mar-t mar-d-6-25 cell-d-87-5 row vpad">

            <!-- logo -->
            <div class="cell-m-100 cell-t-25 cell-d-12-5 pad vpad text-m-center text-t-left">
                <figure>
                    <a class="link-block cell-t-auto" href="/">
                        <img src="/media/img/logo.png">
                    </a>
                </figure>
            </div>
            <!-- contacts -->
            <div style="line-height: 1.6em;" class="small cell-m-100 cell-t-50 mar-d-12-5 text-m-center text-t-left pad vpad">
                <span class="nowrap">Киев, ул. Булгакова, д. 17</span><br>
                <span class="nowrap">+38 (044) 592-36-67</span><br>
                <span class="nowrap">Часы работы с 13:00 до 02:00</span>
            </div>
            <div class="vpad pad nowrap cell-m-100 cell-t-25 text-m-center text-t-right">
                <?php //  http://api.yandex.ru/share  ?>
                <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                <script>
                    var title = 'Плантатор';

                    var image = 'http://<?= Controller_Base::$domain_name ?>/media/img/logo.png';
                    var link = 'http://<?= Controller_Base::$domain_name ?>/';
                    var description = '<?= __('Плантатор - выращивает настроение') ?>';
                    new Ya.share({
                        element: 'the_share',
                        elementStyle: {
                            'linkIcon': true,
                            'type': 'none',
                            'border': false,
                            'quickServices': ['vkontakte', 'odnoklassniki', 'facebook', 'twitter']
                        },
                        link: link,
                        image: image,
                        title: title,
                        description: description,
                        popupStyle: {
                            copyPasteField: true
                        },
                        serviceSpecific: {
                            facebook: {
                                link: link,
                                title: title,
                                image: image,
                                description: description
                            },
                        }
                    });
                </script>
                <div id='the_share'></div>
<!--                <a href="/"><img src="/media/img/vkontakte.png"></a>
                <a href="/"><img src="/media/img/odnoklassniki.png"></a>
                <a href="/"><img src="/media/img/facebook.png"></a>
                <a href="/"><img src="/media/img/twitter.png"></a>-->
            </div>
        </div>
    </div>
</header>