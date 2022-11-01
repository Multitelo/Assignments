<?php
if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!strlen($email) || !strlen($password)) {
        die('Please enter a username and password');
    }
    
    loginUser($email, $password);

}

function loginUser($email, $password){
    $success = false;
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $f = fopen("../storage/users.csv", "r");
    while ($data = fgetcsv($f, 0, ',')) {
        if ($data[1] == $email && $data[2] == $password) {
            $success = true;
            break;
        }
    }
    
    fclose($f);
    
    if ($success) {
        header("Location: ../dashboard.php");
    }else{
        header("Location: ../forms/login.html");
    }
}

// echo ($data);

