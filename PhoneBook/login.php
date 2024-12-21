<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ashfak</title>
    <style>
        .main{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #email{
            margin-left: 39px;
        }
        #password{
            margin-left: 17px;
        }
        button{
            margin-top: 40px;
            margin-left: 100px;

        }
    </style>
</head>
<body>
<div class="main">
    <form action="login_auth.php" method="POST">
        <div class="ip">
            Email : <input type="email" name="email" id="email" required><br>
        </div>
        <div class="ip">
            Password : <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="submit" >SUBMIT</button><br>
    </form>
</div>
</body>
</html>