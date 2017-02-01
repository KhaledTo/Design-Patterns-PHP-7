<?php
include "autoloader.php";

class HumanTalk implements ITalk
{
	public function talk(string $msg){
		echo "I tell you this: ".$msg;
	}
}
