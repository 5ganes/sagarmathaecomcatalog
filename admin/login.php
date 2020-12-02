<?php
    require '../db/conn.php';
    
    if(isset($_SESSION['sessUserId'])){
        header('Location:index.php');
    }

    require 'classes/UserModel.php';
    $userObject = new UserModel();
    if(isset($_POST['login'])){
        $error = '';
        $user = $userObject->getByUsername($pdo, $_POST['username']);

        if($user->rowCount() == 1){
            $user = $user->fetch();
            if(password_verify($_POST['password'], $user['password'])){
                $_SESSION['sessUserId'] = $user['id'];
                header('Location:index.php');
            }
            else{
                $error = 'Invalid Credentials / password';
            }
        }
        else {
            $error = 'Invalid Credentials / Username';
        }
        echo $error;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/login.css" type="text/css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <header>
        Online Catalog
    </header>
    <section>
        <h3 style="text-align: center;">Login Here</h3>
        <div class="login">
            <form action="" method="post">
                <div>
                    <input class="text" type="text" name="username" placeholder="Username">
                </div>
                <div>
                    <input class="text" type="password" name="password" placeholder="Password">
                </div>
                <input class="text" type="submit" name="login" value="Login">
            </form>
        </div>
    </section>
    <footer>
        Copyright
    </footer>
</body>
</html>