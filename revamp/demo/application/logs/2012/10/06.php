<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-06 15:41:27 --- ERROR: Kohana_Exception [ 0 ]: The content_tc property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-10-06 15:41:27 --- STRACE: Kohana_Exception [ 0 ]: The content_tc property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/vhost/camportco.com/demo/application/classes/model/product.php(44): Kohana_ORM->__get('content_tc')
#1 /home/vhost/camportco.com/demo/application/views/sub_category/product_detail.php(14): Model_Product->getName()
#2 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#3 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#4 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/vhost/camportco.com/demo/application/views/template/column2.php(9): Kohana_View->__toString()
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#7 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#8 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Subcategory))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-06 17:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 17:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 17:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 17:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 19:53:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
2012-10-06 19:53:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 19:56:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
2012-10-06 19:56:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 19:57:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
2012-10-06 19:57:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 19:58:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
2012-10-06 19:58:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_InvoiceItem' not found ~ APPPATH/classes/controller/cart.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 20:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/order_payment.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 20:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/order_payment.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 20:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 20:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_cat_list.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 20:57:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/index.php [ 9 ]
2012-10-06 20:57:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/index.php [ 9 ]
--
#0 /home/vhost/camportco.com/demo/application/views/index.php(9): Kohana_Core::error_handler('/home/vhost/cam...', Array)
#1 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#2 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(11): Kohana_View->__toString('/home/vhost/cam...', Array)
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-06 20:57:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/index.php [ 9 ]
2012-10-06 20:57:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/index.php [ 9 ]
--
#0 /home/vhost/camportco.com/demo/application/views/index.php(9): Kohana_Core::error_handler('/home/vhost/cam...', Array)
#1 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#2 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vhost/camportco.com/demo/application/views/template/column3.php(11): Kohana_View->__toString('/home/vhost/cam...', Array)
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-06 20:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 20:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 20:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 20:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 20:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-06 20:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/zh/straps.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 23:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL categorys/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-06 23:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL categorys/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}