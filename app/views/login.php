<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<!-- user and admin login -->

<form class="container" method="POST" action="<?=URLROOT?>userController/login">
  <div class="row align-items-start border border-primary p-2 border-opacity-25 w-50 mx-auto rounded-3 m-5">
    <div class="modal-header ">
      <h5 class="modal-title  mb-4 mx-auto"><b>Login</b></h5>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" required="required">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control w-50" id="exampleInputPassword1" name="Password" required="required">
    </div>
    <button type="submit" class="btn btn-primary" style="width: 200px;">Submit</button>
  </div>
</form>



<!-- 
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <div class="forms-inputs mb-4"> <span>Email or username</span> <input autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                    <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                        <div class="invalid-feedback">Password must be 8 character!</div>
                    </div>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Login</button> </div>
                </div>
                <div class="success-data" v-else>
                    <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">You have been logged in <br> Successfully</span> </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
include_once APPROOT . '/views/includes/footer.php';
?>






