<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .main {
            background: linear-gradient(to bottom, #a9def9, #c77dff);
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .search img {
            width: 20px;
        }
        #humidity img {
            width: 40px;
        }
        .temperature h1, p {
            margin: 10px 0;
            text-align: center;
        }
        .input-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        #city {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            width: 70%;
            font-size: 16px;
            background-color: transparent;
            box-shadow: 0px 0px 10px white;
        }
        .search {
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
        .search img {
            width: 24px;
        }
        #city_name{
            font-size: 24px;
        }
        .sun img{
            width: 60px;
            margin-left: 38%;
        }
        .humidity{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .humidity img{
            width: 40px;
        }
        .humidityimg{
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .wind{
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="temperature">

            <div class="input-container">
                <input type="text" id="city" placeholder="Enter City">
                <button class="search"><img src="search.png" alt="Search"></button>
            </div>
            <div class="sun"><img src="cloudy.png"></div>
            <div id="degree"><h1>30°C</h1></div>
            <div id="city_name"><p>New Delhi</p></div>
            <br><br>
            <div class="humidity">
                <div class="humidityimg">
                    <img src="humidity.png">
                    <p>60%</p>
                </div>

                <div class="wind">
                    <img src="wind.png">
                    <p>15km/h</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
