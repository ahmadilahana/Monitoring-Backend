<?php
    session_start();
print_r($_SESSION['user']);
if (isset($_SESSION['user'])) {
    header("location: index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        width: 100%;
        height: 600px;
        margin: 0px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    div{
        display: flex;
        flex-direction: column;
        padding: 10px;
        text-align: center;
        height: 200px;
        width: 300px;
        border: 1px solid black;
        background-color: burlywood;
    }
    input{
        margin-bottom: 15px;
    }
</style>
<body>
<div>
    <h4>Login</h4>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" value="Masuk" id="">
    </form>
    <?php
        if (isset($_POST['login'])) {
            // echo "login";
            if (empty($_POST['user']) && empty($_POST['pass'])) {
                echo "<script>alert('Username dan Password kosong!')</script>";
            }elseif (empty($_POST['user']) || empty($_POST['pass'])) {
                echo "<script>alert('Username atau Password kosong!')</script>";
            }else{
                $user = [
                    "username" => $_POST['user'],
                    "password" => $_POST['pass']
                ];
                $_SESSION['user'] = $user;
                // print_r($user);
                header("location: index.php");

            }
        }
        
    ?>
</div>
</body>
</html>
<?php } ?>