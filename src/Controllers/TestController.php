<?php

namespace DemoPHP\Controllers;

class TestController
{
    /**
     * Action show du controller
     *
     * @param string $name Le nom à afficher
     * @return void
     */
    public function show($name = 'sans nom')
    {
        echo "TestController@show: hello $name";
    }
    
}
