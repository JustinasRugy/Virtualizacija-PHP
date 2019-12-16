<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>

        body {
            background-color: rgb(255, 178, 253);
        }
        footer {
            text-align: center;
            background-color: #adc1e1;
            color: #000000;
            padding: 50px;

        }
        a{
            font-size: 15px;
        }

        .button-two{
            cursor: pointer;
            font-size:24px;
            margin: 50px 10px 40px 20px;

        }

        .button-two {
            border-radius: 4px;
            background-color: #a8afd3;
            border: none;
            width: 200px;
            transition: all 0.5s;
            float: right;
        }


        .button-two span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button-two span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button-two:hover span {
            padding-right: 25px;
        }

        .button-two:hover span:after {
            opacity: 1;
            right: 0;
        }
        .im{
            background-image: url("https://cdn.wallpapersafari.com/25/85/bREnu7.jpg");
            width: 100%;
            height: 75%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        h1{
            font-size: 50px;
        }
        p{
            color: black;
            font-size: 80px;
            position: absolute;
            top: 250px;
            left: 130px;
        }
        q{
            color: black;
            font-size: 10px;
            position: absolute;
            top: 250px;
            left: 130px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline;
            background-color: rgba(223, 204, 249, 0.98);
            margin: 0px 0px 0 10px;
        }
        li span{
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        li2
        {
            text-color: black;
            display: inline;
            background-color: rgba(246, 134, 249, 0.98);
            margin: 0px 0px 0 1000px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <ul class="navbar-nav mr-auto">
        <h1>Ligonine</h1>
    </ul>
    <button onclick="window.location.href = 'mainpage.php';" class="button-two"><span>Prisijungti</span></button>

</nav>
<main>
    <div class = "im">
        <p>Ligonine</p
    </div>
</main>
<footer>
    <a>&copy ligoninė</a>
</footer>
</body>
</html>

