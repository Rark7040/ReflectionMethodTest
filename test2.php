<?php


function test_func(string $class, string $method){
	$class = new $class;
	$method = new ReflectionMethod(get_class($class), $method);
	$method->setAccessible(true);
	$method->invoke($class);
}

class Test{
	private static function func(){
		echo 'iei';
	}
}

test_func(get_class(new Test), 'func');
/**
	iei[Finished in 0.1s]
*/
