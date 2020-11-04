<?php

if(isset($_POST['login']) && isset($_POST['password'])) {
    require_once "inc/dbconn.inc.php";
    
    $login = filter_var($_POST['login'],FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM users WHERE name = '$login' AND password = '$password';";

    if($result = mysqli_query($conn,$sql)){
      if(mysqli_num_rows($result)>0){

        $row = $result -> fetch_assoc();
        $_SESSION['id'] = $row["user_id"];
        $_SESSION['manager'] = $row["manager"];
        $_SESSION['administrator'] = $row["administrator"];
        echo "Successfully connected<br>";
    }
      mysqli_free_result($result);
      
    } else {
      echo mysqli_error($conn);
      echo "Connection fault<br>";
    }

    mysqli_close($conn);

    if($_SESSION['manager']==1){
      header("location: manager.php");
    } else if ($_SESSION['administrator']==1){
      header("location: admin.php");
    } else { 
      $message = "wrong answer";
      echo "<script>window.alert('invalid username or password');</script>"; 
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("location: login.php");
    }
    
}
?>