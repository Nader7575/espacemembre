<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- //dds -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./app.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="deconnexion.php">
        <button>Se déconnecter</button>
    </a>
    <!-- //dds -->
    <h1>Sport</h1>
    <div class="cards"></div>
</body>
</html>