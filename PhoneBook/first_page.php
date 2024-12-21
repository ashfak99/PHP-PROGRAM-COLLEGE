<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Ashfak</title>
    <style>
        /* Header Part*/ 
        .header{
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }
        .login{
            display: flex;
            align-content: end;
        }

        /* Home Part*/
        .home{
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .right{
            width: 40%;
        }
        .left{
            width: 40%;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Phonebook</h1>
        <h3 class="login">Login</h3>
    </header>
    <section class="home" id="home">
        <div class="right" id="right">
            <h3>Add New Contact:</h3>
            <form action="">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name"><br>
                <label for="phone">Phone :</label>
                <input type="number" name="phone" id="phone"><br>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email"><br>
                <button type="submit" name="submit" >SUBMIT</button>
            </form>
        </div>
        <div class="left" id="left">
            <h3>See Contact List:</h3>
        </div>
    </section>
</body>
</html>