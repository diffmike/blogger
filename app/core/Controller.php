<?php 

namespace app\core;

class Controller 
{
    /**
     * @var null View
     */
    public $view = null;

    /**
     * Initiate view renderer
     */
    public function __construct()
    {
        $this->view = new View;
    }
}