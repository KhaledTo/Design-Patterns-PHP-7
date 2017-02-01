<?php

include "autoloader.php";

class BirdTalk implements ITalk
{
	public function talk(String $msg){
		echo "I tweet you this: ".$msg;
	}
}
