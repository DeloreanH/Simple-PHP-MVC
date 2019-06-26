<?php

	function call($controller, $action){
        require_once('Controllers/' . $controller . 'Controller.php');

		switch($controller){
			case 'Article':
				require_once('Models/Article.php');
				$controller= new ArticleController();
				break; 

		}

		$controller->{$action }();
	}

	$controllers= array(
						'Article'=>['index','store']
						);

	if (array_key_exists($controller, $controllers)) {

		if (in_array($action, $controllers[$controller])) {

			call($controller, $action);
		}else{
			call('Article', 'error');
		}
	}else{
		call('Article', 'error');
	}
?>
