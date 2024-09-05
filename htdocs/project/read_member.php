<?php
include 'db_connect.php';

$id = $_GET['id']; // e.g., http://localhost/project/CRUD/read_member.php?id=1
$sql = "SELECT * FROM members WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$member = $stmt->fetch();

if ($member) {
    echo "Name: " . $member['firstname'] . " " . $member['lastname'] . "<br>";
    echo "Birthday: " . $member['birthday'] . "<br>";
    echo "Phone: " . $member['phone'] . "<br>";
    echo "Email: " . $member['email'];
} else {
    echo "Member not found.";
}
?>
