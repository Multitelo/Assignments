<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    $f = fopen('../storage/users.csv', 'a') or die("Could not open or create file!");
    
    $data = array(
        $username, $email, $password
    );
    
    fputcsv($f, $data);

    fclose($f);
    
    echo "OKAY";
}
echo "<h1>User Successfully registered</h1>";



