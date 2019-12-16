<html>
    <head>
        <script src="jquery3_4_1.min.js.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>PSI</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic);

            body {
                font-family: "Open Sans";
                margin: 15px 0 0 0 ;
                text-align: center;
            }

            button{
                color:#fff;
                text-align: center;
                padding: 20px;
            }
            .header {
                text-align: center;
                width: 100%;
                height: 80px;
                display: block;
                background-color: #b5bfff;
            }
            a{
                margin: 50px 0 0 0;
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
            .Absolute-Center {
                display: flex; // make us of Flexbox
            align-items: center; // does vertically center the desired content
            justify-content: center; // horizontally centers single line items
            text-align: center; // optional, but helps horizontally center text that breaks into multiple lines
            }

        </style>
    </head>

    <div>
        <div class="header">
            <font color ="#191970" size ="15"<h1 ><b>Ligoninė</b></h1></div></font>
    </div>
    <body>
    <main><font color ="black"<a><b>Prisijunkite pasirinkdami mygtuką:</b></a></div></font>
    </main>

    <button onclick="window.location.href = 'gydytojaslogin.php';" class="button-two"><span>Gydytojas</span></button>
    <font color ="black"<a><b>arba </b></a></div></font>
    <button onclick="window.location.href = 'clientlogin.php';" class="button-two"><span>Pacientas</span></button>

    </body>
</html>
