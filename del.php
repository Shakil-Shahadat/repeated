<?php
$db = new SQLite3( 'data.db' );

if ( $_POST[ 'del' ] != '' )
{
	$response = $db->exec( 'DELETE FROM tasks WHERE task="' . $_POST[ 'del' ] . '"' );
	echo 'Success!';
}
else
{
	echo 'Fail!';
}
