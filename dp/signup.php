<?php
     
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['firstname'];  
    $lname = $_POST['lastname']; 
    $dateofbirth = $_POST['DateOfBirth']; 
    $sex = $_POST['sex'];

    $newUser = array(
        'username' => $username,
        'password' => $password,
        'fname' => $fname,
        'lname' => $lname,
        'dateofbirth' => $dateofbirth,
        'sex' => $sex,
    );

    $file = 'users.json';
    $users = json_decode(file_get_contents($file), true) ?? [];

    $users[] = $newUser;

    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

    header('Location: main.php');
    exit;
}
?>
