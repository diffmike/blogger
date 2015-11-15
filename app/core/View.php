<?php

namespace app\core;

class View 
{
	public function render($template)
	{
		require APP . 'view/' . $template;
	}
}