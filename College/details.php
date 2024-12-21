<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details | Ashfak</title>
</head>
<body>
    <div class="container">
        <form action="authentication.php" method="POST">
            <div class="ip">
                Name: <input type="text" name="name" id="name"><br>
            </div>
            <div class="ip">
                Age: <input type="number" name="age" id="age"><br>
            </div>
            <div class="ip">
                Martial Status:<br>
               Married <input type="radio" name="martial" value="married" id="mard1">
               Unmarried <input type="radio" name="martial" value="unmarried" id="mard2"><br>
            </div>
            <div class="ip">
                Select city:
                <select name="city" id="city">
                    <option >default</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Siwan">Siwan</option>
                    <option value="Patna">Patna</option>
                    <option value="Mumbai">Mumbai</option>
                </select><br>
            </div>
            <div class="ip">
                Phone Number: <input type="number" name="phone" maxlength="10" minlength="10" id="phone"><br>
            </div>
            <div class="ip">
                Email: <input type="email" name="email" id="email"><br>
            </div>
            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>
</body>
</html>