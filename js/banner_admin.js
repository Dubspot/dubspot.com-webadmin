function adjustUrl(i, pid, suffix) {
  var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"); // latter is for IE5/6
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      var id = "url" + suffix + i.toString();
      document.getElementById(id).value = xmlhttp.responseText;
    }
  }
  reg_or_prog = (suffix == "Program") ? "prog" : "reg";
  refresh_url = "refresh_url.php?prog_id=" + pid.toString() + "&reg_or_prog=" + reg_or_prog;
  xmlhttp.open("GET", refresh_url, false);
  xmlhttp.send();
}


function showUrl(i, pid) {
  adjustUrl(i, pid, "Program");
  adjustUrl(i, pid, "Register");
}



function update_newsletter(portion) {
  $.get("/wp-content/themes/dubspotheme/dsla-counter.php", {course: current_course, user: user_name});
}

