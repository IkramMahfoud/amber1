<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>

<div class="container">
    <div style="display: flex;flex-wrap: wrap;justify-content: space-evenly;column-gap: 10px !important; margin-bottom: 40px;">
        <?php foreach ($data['galleryrow'] as $product) : ?>

            <div class=" mt-5 mb-3">
                <figure class="card card-product-grid card-lg" style="width: 255px;">
                    <a href="#" class="img-wrap" data-abc="true" style="padding: 0px !important;">
                        <img style="" src="<?= URLROOT . 'img/' . $product->item_img ?>" alt="">
                    </a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-9 col-xs-9">
                                <a href="#" class="title" data-abc="true"><?= $product->item_name ?></a>
                                <span class="rated">Category: <?= $product->item_category ?></span>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap-payment">
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-9 col-xs-9">
                                    <a href="#" class="title" data-abc="true"><?= $product->item_price ?>DH</a>
                                    <span class="rated">Taman l'pharmacie</span>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>

        <?php endforeach ?>
    </div>
</div>




<?php include_once APPROOT . '/views/includes/footer.php'; ?>