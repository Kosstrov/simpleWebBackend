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
           <li><a href = "contact.html">Contact us</a></li>
           <li><a href = "privacy-policy.html">Policy</a></li>
         </ul>
       </nav>
       <div class="contacts">
        <ul>
          <li></li>
          <li></li>
        </ul>
       </div>
    <?php require_once "inc/menu.inc.php"; ?>
    <h1>History</h1>
    <?php
    require_once "inc/dbconn.inc.php";
    $sql = "SELECT id, name, description FROM Product WHERE completed=1 or completed=0 ORDER BY updated DESC;";
    if($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) >= 1) {
            $results = mysqli_num_rows($result);
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li id='history'>". $row["name"]. " : " . $row["description"] . "<p>" . "</li>";
            }
            echo "</ul>";
        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    
    ?>
</div>
    </header>
  </body>
</html>
