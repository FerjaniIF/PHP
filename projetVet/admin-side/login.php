<?php
  $uname = $_POST['uname'];
  $pass = $_POST['pass'];

  if($uname =="admin" && $pass=="root"){
    header("Location:showDB.php");
  }
  echo '
  <script>
    alert("Access Denied, try again!");
    window.location.href = "auth.html";
  </script>
  ';
  exit();

?>