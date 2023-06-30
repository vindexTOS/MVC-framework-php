<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // db config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
    //server
    define('ROOT', 'http://localhost/mvc/public');
} else {
    // for hosting on the web
    define('ROOT', 'http://localhost/mvc/public');
}
