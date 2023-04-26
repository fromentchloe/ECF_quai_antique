<!DOCTYPE html>
<html>
<head>
    <title>Le Quai Antique</title>
    <meta charset="UTF-8">
    <meta name="description" content= "Découvrez le troisième restaurant de burger du Chef Michant à Chambéry ! Nous vous proposons une large sélection de burgers savoureux, préparés avec des ingrédients frais et de qualité. Notre équipe chaleureuse et accueillante sera heureuse de vous recevoir pour un déjeuner ou un dîner délicieux. Découvrez notre carte en ligne et réservez votre table dès maintenant !">
    <meta name="keywords" content="restaurant, restaurant savoyard, burger, chef">
    <meta name="author" content="Froment Chloe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<header><?php require 'views/header.php'; ?></header>
<main>
  <?php
   include 'views/dishes.html'; 
   ?>
</main>
<footer>
  <?php include "views/footer.html"; ?>
</footer>
</body>