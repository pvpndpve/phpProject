<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once('bookmark_fns.php');
session_start();
do_html_header('Recommending URLs');
try {
check_valid_user();
$urls = recommend_urls($_SESSION['valid_user']);
display_recommended_urls($urls);
}
catch(Exception $e) {
echo $e->getMessage();
}
display_user_menu();
do_html_footer();
?>