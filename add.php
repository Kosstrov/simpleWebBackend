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
    <h1>Add a new product</h1>
    <form action="add-product.php" method="POST">
    <label for="name">Product name</label><br>
    <input id="name" type="text" name="name" placeholder="Enter the product name" minlength="3" size="100"  required/><br>
    
    <label for="description">Description</label><br>
    <input id="description" type="text" name="description" size="100"/><br>
    
    <label for="price">Price</label><br>
    <input id="price" type="number" name="price" min="0"/><br>
    
    <label for="photo">Photo</label><br>
    <input id="photo" type="file" name="photo"/><br>
    <input id="button" type="submit" value="Add Product" />
    </div>
    </header>
  </body>
</html>
