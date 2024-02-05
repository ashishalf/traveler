<?php
include 'admin/includes/config.php';
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {

        $checkuser = "SELECT * FROM users WHERE email=:email";
        $stmt = $dbh->prepare($checkuser);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:name, :email, :password)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            echo "<script>
                alert('Registration Successful 😊');
                window.location.href='sign-in.php';
                </script>";
        } else {
            echo "<script>
                alert('This $email Email Already Exists. Please Sign up with a Different Email 😁');
                window.location.href='sign-in.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Check Your Password 😒');
                window.location.href='sign-in.php';
                </script>";
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkuser = "SELECT * FROM users WHERE email=:email AND password=:password";

    $stmt = $dbh->prepare($checkuser);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['status'] === 'active') {
        if ($row['role'] === 'admin') {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header("location: ./admin/dashboard.php");
        } elseif ($row['role'] === 'user') {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header("location: index.php");
        }
    } else {
        echo "<script>
            alert('Check Your Password 😢😢😢');
            window.location.href='sign-in.php';
            </script>";
    }
} else {
    echo "<script>
    alert('User Not Found 😢😢😢');
    window.location.href='sign-in.php';
    </script>";
}