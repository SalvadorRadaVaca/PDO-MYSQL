<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="POST">

        <div class="form-group">
            <label for="name">Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Write your user name" id="name" name="registerName">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" placeholder="Write your email" id="email" name="registerEmail">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="registerPassword">
            </div>
        </div>

        <?php

            /*========================================
            HOW TO INSTANTIATE A NON-STATIC METHOD
            ========================================*/

            // $register = new FormsController();
            // $register -> ctrRegister();

            /*========================================
            HOW TO INSTANTIATE A STATIC METHOD
            ========================================*/

            $register = FormsController::registerCtr();

            if($register == "ok") {
                echo '<script>
                        if(window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                      </script>';
                echo '<div class="alert alert-success">The user has been registered</div>';
            }

        ?>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>