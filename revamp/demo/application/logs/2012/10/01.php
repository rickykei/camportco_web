<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-01 17:31:54 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'SESSION_CART_QTY' ~ APPPATH/classes/controller/cart.php [ 151 ]
2012-10-01 17:31:54 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'SESSION_CART_QTY' ~ APPPATH/classes/controller/cart.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 17:34:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  session_id ~ APPPATH/classes/model/cart/invoiceform.php [ 10 ]
2012-10-01 17:34:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  session_id ~ APPPATH/classes/model/cart/invoiceform.php [ 10 ]
--
#0 /home/vhost/camportco.com/demo/application/classes/model/cart/invoiceform.php(10): Kohana_Core::error_handler(Array)
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(250): Model_Cart_InvoiceForm->populate()
#2 [internal function]: Controller_Cart->action_confirm(Object(Controller_Cart))
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-01 23:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL productdetail/IP-TB was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 23:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL productdetail/IP-TB was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}