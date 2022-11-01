<?php

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $f = fopen('userdata.csv', 'a') or die("Could not open or create file!");

    $data = array(
        $fullname, $email, $date, $gender, $country
    );

    fputcsv($f, $data);

    fclose($f);
    
    // echo('<hr>');
	// echo('<pre>');
	print_r($data);
	// echo('</pre>');
?>
