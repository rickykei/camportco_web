<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-10 00:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-10 00:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-10 00:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/d was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-10 00:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/d was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-10 00:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-10 00:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vhost/camportco.com/demo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vhost/camportco.com/demo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vhost/camportco.com/demo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-10 00:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-10 07:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-10 12:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-10 17:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]