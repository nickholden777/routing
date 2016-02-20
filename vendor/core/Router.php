<?php

namespace vendor;

class Router {

	public function start() {

		$route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

		$routing = [

			"/" => ['controller' => 'Main', 'action' => 'index'],
			"/article" => ['controller' => 'Main', 'action' => 'article'],
		];

		if(isset($routing[$route])) {
			$controller = 'app\\controllers\\'.$routing[$route]['controller'].'Controller';
			$controller_obj = new $controller;
			$controller_obj->$routing[$route]['action']();
		}
	}
}