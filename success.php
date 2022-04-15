<?php include_once 'include/constant.php'; ?>
<?php include_once 'include/header.php'; ?>
<?php include_once 'include/function.php'; 
session_start();
?>

            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
             <?php
// echo "Welcome back ".$_COOKIE['username']."";

echo "Welcome back ".$_SESSION['username']."";
?>

<a href="logout.php">Logout</a>


                    </div>
                </div>
            </section>
         

        </main>
        <!-- Footer-->
     <?php include_once 'include/footer.php'; ?>