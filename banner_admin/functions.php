<?php 
	
require 'config.php';


function db_connect($hostname, $dbname, $username, $password, $attr=array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) {
  try {
    return new PDO("mysql:host=$hostname; dbname=$dbname", $username, $password, $attr);
  } catch (Exception $e) {
    echo 'Exception : ' . $e->getMessage() . "\n";
    die();
  }
}


function db_query($query, $dbh) {
  $stmt = $dbh->prepare($query);
  $stmt->execute();
  $rows = array();
  while ($row = $stmt->fetch()) {
    $rows[] = $row;
  }
  return $rows;
}



function change_banner() {
global $bg_image_dir;

  $n = $GLOBALS['num_programs_in_banner'];
  $db = new PDO('mysql:host=localhost;dbname=dubspot_live', 'dubspot_wp', 'dubspot_wp');
  if (!$db) die('Could not connect: ' . mysql_error());

  $enable_schedule_banner = in_array("enable_schedule_banner", $_POST);


// process uploaded image
  if(is_uploaded_file($_FILES['background_new_img']['tmp_name'])){
    $uploaddest = $bg_image_dir.'/'.strtolower($_FILES['background_new_img']['name']);
    if (!is_dir('../'.$bg_image_dir)){
      mkdir('../'.$bg_image_dir);
    }
    move_uploaded_file($_FILES['background_new_img']['tmp_name'],'../'.$uploaddest);
    $bckgrnd_img_path=$uploaddest;
    $s = $db->prepare("update schedule_banner set is_enabled=:is_enabled, background_img_path=:img_path");
    $s->bindValue(":img_path", $bckgrnd_img_path, PDO::PARAM_STR);
  }
  else {
    $s = $db->prepare("update schedule_banner set is_enabled=:is_enabled");
  }
  $s->bindValue(":is_enabled", $enable_schedule_banner, PDO::PARAM_BOOL);
  $s->execute();

  $s = $db->prepare("delete from banner_programs");
  $s->execute();

  for ($i = 0; $i < $n; $i++) {
    $pid = $_POST["programId$i"];
    $url_program = $_POST["programUrl$i"];
    $url_register = $_POST["registerUrl$i"];
    $nyc = in_array("pastNyc$i", $_POST["show_past_nyc"]);
    $dso = in_array("pastDso$i", $_POST["show_past_dso"]);

    $s = $db->prepare("insert into banner_programs (prog_id) values (:prog_id)");
    $s->bindValue(':prog_id', $pid, PDO::PARAM_INT);
    $s->execute();

    $s = $db->prepare("update ecommerce_programs set show_past_nyc=:nyc, show_past_dso=:dso, url_program=:url_program, url_register=:url_register where id=:pid");
    $s->bindValue(':pid', $pid, PDO::PARAM_INT);
    $s->bindValue(':nyc', $nyc, PDO::PARAM_BOOL);
    $s->bindValue(':dso', $dso, PDO::PARAM_BOOL);
    $s->bindValue(':url_program', $url_program, PDO::PARAM_STR);
    $s->bindValue(':url_register', $url_register, PDO::PARAM_STR);
    $s->execute();
  }

  $db = null;
}


function load_banner_settings() {
  $db = new mysqli('localhost', 'dubspot_wp', 'dubspot_wp', 'dubspot_live');
  if (!$db) die('Could not connect: ' . mysql_error());

  $res = $db->query("select is_enabled, background_img_path from schedule_banner");
  return $res->fetch_array();
}


function load_program_settings() {
  $n = $GLOBALS['num_programs_in_banner'];
  $db = new mysqli('localhost', 'dubspot_wp', 'dubspot_wp', 'dubspot_live');
  if (!$db) die('Could not connect: ' . mysql_error());

  $sql = "select P.id, P.show_past_nyc, P.show_past_dso, P.url_program, P.url_register ";
  $sql .= "from banner_programs B left join ecommerce_programs P on (B.prog_id = P.id)";
  $res = $db->query($sql);
  $bprog = Array();
  while ($r = $res->fetch_array()) $bprog[] = $r;
  $i = count($bprog);
  if ($i != $n) {
    echo "Expected $n programs from banner_programs but got $i instead.";
    exit;
  }
  $res->free();
  $db->close();
  return $bprog;
}


function program_options($sid) {
  $db = new mysqli('localhost', 'dubspot_wp', 'dubspot_wp', 'dubspot_live');
  if (!$db) die('Could not connect: ' . mysql_error());

  $res = $db->query("select id, title from ecommerce_programs where title not like '%COR%' and title not like '%ADV%'");
  $s = '';
  while ($r = $res->fetch_array()) {
    $id = $r['id'];
    $t = $r['title'];
    $s .= "<option value=$id ".($id == $sid ? "selected" : "").">$t</option>";
  }
  $res->free();
  $db->close();
  return $s;
}

function callDubspotServices ($data) {
  // $url = 'http://dsapp2.dubspot.com:8080';
  $url    = 'http://localhost:8080';
  $ch     = curl_init($url);

  //print (json_encode($data)); exit;

  curl_setopt($ch, CURLOPT_POST,           1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST,           true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,     json_encode($data)); 
  //curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "method": "processPayment","id": 1}');
  curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain'));

  $response = curl_exec($ch);
  if (empty($response)) { 
    print "<h1>no response</h1>"; 
    return false;
  }
  //header('Content-type: application/json'); // for json display in browser 
  //print "response: ".$response; 
  //curl_close($ch);
  //exit;

  $obj = json_decode ($response);
  if ($obj == null || !is_object($obj)) {
    print "<h1>unable to decode json</h1>";
    return false;
  }
  return $obj->result;
}



?>
