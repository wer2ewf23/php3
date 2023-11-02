<?php
const HOST = 'localhost';
const DBNAME = 'z590';
const USERNAME = 'z590';
const PASSWORD = 'ZN7JSw2JK8bxzWsA';
const CHARSET = 'utf8';

const DSN = 'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=' . CHARSET;
$connection = new PDO(DSN, USERNAME, PASSWORD);
?>
