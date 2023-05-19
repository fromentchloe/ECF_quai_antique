<?php
require_once 'MySQL/connection_bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image_id = $_POST['image_id'];
    $new_caption = $_POST['new_caption'];
    $new_image_path = $_FILES['new_image']['tmp_name'];
    $new_image_name = $_FILES['new_image']['name'];

    // Vérification des erreurs de téléchargement du fichier
    if ($_FILES['new_image']['error'] !== UPLOAD_ERR_OK) {
        echo "Erreur lors du téléchargement de l'image : " . $_FILES['new_image']['error'];
        exit();
    }

    if (empty($image_id)) {
        // Ajouter une nouvelle image
        $destination = './image/' . $new_image_name;
        if (!move_uploaded_file($new_image_path, $destination)) {
            echo "Erreur lors de la sauvegarde de l'image.";
            exit();
        }

        $escapedImagePath = $conn->real_escape_string($destination);
        $escapedCaption = $conn->real_escape_string($new_caption);
        $escapedImageName = $conn->real_escape_string($new_image_name);
        $escapedImageID = $conn->real_escape_string($image_id);
        $sql = "INSERT INTO images (image_data, caption, image_name) VALUES ('$escapedImagePath', '$escapedCaption', '$escapedImageName')";

        if ($conn->query($sql) === TRUE) {
            // Insertion réussie
            header('location: index.php');
        } else {
            // Erreur lors de l'insertion
            echo "Erreur lors de l'ajout de l'image en base de données : " . $conn->error;
        }
    } else {
        // Mettre à jour une image existante
        $destination = './image/' . $new_image_name;
        if (!move_uploaded_file($new_image_path, $destination)) {
            echo "Erreur lors de la sauvegarde de l'image.";
            exit();
        }

        $sql = "UPDATE images SET image_data = '$escapedImagePath', caption = '$escapedCaption', image_name = '$escapedImageName' WHERE id = '$escapedImageID'";

        if ($conn->query($sql) === TRUE) {
            // Mise à jour réussie
            header('location: index.php');
        } else {
            // Erreur lors de la mise à jour
            echo "Erreur lors de la mise à jour de l'image en base de données : " . $conn->error;
        }
    }

    // Fermez la connexion à la base de données
    $conn->close();
}
?>
