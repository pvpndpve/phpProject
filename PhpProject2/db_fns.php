<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function db_connect() {
$result = new mysqli('localhost', 'bm_user', 'password', 'bookmarks');
if (!$result) {
throw new Exception('Could not connect to database server');
} else {
return $result;
}
}
?>