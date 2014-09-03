<div class="header">
    <div class="logoHeader">
        <a class="logo" href="/admin/">Плантатор</a>
        <div class="help">
<!--            <a href="#">Служба поддержки</a>
            <a href="#">Руководство пользователя</a>-->
        </div>
    </div>
    <div class="topMenu">
        <ul>
            <li class="home"><a  href="/admin/"></a></li>
            <li><a href="/admin/category">Категории</a></li>
            <li><a href="/admin/menu">Меню</a>
                <ul>
                    <li>
                        <a href="/admin/menu/load"><?=__('Создать')?></a>
                    </li>
                </ul>
            </li>
            <li><a href="/admin/news"><?=__('Новости')?></a>
                <ul>
                    <li>
                        <a href="/admin/news/create"><?=__('Создать')?></a>
                    </li>
                </ul>
            </li>
            <li><a href="/admin/gallery"><?=__('Фотогалерея')?></a>
                <ul>
                    <li>
                        <a href="/admin/gallery/create"><?=__('Создать')?></a>
                    </li>
                </ul>
            </li>
            
            <li class="out"><a href="/auth/logout" title="Выход"></a></li>
<!--            <li class="profil"><a href="/admin/users"></a></li>-->
            <li class="view"><a href="/" target="_blank" title="Открыть сайт в новой вкладке"></a></li>
            <li class="search">
<!--                <form action="<?php if (I18n::lang() != 'ru'): ?>/<?= I18n::lang() ?><?php endif; ?>/admin" method="get">
                    <input name="" type="text" value="" placeholder="<?= __('Поиск') ?>">
                    <input name="" type="submit" value="">
                </form>-->
            </li>
        </ul>
    </div>
</div>