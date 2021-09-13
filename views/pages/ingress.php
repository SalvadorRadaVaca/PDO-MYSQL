<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="POST">

        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" placeholder="Write your email" id="email" name="ingressEmail">
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
                <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="ingressPassword">
            </div>
        </div>

        <?php

            $ingress = new FormsController();
            $ingress -> ingressCtr(); 

        ?>

        <button type="submit" class="btn btn-primary">Enter</button>

    </form>

</div>