<?php include_once 'include/constant.php'; ?>
<?php include_once 'include/header.php'; ?>
<?php include_once 'include/function.php'; ?>

            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                       <form action="check_register.php" method="post">
 <div class="mb-3">
    <label for="name" class="form-label">Name *</label>
    <input type="text" class="form-control" name="name" aria-describedby="Full Name" required>
  </div>

   <div class="mb-3">
    <label for="nric" class="form-label">NRIC / Passport *</label>
    <input type="text" class="form-control" name="nric" aria-describedby="NRIC / Passport" required>
  </div>

  <div class="mb-3">
    <label for="state" class="form-label">State</label>
<select class="form-select" name="state">
  <option selected>Open this select menu</option>
<?php 
  foreach($kod_negeri as $row) {
    $ktrgn_negeri =  $row['name'];
    $kod_negeri =  $row['id'];
 ?>
  <option value="<?php echo $kod_negeri;?>"><?php echo $ktrgn_negeri;?></option>
 <?php } ?>
</select>
  </div>



  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="vpassword" class="form-label">Verify Password</label>
    <input type="password" class="form-control" name="vpassword">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    </div>
                </div>
            </section>
         

        </main>
        <!-- Footer-->
     <?php include_once 'include/footer.php'; ?>