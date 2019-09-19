<?php

$dbname = $_SERVER['POSTGRES_DB'];
$user = $_SERVER['POSTGRES_USER'];
$password = $_SERVER['POSTGRES_PASSWORD'];

$connection_string = "host=db port=5432 dbname=$dbname user=$user password=$password";
$query = "select * from something";

$conn = pg_connect($connection_string);
$result = pg_query($conn, $query);

echo("<pre>");
var_dump(pg_fetch_all($result));
echo("</pre>");
