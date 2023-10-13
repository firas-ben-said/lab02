<?php
session_start();
if (!isset($_SESSION['user']))
    header("location:/login.php");
// user role must be admin, chek for it!
if($_SESSION['user']['role']!="admin"){
    die("you are not allowed to access this page !");
}


require "../connexion.php";
$req = $db->prepare("SELECT * FROM `users`");
$req->execute();
$users = $req->fetchAll();


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
    <?php include "../header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>username</th>
                        <th>password</th>
                        <th>email</th>
                        <th>action</th>

                    </tr>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td></td>
                            <td>></td>
                            <td></td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="/admin/delete.php">delete</a>
                            </td>


                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>

    </div>
</body>

</html>
