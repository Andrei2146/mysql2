<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "UPDATE members SET firstname = ?, lastname = ?, birthday = ?, phone = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstname, $lastname, $birthday, $phone, $email, $id]);

    echo "Member updated successfully!";
}
?>
