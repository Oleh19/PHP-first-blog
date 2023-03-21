<?php
include("app/database/db.php");

if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass-second']);

    $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass,
    ];

    //   $id = insert('users', $post);
//   $last_row = selectOne('users', ['id' => $id]);
} else {
    echo 'GET';
}

//    $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);

