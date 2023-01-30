<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>




<div class="container" style="margin-top: 100px">
    <p class="fw-light bg-warning text-black text-center py-4 rounded-3">Static Office</p>
    <div class="container ml-2">
    <div class="row ">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">TOTAL</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?=$data['total']?></span></h2>
                    <p class="m-b-0">Numbers of Total products</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">MAX</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span><?=$data['max']?></span></h2>
                    <p class="m-b-0">Max price of products</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">SUM</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span><?=$data['sum']?></span></h2>
                    <p class="m-b-0">Sum of all prices</p>
                </div>
            </div>
        </div>
        
	</div>
    </div>
</div>

<?php
include_once APPROOT . '/views/includes/footer.php';
?>