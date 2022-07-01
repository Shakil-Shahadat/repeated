<?php
$db = new SQLite3( 'data.db' );

if ( $_POST[ 'task' ] != '' )
{
	$response = $db->exec( 'UPDATE tasks SET done=1 WHERE task="' . $_POST[ 'task' ] . '"' );

	if ( $response )
	{
		echo 'Success!';
	}
	else
	{
		echo 'Fail!';
	}
}
