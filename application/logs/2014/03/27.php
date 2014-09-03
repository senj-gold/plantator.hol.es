<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-27 23:01:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view v_admin could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:01:32 --- DEBUG: #0 /var/www/mastersmeta/system/classes/Kohana/View.php(137): Kohana_View->set_filename('v_admin')
#1 /var/www/mastersmeta/system/classes/Kohana/View.php(30): Kohana_View->__construct('v_admin', NULL)
#2 /var/www/mastersmeta/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('v_admin')
#3 /var/www/mastersmeta/application/classes/Controller/Base.php(15): Kohana_Controller_Template->before()
#4 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(17): Controller_Base->before()
#5 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:01:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view v_admin could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:01:56 --- DEBUG: #0 /var/www/mastersmeta/system/classes/Kohana/View.php(137): Kohana_View->set_filename('v_admin')
#1 /var/www/mastersmeta/system/classes/Kohana/View.php(30): Kohana_View->__construct('v_admin', NULL)
#2 /var/www/mastersmeta/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('v_admin')
#3 /var/www/mastersmeta/application/classes/Controller/Base.php(15): Kohana_Controller_Template->before()
#4 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(18): Controller_Base->before()
#5 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:07:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view v_admin could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:07:48 --- DEBUG: #0 /var/www/mastersmeta/system/classes/Kohana/View.php(137): Kohana_View->set_filename('v_admin')
#1 /var/www/mastersmeta/system/classes/Kohana/View.php(30): Kohana_View->__construct('v_admin', NULL)
#2 /var/www/mastersmeta/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('v_admin')
#3 /var/www/mastersmeta/application/classes/Controller/Base.php(15): Kohana_Controller_Template->before()
#4 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(18): Controller_Base->before()
#5 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/mastersmeta/system/classes/Kohana/View.php:137
2014-03-27 23:17:29 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: left_menu ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:17:29 --- DEBUG: #0 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(19): Kohana_View->__get('left_menu')
#1 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#4 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:18:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Admin_Calculations' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 3 ] in file:line
2014-03-27 23:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:18:44 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: left_menu ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:18:44 --- DEBUG: #0 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(19): Kohana_View->__get('left_menu')
#1 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#4 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:23:11 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: left_menu ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:23:11 --- DEBUG: #0 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(19): Kohana_View->__get('left_menu')
#1 /var/www/mastersmeta/system/classes/Kohana/Controller.php(69): Controller_Admin_Calculations->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#4 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:19
2014-03-27 23:23:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Admin/Calculations.php [ 21 ] in file:line
2014-03-27 23:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:28:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_calculation' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-27 23:28:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:29:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_calculation' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-27 23:29:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:29:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_calculation' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-27 23:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:30:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_calculation' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-27 23:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:46:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin/Calculations.php [ 16 ] in file:line
2014-03-27 23:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 23:48:07 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: left_menu ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:62
2014-03-27 23:48:07 --- DEBUG: #0 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(62): Kohana_View->__get('left_menu')
#1 /var/www/mastersmeta/system/classes/Kohana/Controller.php(87): Controller_Admin_Calculations->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#4 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php:62
2014-03-27 23:50:10 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:50:10 --- DEBUG: #0 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('calculations')
#3 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(21): Kohana_ORM::factory('Calculation')
#8 /var/www/mastersmeta/system/classes/Kohana/Controller.php(84): Controller_Admin_Calculations->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#11 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:50:37 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:50:37 --- DEBUG: #0 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('calculations')
#3 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(21): Kohana_ORM::factory('Calculation')
#8 /var/www/mastersmeta/system/classes/Kohana/Controller.php(84): Controller_Admin_Calculations->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#11 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:51:48 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:51:48 --- DEBUG: #0 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('calculations')
#3 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(21): Kohana_ORM::factory('Calculation')
#8 /var/www/mastersmeta/system/classes/Kohana/Controller.php(84): Controller_Admin_Calculations->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#11 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:57:19 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-27 23:57:19 --- DEBUG: #0 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('calculations')
#3 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/mastersmeta/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/mastersmeta/application/classes/Controller/Admin/Calculations.php(21): Kohana_ORM::factory('Calculation')
#8 /var/www/mastersmeta/system/classes/Kohana/Controller.php(84): Controller_Admin_Calculations->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mastersmeta/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Calculations))
#11 /var/www/mastersmeta/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mastersmeta/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mastersmeta/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/mastersmeta/modules/database/classes/Kohana/Database/MySQL.php:171