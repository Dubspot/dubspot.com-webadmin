<?php $root = "http://dubspot.com/webadmin/" ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DS Admin | <?php echo $page_title ?></title>
    <link rel="stylesheet" href="<?php echo $root ?>css/foundation.css" />
    <script src="<?php echo $root ?>js/vendor/modernizr.js"></script>
    <script src="<?php echo $root ?>js/banner_admin.js"></script>




  <style>
    table {
      width: 100%;
    }

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

<div class="row">
	<div class="large-12 large-centered columns">
    