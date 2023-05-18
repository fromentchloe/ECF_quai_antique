<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    require_once 'MySQL/connection_bdd.php';

    // Vérifier si l'ID de l'image à supprimer a été passé en tant que champ caché
    if (isset($_POST["image_id"])) {
        $imageId = $_POST["image_id"];

        // Requête SQL pour récupérer le chemin de l'image à supprimer
        $sql = "SELECT image_data FROM images WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $imageId);
        $stmt->execute();
        $stmt->bind_result($imageData);
        $stmt->fetch();
        $stmt->close();

        // Vérifier si l'image existe dans la base de données
        if (!empty($imageData)) {
            // Supprimer l'image du serveur
            unlink($imageData);

            // Requête SQL pour supprimer l'entrée de l'image de la base de données
            $sql = "DELETE FROM images WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $imageId);
            $stmt->execute();
            $stmt->close();
            header('location: index.php');
        } else {
            echo "L'image n'a pas été trouvée dans la base de données.";
            
        }
    } else {
        echo "ID d'image non spécifié.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
} else {
    header("Location: index.php");
}
$conn->close();
?>
