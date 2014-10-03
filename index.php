<?php
	$page_title = "Home";
	include 'header.php';
 ?>
  <h1>Dubspot</h1>

  <br><br>

  <div class="row">
    <div class="12-large large-centered columns ">
      <h2>Web Admin Panel</h2>
      <h3><a href="<?php echo $root ?>banner_admin/buttons.php">Class Closures</a></h3>
      <h3><a href="<?php echo $root ?>banner_admin/banner_admin.php">Schedule Banner</a></h3>
      <h3><a href="<?php echo $root ?>banner_admin/upcoming_courses.php">Upcoming Courses</a></h3>
    </div>
  </div>

  <br><br>

  <div class="row">
    <div class="12-large large-centered columns ">
      <h2>Newsletter Creator</h3>
      <h3><a href="<?php echo $root ?>newsletters/extensive.php">Extensive</a></h3>
      <h3><a href="<?php echo $root ?>newsletters/promo.php">Promo</a></h3>
      <h3><a href="<?php echo $root ?>newsletters/promo-2.php">Promo 2</a></h3>
    </div>
  </div>

  <div class="row">
    <div class="12-large large-centered columns ">
      <h2>Outlines</h3>
      <h3><a href="<?php echo $root ?>outlines/dubspot_target_users/">Target Users</a></h3>
      <h3><a href="<?php echo $root ?>outlines/dubspot_projects/">Projects</a></h3>
      <h3><a href="<?php echo $root ?>outlines/dubspot_servers/">server_info</a></h3>
    </div>
  </div>


<?php include 'footer.php'; ?>