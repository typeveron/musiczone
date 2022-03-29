<?php

if(isset($_POST['loginButton'])) {
    //login button was pressed
    $con =  mysqli_connect("localhost:3306", "root", "", "musiczonedb");
    
    $username = mysqli_real_escape_string($con, $_POST["loginUsername"]);
    $password = mysqli_real_escape_string($con, $_POST["loginPassword"]);

    $result = $account->login($username, $password);

    if ($result == true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}
?>

