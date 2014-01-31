<?php
  $page_title = 'Class Closures';
  require 'functions.php';
  include  '../header.php';
?>

<div class="school_closures text-center" style="margin-top: 2em;" >
  
<h3>Fabric Class Closure and Synchronization</h3>

<p>This will close or open a class, given its Orbund class name</p>

<form action="buttons.php" method="post" >
   <table style="margin: 0 auto; width: auto;">
   <tr>
   <td>Class Group Name:</td>
   <td><input name="classGroupName" type="text"></td>
   <td><input name="closeClassGroup" type="submit" class="button small radius alert" value="Close"></td>
   <td><input name="openClassGroup" type="submit" class="button small radius success" value="Open"></td>
   </tr>
   <tr>
   <td>Class Name:</td>
   <td><input name="className" type="text"></td>
   <td><input name="closeClass" type="submit" class="button small radius alert" value="Close"></td>
   <td><input name="openClass" type="submit" class="button small radius success" value="Open"></td>
   <!--<td><input name="synchronizeClassDates" type="submit" value="Synchronize Dates"></td>-->
   </tr>
   </table>
</form>


<em>
<p style="color:blue">
<?


///////////////////////////////////////////////////////////////////

if (isset($_POST['closeClassGroup']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'closeClassGroup',
				  'params'=>array($_POST['classGroupName'])));
}

if (isset($_POST['openClassGroup']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'openClassGroup',
				  'params'=>array($_POST['classGroupName'])));
}

///////////////////////////////////////////////////////////////////

if (isset($_POST['closeClass']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'closeClass',
				  'params'=>array($_POST['className'])));
}

if (isset($_POST['openClass']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'openClass',
				  'params'=>array($_POST['className'])));
}

if(isset($_POST['synchronizeClassDates']))  {
  print callDubspotServices(array('id'=>rand(0,32768),
				  'method'=>'synchronizeDatesOfClass',
				  'params'=>array($_POST['className'])));
}

///////////////////////////////////////////////////////////////////



?>
</p>
</em>

</div>


<?php include '../footer.php' ?>

