<?php
	
	//require_once './app/Test1.php';

	require __DIR__.'/vendor/autoload.php';

	use liw\app as a;	

	$obj = new a\Test1();
	$obj->show();
