<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'users.json';
    $users = json_decode(file_get_contents($file), true);

    $loggedIn = false;

    foreach ($users as $user) {
        if (trim(strtolower($user['username'])) == trim(strtolower($username)) && trim($user['password']) == trim($password)) {
            $loggedIn = true;
            $_SESSION['username'] = $username;  
            echo json_encode(['success' => true,'redirect' => 'main.php']);
            exit;
        }
    }

    echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
    exit;
}
?>
