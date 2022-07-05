<?php

require './connection.php';

$email = $_POST['email'];
$login = $_POST['login'];
$is_ability_fly = $_POST['is_ability_fly'];
$is_ability_hug = $_POST['is_ability_hug'];
$gender = $_POST['gender'];
$description = $_POST['description'];
$chosen_character = $_POST['chosen_character'];

$uploaddir = '../uploads/img/';
$fileName = hash('sha256', basename($_FILES['file_avatar']['name'])) . '.' . pathinfo($_FILES['file_avatar']['name'], PATHINFO_EXTENSION);
$uploadfile = $uploaddir . $fileName;
move_uploaded_file($_FILES['file_avatar']['tmp_name'], $uploadfile);

$stmt = $pdo->prepare("INSERT INTO `pokemones` SET `email` = :email, `login` = :login, `is_ability_fly` = :is_ability_fly, `is_ability_hug` = :is_ability_hug, `gender` = :gender, `description` = :description, `chosen_character` = :chosen_character, `avatar` = :avatar");
$stmt->execute([
    'email' => $email,
    'login' => $login,
    'is_ability_fly' => $is_ability_fly,
    'is_ability_hug' => $is_ability_hug,
    'gender' => $gender,
    'description' => $description,
    'chosen_character' => $chosen_character,
    'avatar' => $fileName,
]);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail('admin@email.ru', 'New pokemon is created!', 'Yuuuhy!', $headers);

header('location: ../success.php')

?>