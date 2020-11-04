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
           <li><a href = "contact.html">Contact us</a></li>
           <li><a href = "privacy-policy.html">Policy</a></li>
           <li><a href = "manager.php">Manager DB</a></li>
           <li><a href = "admin.php">Admin DB</a></li>
         </ul>
       </nav>
       <div class="contacts">
        <ul>

        </ul>
       </div>
       <h1>Log-in</h1>
       <form method='POST' action="login_ok.php" id='login-form' class='login-form'>
                                      <input type='text' placeholder='Login' class='input'
                                        name='login' maxlength="100" required><br>
                                     <input type='password' placeholder='Password' class='input'
                                       name='password' maxlength="100" required><br>
                                    <input type='submit' value='Sign in' class='button'>
                      </form>
      </div>
      </div>
    </header>
  </body>
</html>