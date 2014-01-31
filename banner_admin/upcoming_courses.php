<?php

$page_title = 'Upcoming Courses';

require 'functions.php';
// include  '../header.php';


$dbh =  db_connect($config['DB_HOST'], $config['DB_NAME'], $config['DB_USERNAME'], $config['DB_PASSWORD'] );
$select = "SELECT * FROM PL_tools_course_instances_to_program_instances_view_admissions";
$rows = db_query($select, $dbh);


 ?>


<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Upcoming Courses</title>

  <link rel="stylesheet" href="<?php echo $root ?>css/foundation.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://dubspot.com/wp-content/themes/dubspotheme/js/jquery.tablesorter.min.js"></script>

  <style>
    
    body {
      font-size: 14px;
    }
    
    table caption {
      padding: 10px 0;
      font-size: 16px;
      font-weight: 600;
    }

    /* tables */
table.tablesorter {
  font-family:arial;
  background-color: #CDCDCD;
  margin:10px 0pt 15px;
  width: 100%;
  text-align: left;
}
table.tablesorter thead tr th, table.tablesorter tfoot tr th {
  background-color: #e6EEEE;
  border: 1px solid #FFF;
  padding: 4px;
}
table.tablesorter thead tr .header {
  background-image: url(http://dubspot.com/public/wp-content/themes/dubspotheme/images/bg.gif);
  background-repeat: no-repeat;
  background-position: center right;
  cursor: pointer;
}
/*table.tablesorter tbody td {
  color: #3D3D3D;
  padding: 4px;
  background-color: #FFF;
  vertical-align: top;
}
table.tablesorter tbody tr.odd td {
  background-color:#F0F0F6;
}*/
table.tablesorter thead tr .headerSortUp {
  background-image: url(http://dubspot.com/public/wp-content/themes/dubspotheme/images/asc.gif);
}
table.tablesorter thead tr .headerSortDown {
  background-image: url(http://dubspot.com/public/wp-content/themes/dubspotheme/images/desc.gif);
}
table.tablesorter thead tr .headerSortDown, table.tablesorter thead tr .headerSortUp {
background-color: #8dbdd8;
}


  </style>

</head>
  <body>





<!--===========================================================================
=                                 MAIN-CONTENT                                =
============================================================================-->

    <table id="myTable" class="tablesorter">
      <caption>Upcoming Courses</caption>
      <thead>
        <tr>
          <th>cipi_id</th>
          <th>Class Inst. Title</th>
          <th>Program Inst. Title</th>
          <th>Location</th>
          <th>Weekly Time</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Room ID</th>
          <th>Max Seats</th>
          <th>Class Code</th>
          <th>ci_instance_id</th>
        </tr>
      </thead>
      <tbody>

      <?php  
        foreach ($rows as $row) {
          echo '<tr>';
          echo '<td>' . $row[cipi_id] . "</td>";
          echo '<td>' . $row[ci_title] . "</td>";
          echo '<td>' . $row[pi_title] . "</td>";
          echo '<td>' . $row[ci_loc] . "</td>";
          echo '<td>' . $row[ci_weekly] . "</td>";
          echo '<td>' . $row[ci_start] . "</td>";
          echo '<td>' . $row[ci_end] . "</td>";
          echo '<td>' . $row[room_id] . "</td>";
          echo '<td>' . $row[seats_max] . "</td>";
          echo '<td>' . $row[class_code] . "</td>";
          echo '<td>' . $row[ci_instance_id] . "</td>";
          echo '</tr>';
        }
       ?>
      </tbody>
    </table>


<!--=======================    end of MAIN-CONTENT    =======================-->

<script>

  $(document).ready(function() 
      { 
          $("#myTable").tablesorter(); 
          console.log('success!');
      } 
  ); 

  </script>

  </body>
</html>
