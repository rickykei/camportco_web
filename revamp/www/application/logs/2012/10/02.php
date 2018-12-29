<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-02 13:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-02 13:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-02 13:34:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DES' at line 1 [ SELECT `newslink`.* FROM `newslink` AS `newslink` ORDER BY `display_seq`, `id` DES ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-02 13:34:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DES' at line 1 [ SELECT `newslink`.* FROM `newslink` AS `newslink` ORDER BY `display_seq`, `id` DES ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vhost/camportco.com/demo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `newslin...', 'Model_Newslink', Array)
#1 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/vhost/camportco.com/demo/application/classes/controller/main.php(35): Kohana_ORM->find_all()
#4 [internal function]: Controller_Main->action_index()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-02 13:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/images/order_payment_chi.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-02 13:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/images/order_payment_chi.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-02 13:54:05 --- ERROR: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-02 13:54:05 --- STRACE: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('country_id', 'HK')
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(302): Kohana_ORM->__set('country_id', 'HK')
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-02 13:54:27 --- ERROR: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-02 13:54:27 --- STRACE: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('country_id', 'HK')
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(302): Kohana_ORM->__set('country_id', 'HK')
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-02 13:54:38 --- ERROR: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-02 13:54:38 --- STRACE: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('country_id', 'HK')
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(302): Kohana_ORM->__set('country_id', 'HK')
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}