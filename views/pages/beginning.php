<?php

    if(!isset($_SESSION["validateIngress"])) {

        echo '<script> window.location = "index.php?page=ingress"; </script>';
        return;
    } else {

        if($_SESSION["validateIngress"] != "ok") {
            echo '<script> window.location = "index.php?page=ingress"; </script>';
            return;
        }
    }

    $users = FormsController::selectRegistersCtr(null, null);

?>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $key => $value): ?>
            <tr>
                <td><?php echo ($key + 1); ?></td>
                <td><?php echo $value["name"]; ?></td>
                <td><?php echo $value["email"]; ?></td>
                <td><?php echo $value["datee"]; ?></td>
                <td>
                    <div class="btn-group">
                        <div class="px-1">
                            <a href="index.php?page=edit&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <form method="post">
                            <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegister" />
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            <?php

                                $delete = new FormsController();
                                $delete -> deleteRegisterCtr();

                            ?>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>