<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>

<div class="container mb-5">
  <div style="margin-top: 100px;">
    <p class="fw-light bg-warning text-black text-center py-3 rounded-3">Add Item</p>

    <div style="margin-left:25%; margin-right:25%;">
      <form class="mt-5" action="insert" enctype="multipart/form-data" method="POST">

        <div id="AllForms">

        
          <!-- heree -->


        </div>




        <div>
          <input type="submit" class="btn btn-primary" style="width: 94px;height: 34px;font-size: 13px;" value="submit">
        </div>
      </form>

      <button class="btn btn-success" id="addListProduct" style="width: 94px;height: 34px;font-size: 13px;">
        Add New
      </button>
      <a href="<?= URLROOT . 'home/dashboard' ?>" class="btn btn-danger" style="width: 94px;height: 34px;font-size: 13px;">
        Cancel
      </a>
    </div>
  </div>
</div>


<?php
include_once APPROOT . '/views/includes/footer.php';
?>