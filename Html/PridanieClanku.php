<!DOCTYPE html>
<?php
require  "AUlozisko.php";
require "CSVUlozisko.php";
require "DBUlozisko.php";
$CsvUlozisko = new CSVUlozisko();
$DbUlozisko = new DBUlozisko();
if (isset($_POST['title'])) {
    $CsvUlozisko->vytvorPrispevok($_POST['title'], $_POST['text'], $_POST['jedla']);
}

if(isset($_POST['title'])){
    $DbUlozisko->vytvorPrispevok($_POST['title'], $_POST['text'], $_POST['jedla']);
}

?>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <title>Jedovate huby</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/Css.css">
    <style>
        body {
            background-repeat: no-repeat;
            background-image: url("img/Huby.jpg");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="Uvod.php"><img src="img/logo.png" alt="Uvod"></a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Uvod.php">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Jedle.php">Jedle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Jedovate.php">Jedovate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="PridanieClanku.php">Pridaj článok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Editacia.php">Editovať</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Galeria
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Jedle_img.php">Jedle huby</a>
                    <a class="dropdown-item" href="Jedovate_img.php">Jedovate huby</a>
                </div>
            </li>
        </ul>

    </div>
</nav>

<form method="post">
    <label>Titulok</label><br>
    <label>
        <input type="text" name="title" required>
    </label><br>
    <label>Text článku</label><br>
    <label>
        <input type="text" name="text" required>
    </label><br>

    <label for="jedla">Vyber druh huby:</label><br>
    <select id="jedla" name="jedla">
        <option value="jedla">Jedlé</option>
        <option value="jedovata">Jedovaté</option>
    </select><br>
    <input type="submit" value="Odoslať"><br>

</form>
<footer>
    Stefan Culik 5YZI36
</footer>
</body>
</html>