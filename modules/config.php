<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'mobcom');
   $conn = mysqli_connect(DB_SERVER, DB_USERNAME ,DB_PASSWORD ,DB_DATABASE);
   $GLOBALS['con'] = mysqli_connect(DB_SERVER, DB_USERNAME ,DB_PASSWORD ,DB_DATABASE);
   if (!$GLOBALS['con']) {
	exit('Connection Error!');
}

?>