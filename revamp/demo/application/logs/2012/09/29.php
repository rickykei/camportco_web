<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-29 01:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL category/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-29 01:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL category/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-29 01:19:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/column2.php [ 9 ]
2012-09-29 01:19:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/column2.php [ 9 ]
--
#0 /home/vhost/camportco.com/demo/application/views/template/column2.php(9): Kohana_Core::error_handler('/home/vhost/cam...', Array)
#1 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#2 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Sub))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-29 01:19:28 --- ERROR: ErrorException [ 8 ]: Undefined index:  sub_cat_id ~ APPPATH/classes/controller/sub.php [ 8 ]
2012-09-29 01:19:28 --- STRACE: ErrorException [ 8 ]: Undefined index:  sub_cat_id ~ APPPATH/classes/controller/sub.php [ 8 ]
--
#0 /home/vhost/camportco.com/demo/application/classes/controller/sub.php(8): Kohana_Core::error_handler()
#1 [internal function]: Controller_Sub->action_product(Object(Controller_Sub))
#2 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-29 01:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sub/product_detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-29 01:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sub/product_detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-29 01:19:57 --- ERROR: ErrorException [ 1 ]: Class 'SimplePager' not found ~ APPPATH/classes/controller/sub.php [ 48 ]
2012-09-29 01:19:57 --- STRACE: ErrorException [ 1 ]: Class 'SimplePager' not found ~ APPPATH/classes/controller/sub.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 01:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/loading.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-29 01:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/loading.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-29 01:40:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart_CartItem' not found ~ APPPATH/classes/controller/cart.php [ 65 ]
2012-09-29 01:40:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart_CartItem' not found ~ APPPATH/classes/controller/cart.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('145', NULL, '1')
#1 {main}
2012-09-29 01:43:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-29 01:43:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('postalFee')
#1 {main}
2012-09-29 01:43:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-29 01:43:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('postalFee')
#1 {main}
2012-09-29 01:43:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-29 01:43:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_PostalFee' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('postalFee')
#1 {main}
2012-09-29 01:44:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-29 01:44:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `postalf...', false, Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(359): Kohana_ORM->find()
#4 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(338): Controller_Cart->calculateDeliveryCost('HK', 'L', 40)
#5 [internal function]: Controller_Cart->action_get_postal_fee()
#6 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#7 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-29 01:46:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-29 01:46:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `postalf...', false, Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(359): Kohana_ORM->find()
#4 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(338): Controller_Cart->calculateDeliveryCost('HK', 'L', 40)
#5 [internal function]: Controller_Cart->action_get_postal_fee()
#6 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#7 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-29 01:46:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-29 01:46:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'postalFee.delivery_method' in 'where clause' [ SELECT `postalfee`.* FROM `postal_fee` AS `postalfee` WHERE `country_code` = 'HK' AND `postalFee`.`delivery_method` = 'L' AND `postalFee`.`gram_from` = 40.000000 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `postalf...', false, Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(359): Kohana_ORM->find()
#4 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(338): Controller_Cart->calculateDeliveryCost('HK', 'L', 40)
#5 [internal function]: Controller_Cart->action_get_postal_fee()
#6 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#7 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-29 21:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL categorys/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-29 21:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL categorys/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}