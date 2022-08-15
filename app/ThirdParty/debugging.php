<?php




function p( $value )
{
	echo "<pre>";
	print_r( $value );
	echo "</pre>";
	exit;
}

function v( $value )
{
	echo "<pre>";
	var_dump( $value );
	echo "</pre>";
	exit;
}