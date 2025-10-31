<?php
    define('HOST', 'localhost');
    define('USER','root');
    define('PASS','root');
    define('BASE','login_db');

    $conn = new MySQLi(HOST,USER,PASS,BASE);
?>