<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-14 20:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blank.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 21:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blank.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 22:22:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:22:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:23:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:23:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:24:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:24:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:24:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:24:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:24:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:24:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:24:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:24:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-14 22:24:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-14 22:24:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subCategory.display_seq' in 'order clause' [ SELECT `category`.`id` AS `category:id`, `category`.`cat_name` AS `category:cat_name`, `category`.`cat_name_tc` AS `category:cat_name_tc`, `category`.`display_seq` AS `category:display_seq`, `subcategory`.* FROM `sub_category` AS `subcategory` LEFT JOIN `category` AS `category` ON (`category`.`id` = `subcategory`.`cat_id`) ORDER BY `category`.`display_seq`, `subCategory`.`display_seq` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_SubCatego...', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(106): Kohana_ORM->find_all()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(5): Controller_Main::getCategoryMenu()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}