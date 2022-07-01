<?php
header( 'Access-Control-Allow-Origin: *' );

$db = new SQLite3( 'data.db' );

if ( $_POST[ 'task' ] != '' && $_POST[ 'type' ] != '' )
{
	$response = $db->exec( 'INSERT INTO tasks VALUES ( "' . $_POST[ 'task' ] . '", "' . $_POST[ 'type' ] . '", 0 )' );
	echo 'Success!';
}
else
{
	echo 'Fail!';
}
