<?php 
session_start();
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="han0268m,park0712,step0268"/>
    <meta name="description" content="Assignment" />
    <title>The list of products</title>
    <link rel = "stylesheet" type="text/css" href="styles/style2.css">
  </head>
  <body>
    <header>
     <div class="container">
      <div class ="logo">
        <a href="../assign3/images/WhiteRabbit.png" class="logotype"></a>
       </div>
       <nav>
         <ul>
           <li><a href = "home.html">Home</a></li>
           <li><a href = "product.php">Products</a></li>
           <li><a href = "login.php">Sign up</a></li>
           <li><a href = "contact.php">Contact us</a></li>
           <li><a href = "privacy-policy.html">Policy</a></li>
           <li class = "<?php echo $_SESSION['manager']==1 ? 'show' : 'hidden';?>"><a href = "contact.php">Manager DB</a></li>
           <li class = "<?php echo $_SESSION['administrator']==1 ? 'show' : 'hidden';?>"><a href = "contact.php">Admin DB</a></li> 
         </ul>
       </nav>
       <div class="contacts">
        <ul>
          <li></li>
          <li></li>
        </ul>
       </div>
<!-- <?php require_once "inc/menu.inc.php"; ?> -->
<h1>Admin's dashboard</h1>
<h2>Managing Users</h2>
<?php
    require_once "inc/dbconn.inc.php";
    $sql = "SELECT id, username FROM user WHERE completed=0;";
    if($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) >= 1) {
            $results = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<li> ". $row["id"]. ". ". $row["username"];
              }
                //echo "<li> ". $row["id"]. ". ". $row["name"]." : ". $row["description"] . "<p>" . "</li>"."</a>";
            }
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    
    ?>
    <br><a href="index2.php"><input id="button" type="submit" value="Edit" /></a>


    
    
</div>
    </header>
  </body>
</html>