<?php
session_start();
$msg = "";


if (isset($_POST['username']) && isset($_POST['password'])) {
    require "connexion.php";
    //import variables

    $req = $db->prepare("SELECT * FROM `users` where username =? AND password =?");
    $req->execute([$userName, $password]);
    $user = $req->fetch();
    //test user existance and manipulate session
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
                <form action="login.php" method="post">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="user name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-secondary mb-3">login</button>
                            </div>

                        </div>
                        <?php if (!empty($msg))
                            echo "<div class='alert alert-danger text-center'>$msg </div>";
                        ?>

                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>