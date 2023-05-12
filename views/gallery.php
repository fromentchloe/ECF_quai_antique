<div class="container-fluid" id="gallery">
    <h4 class="title m-5 p-5">Un avant goût ...</h4>
    <div class="row">
        <?php
        $galleryItems = array(
            array("image" => "./image/Salade savoyarde.png", "caption" => "Salade savoyarde"),
            array("image" => "./image/veloute_chataignes.png", "caption" => "Velouté chataignes"),
            array("image" => "./image/crozet_gratin.png", "caption" => "Gratin de crozet"),
            array("image" => "./image/bar.png", "caption" => "Notre Bar"),
            array("image" => "./image/verrine_tartiflette.png", "caption" => "Tartiflette en verrine"),
            array("image" => "./image/burger_savoyard.png", "caption" => "Burger savoyard"),
            array("image" => "./image/burger_du_chef.png", "caption" => "Burger du chef"),
            array("image" => "./image/burger_vegetarien.png", "caption" => "Burger vegetarien"),
            array("image" => "./image/burger_montagnard.png", "caption" => "Burger Montagnard"),
            array("image" => "./image/fondant.png", "caption" => "Fondant au chocolat"),
            array("image" => "./image/tarte_myrtilles.png", "caption" => "Tartes au myrtilles"),
            array("image" => "./image/creme_brulée.png", "caption" => "Crème brulée"),
            array("image" => "./image/croute_pommes.png", "caption" => "Croute aux pommes")
        );
        
        $smallItemCount = 12; // Number of small items
        $largeItemCount = 1;  // Number of large items
        
        foreach ($galleryItems as $index => $item) {
            if ($index < $smallItemCount) {
                $colClass = 'col-md-2';
            } else {
                $colClass = 'col-md-4 offset-md-4'; // Add offset to center the large image
            }
        ?>
        <div class="<?php echo $colClass; ?>">
            <div class="right-to-left gallery-item rounded">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['caption']; ?>">
                <div class="caption"><?php echo $item['caption']; ?></div>
                <?php if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] === '1') { ?>
                    <button class="edit-button" data-image="<?php echo $item['image']; ?>" data-caption="<?php echo $item['caption']; ?>">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                <?php } ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

       
      
     