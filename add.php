<?php
header( 'Access-Control-Allow-Origin: *' );

$db = new SQLite3( 'data.db' );

$response = $db->exec( 'INSERT INTO tasks VALUES ( "' . $_POST[ 'task' ] . '", "' . $_POST[ 'type' ] . '", "" )' );

echo 'Success';
