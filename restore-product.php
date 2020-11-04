<?php
session_start();
if (isset($_GET["id"])) {
    echo $_GET["id"];
}
require_once "inc/dbconn.inc.php";
$sql = "UPDATE Product SET completed=0, updated=now() WHERE id=?;";

$statement = mysqli_stmt_init($conn);
mysqli_stmt_prepare($statement, $sql);
mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_GET["id"]));
if (mysqli_stmt_execute($statement)==true) {
header("Location: index.php");
exit();
}
else { mysqli_error($conn);
}
mysqli_close($conn);
?>
