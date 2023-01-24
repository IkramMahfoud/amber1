<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>

<div class="container">
  <div style="margin-top: 100px;">
    <p class="fw-light bg-warning text-black text-center py-3 rounded-3">Edit Item</p>
  <div style="margin-left:25%; margin-right:25%;">
    <form class="mt-5" action="<?php echo URLROOT . 'itemController/edit/'. $data[0]->id; ?>" enctype="multipart/form-data" method="POST">

      <div class="input-group mb-3">
        <input name="name" type="text" value="<?= $data[0]->item_name;?>" class="form-control" placeholder="item name" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2" >Name</span>
      </div>

      <div class="input-group mb-3">
        <input name="price" type="text" value="<?= $data[0]->item_price;?>" class="form-control" placeholder="item price" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2" >Price</span>
      </div>

      <div class="input-group mb-3">
        <input name="category" type="text" value="<?= $data[0]->item_category;?>" class="form-control" placeholder="item category" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2" >Category</span>
      </div>

      <div class="input-group mb-3">
        <input name="image" type="file" class="form-control" id="inputGroupFile" required>
        <label class="input-group-text" for="inputGroupFile">Image</label>
      </div>

      <div>
        <input type="submit" class="btn btn-primary" style="width: 94px;height: 34px;font-size: 13px;" value="submit">

        <a href="<?= URLROOT.'home/dashboard'?>" class="btn btn-danger" style="width: 94px;height: 34px;font-size: 13px;">
          Cancel
        </a>
      </div>
      </div>
      
    </form>
  </div>
</div>


<?php
include_once APPROOT . '/views/includes/footer.php';
?>