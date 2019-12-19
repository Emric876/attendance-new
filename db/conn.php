<?php 

    //Development connection
   $host = 'localhost';
   $db = 'attendance_db';
   $user = 'root';
   $pass = '';
   $charset = 'utf8mb4';

   //Remote database connection
    // $host = 'remotemysql.com';
    // $db = 'mfaFTZ9A1q';
    // $user = 'mfaFTZ9A1q';
    // $pass = 'm34OIV188z';
    // $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
   
?>