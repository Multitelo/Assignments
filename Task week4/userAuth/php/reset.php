<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = $username .",". $email .",". $password;
    $lines = file("../storage/users.csv");
    $c = count($lines);
    $i = 0;

    while($i<$c){
        $arraye = explode(",", $lines[$i]);
        if($arraye[0] == $username) { $lines[$i] = $new_line; };
        $new_data = $new_data . $lines[$i] . "\n";
        $i ++;
    }

    // resetPassword($email, $password);

// function resetPassword($email, $password){
    $file_handle = fopen("../storage/users.csv", 'w');
    fwrite($file_handle, $new_data);
    fclose($file_handle);



    
echo "HANDLE THIS PAGE";

}
// echo "HANDLE THIS PAGE";


