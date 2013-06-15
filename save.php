<?php

if (isset($_POST['form_type'])) {

    if($_POST['form_type'] == "register") {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $password = $_POST['pass'];
        $address = $_POST['address'];

        echo "Name" . $name;
        echo "<br/>";
        echo "User name:" . $username;
        echo "<br/>";
        echo "Password:" . $password;
        echo "<br/>";
        echo "Address" . $address;
    }
    
    if($_POST['form_type']=="login"){
        $username = trim($_POST['username']);
        $password = $_POST['pass'];
        echo "<br/>";
        echo "User name:" . $username;
        echo "<br/>";
        echo "Password:" . $password;
    }
}
?>
