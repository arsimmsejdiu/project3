<?php
require("./header.php");
?>
<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                <span class="font-ubuntu text-black-50">I already have an account <a href="../login/login.php">Login</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera.svg" alt="camera">
                    </div>
                    <img src="./assets//worker.png" style="width: 200px; height: 200px;" class="img rounded-circle" alt="worker">
                    <small class="form-text text-black-50">Choose image</small>
                    <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row d-flex">
                        <div class="col">
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- closing registration area -->
<?php
require("./footer.php");
?>