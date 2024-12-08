<?php

require_once('includes/connect.php');

///gather the form content
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['comments'];

$errors = [];

//validate and clean these values

$name = trim($name);
$company_name = trim($company_name);
$email = trim($email);
$number = trim($number);
$msg = trim($msg);

if(empty($name)) {
    $errors['name'] = 'Name cant be empty';
}

// if(empty($company_name)) {
//     $errors['company_name'] = 'Company_name cant be empty';
// }

if(empty($number)) {
    $errors['number'] = 'Number cant be empty';
}

if(empty($msg)) {
    $errors['comments'] = 'Comment field cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contact (name, company_name, email, number, message) VALUES ('$name', '$company_name', '$email', '$number', '$msg')";

    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'sashoyemaxwell@gmail.com';
$subject = 'Message from your Portfolio site!';

$message = "You have received a new contact form submission:\n";
$message .= "Name: ".$name." \n";
$message .= "Email: ".$email."\n";
//build out rest of message body...

mail($to,$subject,$message);

header('Location: index.php');

}else{
    for($i=0; $i < count($errors); $i++) {
        echo $errors[$i].'<br>';
    }
}

}

?> 
