<?php
    $db['db_host'] = 'localhost';
    $db['db_user'] = 'root';
    $db['db_password'] = '';
    $db['db_base'] = 'todo_list';

    foreach ($db as $key => $value) {
        define(strtoupper($key), $value);
    }

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_BASE)
        or die('Connection failed');
?>
