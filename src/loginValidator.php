<?php
include 'config.php';
// getting data
if (isset($_POST)) {
    $email = $_POST['login_email'];
    $pswd = $_POST['login_pswd'];
}
// taking data from database
$stmt = "SELECT * from `user` where `email`='$email' and `password`='$pswd'";
$result = mysqli_query($conn, $stmt);
// matching result set
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-bordered-primary text-center'><thead><tr class='bg-info'><th>Id</th><th>Name</th><th>Email</th><th>Password</th></tr><tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td><td>$row[password]</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo false;
}
