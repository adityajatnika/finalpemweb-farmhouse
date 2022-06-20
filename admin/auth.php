<?php
session_start();
include "dbconfig.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {

function validate($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if (empty($email)) {
  header("Location: signin.php?error=User Name is required");
    exit();
}else if(empty($password)){
      header("Location: signin.php?error=Password is required");
    exit();
}else{
  $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
          if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['l_nama'] = $row['l_nama'];
            $_SESSION['f_nama'] = $row['f_nama'];
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['password'] = $row['password'];
            header("Location: index.php");
          exit();
          }else{
      header("Location: signin.php?error=User dan Password tidak ditemukan");
          exit();
    }
  }else{
    header("Location: signin.php?error=User dan Password tidak ditemukan");
        exit();
  }
}

}else{
header("Location: signin.php");
exit();
}
 ?>
