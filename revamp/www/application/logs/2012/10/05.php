<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-05 22:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-05 22:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 22:47:36 --- ERROR: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-05 22:47:36 --- STRACE: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('country_id', 'HK')
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(317): Kohana_ORM->__set('country_id', 'HK')
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-05 22:50:12 --- ERROR: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-05 22:50:12 --- STRACE: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('country_id', 'HK')
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(317): Kohana_ORM->__set('country_id', 'HK')
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-05 23:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-05 23:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}