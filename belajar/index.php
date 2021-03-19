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
        min-height: 500px;
        max-height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: cadetblue;
    }

    div {
        border: 2px solid black;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        text-align: center;
        background-color: white;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        border: 2px solid burlywood;
        border-radius: 4px;
        height: 30px;
        margin: 10px;
    }
</style>

<body>
    <div>
        <form action="login.php" method="post">
            <h3>Please Login</h3>
            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="">
            <button type="submit" name="login" value="login">Login</button>
        </form>
    </div>
</body>

</html>