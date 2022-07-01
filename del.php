<?php
$db = new SQLite3( 'data.db' );

if ( $_POST[ 'task' ] != '' )
{
	$response = $db->exec( 'DELETE FROM tasks WHERE task="' . $_POST[ 'task' ] . '"' );
	echo 'Success!';
}
else
{
	echo 'Fail!';
}
