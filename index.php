<?php
require './functions/connection.php';

$perPage = isset($_GET['perPage']) ? $_GET['perPage'] : 5;

$stmt = $pdo->query('SELECT count(*) FROM pokemones');
$total_results = $stmt->fetchColumn();
$total_pages = ceil($total_results / $perPage);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$starting_limit = ($page - 1) * $perPage;

$query = "SELECT * FROM pokemones ORDER BY id DESC LIMIT $starting_limit, $perPage";

$pokemones = $pdo->query($query)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List Pokemone</title>
    <link href="assets/img/favicon.png" rel="icon">
</head>

<body>
    <div class="container">
        <?php require './navbar.php'; ?>
        <?php foreach ($pokemones as $key => $pokemon) : ?>
        <h4>ID: <?= $pokemon['id'] ?></h4>
        <p>E-mail: <?= $pokemon['email'] ?></p>
        <p>Login: <?= $pokemon['login'] ?></p>
        <p>Fly ability: <?= $pokemon['is_ability_fly'] ?></p>
        <p>Hug ability: <?= $pokemon['is_ability_hug'] ?></p>
        <p>Gender: <?= $pokemon['gender'] ?></p>
        <p>Character: <?= $pokemon['chosen_character'] ?></p>
        <?php if (@getimagesize('./uploads/img/'. $pokemon['avatar'])) : ?>
        <img src=" <?= './uploads/img/'. $pokemon['avatar'] ?>" alt="..." class="img-thumbnail" width="10%">
        <?php endif; ?>
        <hr>
        <?php endforeach; ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
                <li class="page-item">
                    <a class="page-link" href="<?= '?page=' . $page ?>">
                        <?= $page ?>
                    </a>
                </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</body>

</html>