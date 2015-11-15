<?php

namespace app\controller;

class PostController extends \app\core\Controller 
{
	public function getIndex()
	{
		$this->view->render('home.php');
	}

	public function getPost($id)
	{
		var_dump($id);
	}
}