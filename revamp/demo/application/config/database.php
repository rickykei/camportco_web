<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
		'default' => array
		(
				'type'       => 'mysql',
				'connection' => array(
						'hostname'   => 'localhost',
						'database'   => 'camportco_demo_db',
						'username'   => 'root',
						'password'   => '',
						'persistent' => FALSE,
				),
				'table_prefix' => '',
				'charset'      => 'utf8',
				'caching'      => FALSE,
				'profiling'    => TRUE,
		)
);