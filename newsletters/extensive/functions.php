<?php 

  function shortDate() {
    echo date('My');
  }

  function latestVersion($dir="") {
    $files = glob($dir . "versions/*.json");
    $files = array_combine($files, array_map("filemtime", $files));
    arsort($files);
    $latest_file = key($files);
    return $latest_file;
  }

 ?>