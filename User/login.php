<?php

session_start();
include("connection.php");

if (isset($_POST['submit'])) {
  $Email = $_POST['Email'];
  $password = $_POST['pass'];

  $sql = "SELECT * FROM userinfo WHERE Email = '$Email' AND pass = '$password'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $_SESSION['NID'] = $row['NID'];
    
    header("Location: welcome.php");
    exit();
  } else {
    echo '<script>
      window.location.href = "login-page.php";
      alert("Login failed. Invalid UserID or Password!!!");
      </script>';
  }
}
?>
