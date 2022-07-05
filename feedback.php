<?php

require './functions/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .container {
        margin-bottom: 20px;
    }
    </style>

    <link href="assets/img/favicon.png" rel="icon">

    <title>List Pokemon</title>
</head>

<body>
    <div class="container">
        <?php require './navbar.php' ?>

        <form enctype="multipart/form-data" action="./functions/feedback_form.php" method="post" class="row g-3">
            <!-- email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <!-- text -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="login" class="form-control" placeholder="Pokemon Login"
                    aria-label="PokemonName" aria-describedby="basic-addon1" required>
            </div>

            <!-- checkbox  -->
            <div class="form-check">
                <input class="form-check-input" name="is_ability_fly" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Ability to fly
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="is_ability_hug" type="checkbox" value="1" id="flexCheckChecked"
                    checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Ability to hug
                </label>
            </div>

            <!-- file -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Download pokemon's avatar</label>
                <input class="form-control" type="file" name="file_avatar" value="1" id="formFile" accept=".jpg,.jpeg">
            </div>

            <!-- radio -->
            <label for="form-check" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="gender" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Girl
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="2" type="radio" name="gender" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No girl
                </label>
            </div>

            <!-- textarea -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Describe the new Pokémon</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <!-- select -->
            <select class="form-select" name="chosen_character" aria-label="Select character">
                <option selected value="1">Good</option>
                <option value="2">Gentle</option>
                <option value="3">Harmful</option>
            </select>

            <!-- button -->
            <button class="btn btn-primary" type="submit">Register pokemon</button>
            <!-- reset -->
            <input class="btn btn-primary" type="reset" value="Reset">

        </form>
    </div>
</body>

</html>