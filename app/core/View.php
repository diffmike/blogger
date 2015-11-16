<?php

namespace app\core;

class View 
{
	public function render($template, array $data = [])
	{
        foreach ($data as $key => $item) {
            ${$key} = $item;
        }
		require APP . 'view/' . $template;
	}
}