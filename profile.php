<?php
session_start();

if (isset($_POST['email'])) {
    require "connexion.php";
    // import variables here
    $req = $db->prepare("UPDATE `users` SET `email`=:email WHERE `id`= $id");
    $req->execute(['email'=>$email]);
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto ">
                <form action="register.php" method="post">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Update Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="" readonly >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" value="" class="form-control" placeholder="name@example.com">
                            </div>
                            
                           
                            <div class="text-center">
                                <button type="submit"  class="btn btn-secondary mb-3">register</button>
                            </div>

                        </div>
                        <?php if (!empty($msg))
                            echo "<div class='alert alert-danger'>$msg </div>";
                        ?>

                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>