<!DOCTYPE html>
<?php
require "AUlozisko.php";
require "DBUlozisko.php";
require "CSVUlozisko.php";

$ulozisko = new DBUlozisko();
$clanky = $ulozisko->getVsetko();


if (isset($_GET['delete'])) {
    $ulozisko->vymazPrispevok($_GET['delete']);
    header("Location:?c=Editacia.php");
}

if (isset($_GET['edit'])) {
    $ulozisko->upravClanok($_GET['edit']);
}



?>
<html lang="sk">
<head>
    <meta charset="windows-1250">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <title>Editovať</title>
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
                <a class="nav-link" href="Jedle.php">Jedlé</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Jedovate.php">Jedovaté</a>
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
                    Galéria
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Jedle_img.php">Jedlé huby</a>
                    <a class="dropdown-item" href="Jedovate_img.php">Jedovaté huby</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Titulok</label><br>
                    <input name="title" type="text" class="form-control" placeholder="Titul" required>
                </div>
                <div class="form-group">
                    <label>Text článku</label><br>
                    <input name="text" type="text" class="form-control" placeholder="Text" required>
                </div>
                <label class="jedla" for="jedla">Vyber druh huby:</label><br>
                <select id="jedla" name="jedla">
                    <option value="jedla">Jedlé</option>
                    <option value="jedovata">Jedovaté</option>
                </select><br>
                <br>
                <input type="submit" value="Odoslať">
            </form>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12">
            <?php foreach ($clanky as $clanok) { ?>
                <header><?= $clanok->getTitul() ?></header>
                <p><?= $clanok->getText() ?></p>
                <a href="Editacia.php?edit=<?php echo $clanok->getId() ?>" class="btn btn-primary btn-small">Edit</a>
                <a href="Editacia.php?delete=<?php echo $clanok->getId() ?>"
                   class="btn btn-primary btn-danger btn-small">Delete</a>

            <?php } ?>

            <hr>
        </div>
    </div>
</div>


<footer>
    Stefan Culik 5YZI36
</footer>
</body>
</html>