<?php

include "autoloader.php";

class Bird
{
   // This is PHP so no type there... I wish I could put ITalk T-T
   private $t ;
            
	function __construct(string $msg)
	{   
            // Has to be of type Talk
            $this->t = new BirdTalk();
            $this->t->talk($msg);
	}   
}
