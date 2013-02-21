<?php

class database_connector {

	function __construct()
	{
		include APPPATH . 'config/database.php';

		\Capsule\Database\Connection::make('default', array(
			'driver'    => $db[$active_group]['dbdriver'],
			'host'      => $db[$active_group]['hostname'],
			'database'  => $db[$active_group]['database'],
			'username'  => $db[$active_group]['username'],
			'password'  => $db[$active_group]['password'],
			'collation' => $db[$active_group]['dbcollat'],
			'prefix'    => $db[$active_group]['dbprefix']
		), true);
	}

}