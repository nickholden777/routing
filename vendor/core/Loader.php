<?php 

class Loader {

	public function loadClass($class) {
	
		$arr = explode("\\", $class);
		$prefix = array_shift($arr);

		if($prefix == 'vendor') {
			$prefix_file = '../vendor/core/';
		} elseif ($prefix = 'app') {
			$prefix_file = '../app/';
		}

		$file = $prefix_file.implode('/', $arr).'.php';

		if(is_file($file)) {
			require_once($file);
		}
	}
}