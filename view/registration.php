<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            background-image: url(view/loterij.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
input {
    width: 400px;
    height: 40px;
    
  
}

form {
    text-align: center;

}

.div1 {
    background-color: white;
    width: 55%;
    height: 400px;
    margin: 100px 0px 0px 0px;
    padding: 100px 0px 0px 0px;
}
input[type=submit] {
    background-color: blue;
    border-radius: 6px;
    color: white;
}
a {
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="div1">
        <form action="../secure/config.php" method="post">
            <input type="text" name="name" id="" placeholder="username" required>
            <br>
            <br>
            <input type="text" name="Firstname" id="" placeholder="Firstname" required>
            <br>
            <br>
            <input type="text" name="Lastname" id="" placeholder="Lastname" required>
            <br>
            <br>
            <input type="password" name="password" id="" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" name="submit" id="" value="Register">
        </form>
    <br>
    <a href="form.php">Login</a>
</div>
</body>
</html>
</body>
</html>