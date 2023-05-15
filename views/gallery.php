<div class="container-fluid" id="gallery">
    <div class="row">
    <div class="text-center">
    <h4 class="title m-4 p-4 col-md-12">
        <div class="row d-flex justify-content-between align-items-center">   
            <div class="col-md-3">
                <div class="gallery-item right-to-left rounded">
                    <img src="./image/bar.png" alt="Notre bar">
                    <div style='font-size: 40%' class="caption mt-2">Notre Bar</div>
                </div>
            </div>
            Avant goût
            <div class="col-md-3">
                <div class="gallery-item left-to-right rounded">
                    <img src="./image/exterieur.png" alt="Vue de l'extérieur">
                    <div style='font-size: 40%' class="caption mt-2">Vue de l'extérieur</div>
                </div>
            </div>
        </div>
    </h4>
</div>

        <?php
        $galleryItems = array(
            array("image" => "./image/Salade savoyarde.png", "caption" => "Salade savoyarde"),
            array("image" => "./image/veloute_chataignes.png", "caption" => "Velouté châtaignes"),
            array("image" => "./image/crozet_gratin.png", "caption" => "Gratin de crozet"),
            array("image" => "./image/verrine_tartiflette.png", "caption" => "Tartiflette en verrine"),
            array("image" => "./image/burger_savoyard.png", "caption" => "Burger savoyard"),
            array("image" => "./image/burger_du_chef.png", "caption" => "Burger du chef"),
            array("image" => "./image/burger_vegetarien.png", "caption" => "Burger végétarien"),
            array("image" => "./image/burger_montagnard.png", "caption" => "Burger Montagnard"),
            array("image" => "./image/fondant.png", "caption" => "Fondant au chocolat"),
            array("image" => "./image/tarte_myrtilles.png", "caption" => "Tartes aux myrtilles"),
            array("image" => "./image/creme_brulée.png", "caption" => "Crème brûlée"),
            array("image" => "./image/croute_pommes.png", "caption" => "Croûte aux pommes")
        );
        
        foreach ($galleryItems as $index => $item) {
            $colClass = 'col-md-3';
        
        
        ?>
        
        <div class="<?php echo $colClass; ?> mb-4">
    <div class="right-to-left gallery-item rounded text-center">
        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['caption']; ?>" class="img-fluid">
        <div class="caption mt-2"><?php echo $item['caption']; ?></div>
    </div>
    <?php if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] === '1') { ?>
    <div class="text-center mt-2">
        <button class="edit-button btn" data-image="<?php echo $item['image']; ?>" data-caption="<?php echo $item['caption']; ?>">
            <i class="bi bi-pencil-square">Modifier</i>
        </button>
    </div>
<?php } ?>

</div>
        <?php
        }
        ?>
    </div>
</div>
