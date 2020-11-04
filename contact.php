<?php
session_start();
?>
<!DOCTYPE html>

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
           <li class = "<?php echo $_SESSION['manager']=='true' ? 'show' : 'hidden';?>"><a href = "contact.php">Manager DB</a></li>
           <li class = "<?php echo $_SESSION['administrator']=='true' ? 'show' : 'hidden';?>"><a href = "contact.php">Admin DB</a></li> 
         </ul>
       </nav>
       <div class="contacts">
        <ul>
        </ul>
       </div>
       <h1>Upload logo</h1> 
       <form action="upload_logo.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
     </div>
    </header>
  </body>
</html>
