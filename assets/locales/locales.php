<?php
if (isset($_GET['lang'])) {
    setcookie('lang', $lang, time() + (86400 * 30), '/'); 
    $lang = $_GET['lang'];
}
else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en';
}
require_once (dirname(__FILE__) . '/' . $lang . '.php');

$TRAD = $translations;
?>