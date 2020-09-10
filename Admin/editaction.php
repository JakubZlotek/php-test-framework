<?php

require_once "../config.php";

    $id = trim($_POST["id"]);
    if(!empty(trim($_POST["username"]))){
      $username = trim($_POST["username"]);
      $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
      $stmt->bind_param("ss", $username, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["first_name"]))){
      $imie = trim($_POST["first_name"]);
      $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
      $stmt->bind_param("ss", $imie, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["last_name"]))){
      $nazwisko = trim($_POST["last_name"]);
      $stmt = $conn->prepare("UPDATE users SET surname = ? WHERE id = ?");
      $stmt->bind_param("ss", $nazwisko, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["email"]))){
      $email = trim($_POST["email"]);
      $stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
      $stmt->bind_param("ss", $email, $id);
      $stmt->execute();
    };


    mysqli_close($conn);


    ?>
