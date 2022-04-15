<?php  
include_once 'include/constant.php';
include_once 'include/header.php';
session_start();
if (isset($_POST['Submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

if ($username=='fareez' && $password=='12345') {
    $msg = " <div class='alert alert-primary' role='alert'>Login Success</div>";

// Use Cookie
    //setcookie("username", $username, time()+30*24*60*60);

// Use Session
    

    // Storing session data
$_SESSION["username"] = $username;
$_SESSION["full_name"] = "Muhammad Fareez bin Borhanudin";


 header( 'Location: success.php' );
} else {
    $msg = "<div class='alert alert-danger' role='alert'>Login Failed</div> ";
}

}

if (isset($_COOKIE['username'])) {
    header( 'Location: success.php' );
} elseif (isset($_SESSION['username'])) {
    header( 'Location: success.php' );
} 

?>
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Welcome to <?php echo INSTITUTION_NAME;?> Online Application</h1>
                                <p class="lead fw-normal text-white-50 mb-4"><?=INSTITUTION_NAME?> now uses a new online application system that allows prospective students to apply to study at the institution.<br><br>
To apply online, students must use a computer with internet connectivity and have a valid email address.<br>
Applications must be completed online as the University will not be accepting manual applications.

                                </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
<div class="card" style="background-color: #efefef;">
  <h5 class="card-header">Login</h5>
  <div class="card-body">
    <?php if (isset($msg)) { ?>
  <?php echo "$msg"; ?>
<?php 
}
 ?>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="process">
        Username
        <input type="text" class="form-control" name="username" id="username" placeholder="e.g. john" required="" autofocus>
        Password
        <input type="password" autocomplete="off" class="form-control" name="password" id="password" placeholder="Password" required="">
          <div class="form-group">
              <div class="form-label-group">
                             </div>
            </div> <br>
              <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Submit" type="Submit">Login</button>
              <br>
           
        </form>

      <p></p>

  </div>
</div>

                    </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Featured title</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Featured title</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Featured title</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Featured title</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        
        </main>
      <?php include_once 'include/footer.php'; ?>