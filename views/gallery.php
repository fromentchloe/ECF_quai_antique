

<div  class="container" id="gallery">
    <div class="row">
        <div class="text-center">
            <h4 class="title col-md-12 m-2 p-2">
               
                    Galerie 
                   
                
            </h4>
           
        </div>
        <hr>
        <?php
        require_once 'MySQL/connection_bdd.php';

        // Récupérer les informations des images depuis la base de données
        $sql = "SELECT * FROM images";
        $result = $conn->query($sql);

        $galleryItems = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $image = $row['image_data'];
                $caption = $row['caption'];
                $id = $row['id'];
                $galleryItems[] = array("id" => $id, "image" => $image, "caption" => $caption);
            }
        } else {
            echo "Aucune image trouvée.";
        }

        // Fermer le résultat de la requête
        $result->close();

        // Fermer la connexion à la base de données
    
        ?>

        <div class="row">
        <?php for ($i = 0; $i < 12; $i++) { ?>
    <div class="col-md-3">
        <div class="gallery-item right-to-left rounded">
            <?php if ($i < count($galleryItems)) { ?>
                <img src="<?php echo $galleryItems[$i]['image']; ?>" alt="<?php echo $galleryItems[$i]['caption']; ?>">
                <div class="caption m-2 text-center"><?php echo $galleryItems[$i]['caption']; ?></div>


            <?php } else { ?>
                <img src="#" alt="">
                <div class="caption text-center"></div>
            <?php } ?>
                    </div>
                    <?php if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] === '1') { ?>
                       
                        <form action="update_image.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="image_id" value="<?php echo isset($galleryItems[$i]['id']) ? $galleryItems[$i]['id'] : ''; ?>">
                            <label>Ajouter une légende</label>
                                <input type="text" name="new_caption" value="<?php echo isset($galleryItems[$i]['caption']) ? $galleryItems[$i]['caption'] : ''; ?>">
                            <label>Modifier l'image</label>
                                <input class="btn" type="file" name="new_image">
                            <input class="contact-link btn" type="submit" name="send" value="Modifier">
                        </form>
                        <form action="delete_image.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette image ?')">
                            <input type="hidden" name="image_id" value="<?php echo $galleryItems[$i]['id']; ?>">
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>

                    <?php } ?>
                </div>
            <?php } ?>
        </div>
       
    </div>
</div>

    </div>
</div>
<hr>
