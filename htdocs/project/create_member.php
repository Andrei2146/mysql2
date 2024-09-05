<?php
include 'db_connect.php'; // Assuming db_connect.php has your PDO connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO members (firstname, lastname, birthday, phone, email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstname, $lastname, $birthday, $phone, $email]);

    echo "Member created successfully!";
}
?>
