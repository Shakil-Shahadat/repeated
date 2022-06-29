<?php
$db = new SQLite3( 'data.db' );

// $response = $db->exec( 'CREATE TABLE IF NOT EXISTS tasks ( task, type, done )' );

// $response = $db->exec( 'INSERT INTO tasks VALUES ( "", "", "" )' );

$result = $db->query( 'SELECT * FROM tasks' );

while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
{
	echo '<pre>';
	print_r( $res );
	echo '</pre>';
}
