<?php 

	class ArticleController
	{	
		public function __construct(){}

		public function index(){
			$articles = Article::all();
			require_once('Views/Article/index.php');
		}
	}

?>
