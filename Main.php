<?php

include "autoloader.php";

class Main 
{
	function __construct()
	{
            $h = new Human("Hello \n");
            $b = new Bird("Hello \n");
            $d = new Dog("Hello \n");
	}   
}

$m = new Main();
