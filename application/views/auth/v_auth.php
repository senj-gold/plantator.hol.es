<div id="overlap"<?php if (Request::initial()->directory() == 'Auth'): ?> style="display: block;"<?php endif; ?>></div>
<div id="pop_up"<?php if (Request::initial()->directory() == 'Auth'): ?> style="display: block;"<?php endif; ?>>
    <div id="authorization"<?php if (Request::initial()->directory() != 'Auth' || (Request::initial()->directory() == 'Auth' && Request::initial()->controller() == 'Login')): ?> style="display: block;"<?php elseif(Request::initial()->controller() == 'Registration' || Request::initial()->controller() == 'Forgot'):?> style="display: none;"<?php endif; ?>>
        <form action="/auth/login" method="POST" id="formlogin">
            <p class="error"><?php if (isset($error['email']) && Request::initial()->controller() == 'Login'): ?><?= $error['email'] ?><?php endif; ?></p>
            <p class="error"><?php if (isset($error['password'])): ?><?= $error['password'] ?><?php endif; ?></p>
            <p class="pop_up_header">авторизация</p>
            <input class="pop_up_input" name="email" placeholder="Введите логин либо email">
            <input class="pop_up_input" type="password" name="password" placeholder="Пароль">
            <p class="pop_up_enter">Войти</p>
        </form>
        <a href="#" id="go_remind_password">напомнить пароль</a>
        <a href="#" id="go_registration">Регистрация</a>
    </div>
    <div id="registration"<?php if (Request::initial()->directory() == 'Auth' && Request::initial()->controller() == 'Registration'): ?> style="display: block;"<?php endif; ?>>
        <form action="/auth/registration" method="POST" id="formreg">
            <p class="pop_up_header">регистрация</p>
            <p class="error"><?php if (isset($error['username'])): ?><?= $error['username'] ?><?php endif; ?></p>
            <p class="error"><?php if (isset($error['email']) && Request::initial()->controller() == 'Registration'): ?><?= $error['email'] ?><?php endif; ?></p>
            <input class="pop_up_input" name="username" placeholder="Представтесь, пожалуйста">
            <input class="pop_up_input" name="email" placeholder="Адрес вашей электронной почты">
            <p class="pop_up_enter" id="send_password">Выслать пароль для входа</p>
        </form>
        <a href="#" id="go_authorization">войти в личный кабинет</a>
    </div>
    <div id="remind_password"<?php if (Request::initial()->directory() == 'Auth' && Request::initial()->controller() == 'Forgot'): ?> style="display: block;"<?php endif; ?>>
        <form action="/auth/forgot" method="POST" id="formrem">
            <p class="error"><?php if (isset($error['email']) && Request::initial()->controller() == 'Forgot'): ?><?= $error['email'] ?><?php endif; ?></p>
            <p class="message"><?php if (isset($message) && Request::initial()->controller() == 'Forgot'): ?><?= $message ?><?php endif; ?></p>
            <p class="pop_up_header">Напомнить<br> пароль</p>
            <input class="pop_up_input" name="email" placeholder="Адрес вашей электронной почты">
            <p class="pop_up_enter">Отправить</p>
        </form>
        <a href="#" id="leave_remind_password">войти в личный кабинет</a>
    </div>
</div>