<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-30 14:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-30 14:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-30 14:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/images/order_payment_chi.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-30 14:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/images/order_payment_chi.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-30 14:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-30 14:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-30 18:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-30 18:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-30 21:43:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/classes/controller/subcategory.php [ 123 ]
2012-09-30 21:43:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/classes/controller/subcategory.php [ 123 ]
--
#0 /home/vhost/camportco.com/demo/application/classes/controller/subcategory.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Subcategory->action_product_detail(Object(Controller_Subcategory))
#2 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-30 21:43:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/classes/controller/subcategory.php [ 123 ]
2012-09-30 21:43:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/classes/controller/subcategory.php [ 123 ]
--
#0 /home/vhost/camportco.com/demo/application/classes/controller/subcategory.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Subcategory->action_product_detail(Object(Controller_Subcategory))
#2 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#6 {main}