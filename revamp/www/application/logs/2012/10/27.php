<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-27 22:08:12 --- ERROR: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-27 22:08:16 --- ERROR: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-27 22:08:32 --- ERROR: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-27 22:08:41 --- ERROR: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-27 22:08:58 --- ERROR: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-10-27 22:08:58 --- STRACE: Kohana_Exception [ 0 ]: The paypal_charge property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/vhost/camportco.com/demo/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('paypal_charge', 0)
#1 /home/vhost/camportco.com/demo/application/classes/controller/cart.php(485): Kohana_ORM->__set('paypal_charge', 0)
#2 [internal function]: Controller_Cart->action_confirm()
#3 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Cart))
#4 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-27 22:09:22 --- ERROR: Kohana_Exception [ 0 ]: The total_amount property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-10-27 22:09:22 --- STRACE: Kohana_Exception [ 0 ]: The total_amount property does not exist in the Model_Cart_InvoiceForm class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/vhost/camportco.com/demo/application/views/cart/checkout.php(144): Kohana_ORM->__get('total_amount')
#1 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#2 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#3 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/vhost/camportco.com/demo/application/views/template/column2.php(9): Kohana_View->__toString()
#5 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(61): include('/home/vhost/cam...')
#6 /home/vhost/camportco.com/demo/system/classes/kohana/view.php(343): Kohana_View::capture('/home/vhost/cam...', Array)
#7 /home/vhost/camportco.com/demo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/vhost/camportco.com/demo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Cart))
#10 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#13 {main}