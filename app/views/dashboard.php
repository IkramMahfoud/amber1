<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<div class="container" style="margin-bottom :70px;">
    <div style="margin-top: 100px;">
        <p class="fw-light bg-warning text-black text-center py-3 rounded-3">BackOffice</p>

        <div style="margin-top: 30px;">
            <div class="addSearch">
                <a type="button" class="btn btn-primary" style="width:94px;height:34px;font-size:13px;" href="<?= URLROOT . 'itemController/insert' ?>">ADD</a>
                <form style="display: flex;gap: 10px;" action="<?= URLROOT ?>itemController/search" method="post">
                    <input required type="text" style="border-radius: 8px;border: 1px solid #ffc107;" name="libelle">
                    <input type="submit" class="btn btn-warning" style="width:94px;height:34px;font-size:13px;" value="Search">
                </form>
            </div>
            <div style="margin-top: 20px; " class="text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PRICE <span class="Decore">[</span> <span class="BY"><a href="<?= URLROOT ?>itemController/orderProduct/item_price/ASC">ASC</a></span> <span class="Decore">|</span> <span class="BY"><a href="<?= URLROOT ?>itemController/orderProduct/item_price/DESC">DESC</a></span> <span class="Decore">]</span></th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">DATE <span class="Decore">[</span> <span class="BY"><a href="<?= URLROOT ?>itemController/orderProduct/item_date/ASC">ASC</a></span> <span class="Decore">|</span> <span class="BY"><a href="<?= URLROOT ?>itemController/orderProduct/item_date/DESC">DESC</a></span> <span class="Decore">]</span></th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['galleryrow'] as $items) : ?>
                            <tr>
                                <th scope="row"><?= $items->id ?></th>
                                <td><?= $items->item_name ?></td>
                                <td><?= $items->item_price ?> DH</td>
                                <td><?= $items->item_category ?></td>
                                <td><?= $items->item_date ?></td>
                                <td>
                                    <!-- DELETE AND EDITE BY ID -->
                                    <a href="<?= URLROOT . 'itemController/edititem/' . $items->id ?>" type="btn_submit" class="btn btn-primary" style="width:94px;height:34px;font-size:13px;">
                                        edite
                                    </a>
                                    <a href="<?= URLROOT . 'itemController/delete/' . $items->id ?>" name="dlteBtn" type="submit" class="btn btn-danger" style="width:94px;height:34px;font-size:13px;">
                                        delete
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
            </div>
            </table>

        </div>
    </div>
</div>



<?php
include_once APPROOT . '/views/includes/footer.php';
?>