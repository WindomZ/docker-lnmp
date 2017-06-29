<?php
// connection
$conn = mysqli_connect("mysql", "root", $_ENV["MYSQL_ROOT_PASSWORD"]);

// check error
if (mysqli_connect_errno()) {
    die("Error: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
}
// show successful result
echo "<h1>Connect to the MySQL server successfully!</h1>" . PHP_EOL;
mysqli_close($conn);

// Display complete server information via phpinfo()
phpinfo();
