<?php

require_once "../config.php";

    $id = trim($_POST["id"]);
    if(!empty(trim($_POST["username"]))){
      $username = trim($_POST["username"]);
      $stmt = $conn->prepare("UPDATE users SET username = :usrn WHERE id = :id");
      $stmt->bind_param(":id", $idb);
      $idb = $id;
      $stmt->bind_param(":usrn", $usernameb);
      $usernameb = $username;
      $stmt->execute();
    };

    if(!empty(trim($_POST["first_name"]))){
      $imie = trim($_POST["first_name"]);
      $stmt = $conn->prepare("UPDATE users SET name = :name WHERE id = :id");
      $stmt->bind_param(":id", $idb);
      $idb = $id;
      $stmt->bind_param(":name", $nameb);
      $nameb = $imie;
      $stmt->execute();
    };

    if(!empty(trim($_POST["last_name"]))){
      $nazwisko = trim($_POST["last_name"]);
      $stmt = $conn->prepare("UPDATE users SET surname = :surname WHERE id = :id");
      $stmt->bind_param(":id", $idb);
      $idb = $id;
      $stmt->bind_param(":surname", $nazwiskob);
      $nazwiskob = $nazwisko;
      $stmt->execute();
    };

    if(!empty(trim($_POST["email"]))){
      $email = trim($_POST["email"]);
      $stmt = $conn->prepare("UPDATE users SET email = :email WHERE id = :id");
      $stmt->bind_param(":id", $idb);
      $idb = $id;
      $stmt->bind_param(":email", $emailb);
      $emailb = $email;
      $stmt->execute();
    };


    mysqli_close($conn);


    ?>
