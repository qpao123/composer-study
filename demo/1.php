<?php
	require_once '../vendor/autoload.php';

	use Core\Run;
	use Core\People;

	$obj1 = new Run();
	$obj1->index();
	
	echo '<br/>';

	$obj2 = new People();
	$obj2->index();