<?php

    if(isset($_GET["id"])) {

        $item = "id";
        $value = $_GET["id"];

        $user = FormsController::selectRegistersCtr($item, $value);
    }

?>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="POST">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $user["name"]; ?>" placeholder="Write your user name" id="name" name="updateName">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" value="<?php echo $user["email"]; ?>" placeholder="Write your email" id="email" name="updateEmail">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="updatePassword">
                <input type="hidden" name="currentPassword" value="<?php echo $user["password"]; ?>" />
                <input type="hidden" name="userId" value="<?php echo $user["id"]; ?>" />
            </div>
        </div>

        <?php
        
        $update = FormsController::updateRegisterCtr();

        if($update == "ok") {
            echo '<script>
                    if(window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
              </script>';
            echo '<div class="alert alert-success">The user has been updated</div>
                  
                  <script>
                      setTimeout(function(){
                        window.location = "index.php?page=beginning";
                      }, 3000);
                  </script>';
        }
        
        ?>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>