<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    define('ROOT', 'http://localhost/mvc/public');
} else {
    // for hosting on the web
    define('ROOT', 'http://localhost/mvc/public');
}
