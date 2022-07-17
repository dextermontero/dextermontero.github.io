<?php
$conn = new mysqli('localhost','root','','vet');
if(mysqli_connect_error()){
	die("Database Connection Lost : ". mysqli_connect_error());
}
$this_file = str_replace('\\', '/', __File__) ;
// LOCALHOST
$doc_root = $_SERVER['DOCUMENT_ROOT'];
// HOSTING
// $doc_root = __DIR__;

// LOCALHOST
$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);

// HOSTING
// $web_root =  str_replace (array($doc_root, "config.php") , '' , $this_file);
// $server_root = str_replace ('config.php' ,'', $this_file);

define ('web_root' , $web_root);
define('server_root' , $server_root);
?>