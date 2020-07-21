<?php

$host = "sql12.freemysqlhosting.net"; /* Host name */
$user = "sql12356142"; /* User */
$password = "JNJN6gx2pz"; /* Password */
$dbname = "sql12356142"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
