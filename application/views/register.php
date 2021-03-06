
    <header class="masthead">
    <div class="container">
        <div class="intro-text">
                <!-- CONTAINER -->
            <div class="container">
                <div class="row user-form">
                    <div class="col-lg-10 col-xl-9 mx-auto ">
                        <div class="card card-signin flex-row my-5 ">
                            <div class="card-img-left d-none d-md-flex">
                                <!-- Background image for card set in CSS! -->
                            </div>
                            <div class="card-body panel-form">
                                <h5 class="card-title text-center">Register</h5>
                                <form action="<?php echo base_url() . 'register/tambah_aksi'; ?>" method="post" class="form-signin">
                                <div class="form-label-group">
                                    <input type="text" name="username" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                                    <label for="inputUserame">Username</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email_user" id="inputEmail" class="form-control" placeholder="Email address" required>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password_user" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                                <a class="d-block text-center mt-2 " href="login">Sign In</a>
                                <!-- <hr class="my-4"> -->
                                <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
                                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <!-- END CONTAINER -->
            
        </div>
    </div>
    </header> 