<?php
if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"])) {
    echo $_POST["name"].$_POST["description"].$_POST["price"];
}
require_once "inc/dbconn.inc.php";
$sql = "INSERT INTO Product(name, description, price) VALUES(?, ?, ?);";

$statement = mysqli_stmt_init($conn);
mysqli_stmt_prepare($statement, $sql);
mysqli_stmt_bind_param($statement, 'ssd', htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["description"]), $_POST["price"]);
if (mysqli_stmt_execute($statement)==true) {
header("Location: index.php");
exit();
}
else { mysqli_error($conn);
}
mysqli_close($conn);
?>
