<?php
$bg_image_dir="../../images/announces";
$num_programs_in_banner = 6;
$page_title = 'Banner';

require 'functions.php';
include  '../header.php';


if (isset($_POST['changeBanner']))  {
  change_banner();
}


?>

<h3>Program Banner Settings</h3>

<p>The following pull-down menus determine which programs get advertised on the banner on Dubspot's webpage.</p>

<form action="banner_admin.php" method="post" enctype="multipart/form-data">


  <table>
  <?php
    $b = load_banner_settings();
    $enable_chkbx = "<input type=\"checkbox\" name=\"enable_schedule_banner\"";
    $enable_chkbx .= "value=\"enable_schedule_banner\"".($b['is_enabled'] ? " checked" : "").">";
    echo "<tr><td align=\"right\">Click to enable banner:</td><td align=\"left\">$enable_chkbx</td></tr>";
  
  ?>
    <tr>
    <td>New bg image</td>
    <td>
	<img src="/<?php echo($b['background_img_path']) ?>" /><br />
	 <input class="" type="file" name="background_new_img" id="background_new_img">
    </td>
    </tr>
  </table>
  <br>

<div class="row">
  <div class="large-12 large-centered columns">

  <table border="1"  style="margin: 0 auto;">
    <?php
       $r = load_program_settings();
       $n = count($r);
       for ($i = 0; $i < $n; $i++) {
         echo "<tr>";
         echo "<td>Program ".($i+1)."</td>";
         echo "<td><table>";
         echo "<tr><td><select name=\"programId$i\" onchange=\"showUrl($i, this.value)\">".program_options($r[$i]['id'])."</select></td></tr>";
         echo "<tr><td><input id=\"urlProgram$i\" name=\"programUrl$i\" type=text value=\"".$r[$i]['url_program']."\" size=65></td></tr>";
         echo "<tr><td><input id=\"urlRegister$i\" name=\"registerUrl$i\" type=text value=\"".$r[$i]['url_register']."\" size=65></td></tr>";
         echo "</table></td>";
         echo "<td><table>";
         echo "<tr><td><input type=\"checkbox\" name=\"show_past_nyc[]\" value=\"pastNyc$i\"".($r[$i]['show_past_nyc'] ? "checked" : "")."></td><td>Show past NYC</td></tr>";
         echo "<tr><td><input type=\"checkbox\" name=\"show_past_dso[]\" value=\"pastDso$i\"".($r[$i]['show_past_dso'] ? "checked" : "")."></td><td>Show past DSO</td></tr>";
         echo "</table></td>";
         echo "</tr>";
       }
    ?>
  </table>

  
  <p style="margin: 1em auto; text-align: center;"> <input name="changeBanner" class="button" type="submit" value="Change Banner!"></p>
    
  </div>
</div>


</form>

<?php include '../footer.php' ?>


