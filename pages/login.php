<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="?page=login-submit" method="post" >
                            <!--<h4 class="text-center fw-bolder">Student Form</h4>
                            <div class="text-center">
                                <span class="text-success fw-bolder"><?php /*echo isset($message) ? $message : ''*/?></span>
                            </div>-->
                            <h3 class="text-center fw-bolder">Login</h3>
                            <hr>
                            <div class="row mt-2">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Email" name="email"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Password" name="password"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Log In"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>
