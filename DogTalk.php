<?php

include "autoloader.php";

class DogTalk implements ITalk
{
	public function talk(String $msg){
		echo "I bark you this: ".$msg;
	}
}


