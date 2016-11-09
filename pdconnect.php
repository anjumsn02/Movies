<?php


$user = 'anjumsn02';
$pass = 'sa7072';
$db_info= 'mysql:host=washington.uww.edu;dbname=cs382-2161_anjumsn02';

try {
$db = new PDO($db_info,$user,$pass);
}catch (PDOException $e){
 print "Error!" . $e->getMessage(). "<br/>";
 die();

}

?>
