<?php include_once 'include/constant.php'; ?>
<?php include_once 'include/header.php'; ?>

            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                       <form>
 <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="Full Name">
  </div>

   <div class="mb-3">
    <label for="nric" class="form-label">NRIC / Passport</label>
    <input type="text" class="form-control" id="name" aria-describedby="NRIC / Passport">
  </div>

  <div class="mb-3">
    <label for="yob" class="form-label">Year of birth</label>
<select class="form-select">
  <option selected>Open this select menu</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
</select>
  </div>



  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="vpassword" class="form-label">Verify Password</label>
    <input type="password" class="form-control" id="vpassword">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    </div>
                </div>
            </section>
         

        </main>
        <!-- Footer-->
     <?php include_once 'include/footer.php'; ?>