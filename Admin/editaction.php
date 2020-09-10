<?php

require_once "../config.php";

    $id = trim($_POST["id"]);
    if(!empty(trim($_POST["username"]))){
      $username = trim($_POST["username"]);
      $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
      $stmt->bind_param("sss", $usernameb, $idb);
      $idb = $id;
      $usernameb = $username;
      $stmt->execute();
    };

    if(!empty(trim($_POST["first_name"]))){
      $imie = trim($_POST["first_name"]);
      $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
      $stmt->bind_param("sss", $imieb, $idb);
      $idb = $id;
      $imieb = $imie;
      $stmt->execute();
    };

    if(!empty(trim($_POST["last_name"]))){
      $nazwisko = trim($_POST["last_name"]);
      $stmt = $conn->prepare("UPDATE users SET surname = ? WHERE id = ?");
      $stmt->bind_param("sss", $nazwiskob, $idb);
      $idb = $id;
      $nazwiskob = $nazwisko;
      $stmt->execute();
    };

    if(!empty(trim($_POST["email"]))){
      $email = trim($_POST["email"]);
      $stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
      $stmt->bind_param("sss", $emailb, $idb);
      $idb = $id;
      $emailb = $email;
      $stmt->execute();
    };


    mysqli_close($conn);


    ?>
