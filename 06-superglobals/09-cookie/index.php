<?php

setcookie("username", "John Doe", time() + 3600, "/");
setcookie("age", "30", time() + 3600, "/");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="page.php">Go to page.php</a></p>
</body>

</html>