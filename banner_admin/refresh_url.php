<?php
$prog_id = $_GET['prog_id'];
$register_or_program = $_GET['reg_or_prog'];
$db = new PDO('mysql:host=localhost;dbname=dubspot_live', 'dubspot_wp', 'dubspot_wp');
if (!$db) die('Could not connect: ' . mysql_error());
$sql = "select P.url_";
$sql .= $_GET['reg_or_prog'] == 'prog' ? 'program' : 'register';
$sql .= " from ecommerce_programs P where P.id = $prog_id";
$row = $db->query($sql)->fetch();
$db = null;
print($row[0]);
?>
