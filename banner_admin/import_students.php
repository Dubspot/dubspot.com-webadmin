<!-- Put a copy of this file in dubspot.com/public */ -->


<h3>Fabric Class Closure and Synchronization</h3>

<p>This will close or open a class, given its Orbund class name</p>

<form action="import_students.php" method="post">
   <table>
   <tr>
   <td>After you run fabric-users-for-import-into-orbund-via-dubspot-services.sql, you may push this button:</td><td><input name="importFabricIntoOrbund" type="submit" value="Import Fabric Students Into Orbund"></td>
   </tr>
   <table>
</form>


<em>
<p style="color:blue">
<?

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



if(isset($_POST['importFabricIntoOrbund']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'importFabricStudentsIntoOrbund'));
}


?>
</p>
</em>