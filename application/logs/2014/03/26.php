<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-26 14:21:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Base.php [ 22 ] in file:line
2014-03-26 14:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:22:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Base.php [ 22 ] in file:line
2014-03-26 14:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:22:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/Base.php [ 49 ] in file:line
2014-03-26 14:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:24:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Base.php [ 22 ] in file:line
2014-03-26 14:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:25:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/v_base.php [ 16 ] in /var/www/mastersmeta/application/views/v_base.php:16
2014-03-26 14:25:58 --- DEBUG: #0 /var/www/mastersmeta/application/views/v_base.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/master...', 16, Array)
#1 /var/www/mastersmeta/system/classes/Kohana/View.php(61): include('/var/www/master...')
#2 /var/www/mastersmeta/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/master...', Array)
#3 /var/www/mastersmeta/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/mastersmeta/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/mastersmeta/application/views/v_base.php:16