<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    require "./connection_bdd.php";

   
    if (isset($_POST["image_id"])) {
        $imageId = $_POST["image_id"];

      
        $sql = "SELECT image_data FROM images WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $imageId);
        $stmt->execute();
        $stmt->bind_result($imageData);
        $stmt->fetch();
        $stmt->close();

       
        if (!empty($imageData)) {
           
            unlink($imageData);

          
            $sql = "DELETE FROM images WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $imageId);
            $stmt->execute();
            $stmt->close();
            header('location: ../index.php');
        } else {
            echo "L'image n'a pas été trouvée dans la base de données.";
            
        }
    } else {
        echo "ID d'image non spécifié.";
    }

    
    $conn->close();
} else {
    header("Location: ../index.php");
}
$conn->close();
?>
