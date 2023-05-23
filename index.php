<!DOCTYPE html>
<html>
  <head>
    <title>Le Quai Antique</title>
    <meta charset="UTF-8">
    <meta name="description" content="Découvrez le troisième restaurant de burger du Chef Michant à Chambéry ! Nous vous proposons une large sélection de burgers savoureux, préparés avec des ingrédients frais et de qualité. Notre équipe chaleureuse et accueillante sera heureuse de vous recevoir pour un déjeuner ou un dîner délicieux. Découvrez notre carte en ligne et réservez votre table dès maintenant !">
    <meta name="keywords" content="restaurant, restaurant savoyard, burger, chef">
    <meta name="author" content="Froment Chloe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
   
  </head>
  <body>

      <header>
        <?php session_start();?>
        <?php require 'views/navbar.php'; ?>
        <?php require 'views/header.php'; ?>
      </header>
      <main>
        <article>
        <section>
            <?php require 'views/about.html'; ?>
          
          </section>
          <section>
            <?php require 'views/schedule.php'; ?>
          </section>
          <section>
            <?php require 'views/gallery.php'; ?>
            <?php include "views/expertise.html"; ?>
          </section>
        </article>
      </main>
      <footer>
        <?php include "views/footer.html"; ?>
       

      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
      
      <script src="js/script.js"></script>
  </body>
</html>
