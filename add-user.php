<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    echo $_POST["username"].$_POST["password"];
}
    //echo $_POST["name"]
require_once "inc/dbconn.inc.php";
$sql = "INSERT INTO User(username, password) VALUES(?, ?);";

$statement = mysqli_stmt_init($conn);
mysqli_stmt_prepare($statement, $sql);
mysqli_stmt_bind_param($statement, 'ss', htmlspecialchars($_POST["username"]), htmlspecialchars($_POST["password"]) );
if (mysqli_stmt_execute($statement)==true) {
header("Location: index2.php");
exit();
}
else { mysqli_error($conn);
}
mysqli_close($conn);
?>
