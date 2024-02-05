<?php
include 'includes/config.php';
// User delete
    $id = $_GET['id'];
    $dltqury = "DELETE FROM `users` WHERE id=:id";
    $stmt = $dbh->prepare($dltqury);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt == TRUE) {
        echo "<script>
                    alert('User Deleted Successfully 👍👍');
                    window.location.href='manage-users.php';
                    </script>";
    }
    ?>
