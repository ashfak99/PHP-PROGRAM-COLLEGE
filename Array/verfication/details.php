<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        .main{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .ip{
            margin-top: 30px;
        }
        button{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action="verification.php" method="POST" >
            <div class="ip">
                <label for="name">Name : </label>
                <input type="text" id="name" name="name" placeholder="Enter your name"><br>
            </div>
            <div class="ip">
                <label for="age">Age : </label>
                <input type="text" name="age" id="age" placeholder="Enter your age"><br>
            </div>
            <div class="ip">
                <label for="marital">Marital : </label>
                <input type="radio" name="marital" id="marital" value="married"> Married 
                <input type="radio" name="marital" id="marital" value="unmarried"> Unmarried <br>
            </div>
            <div class="ip">
                <label for="city">City : </label>
                <select name="city" id="city">
                    <option value="default">Default</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Siwan">Siwan</option>
                    <option value="Patna">Patna</option>
                </select><br>
            </div>
            <div class="ip">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" placeholder="Enter your email"><br>
            </div>
            <div class="ip">
                <label for="phone">Phone : </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone"><br>
            </div>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>