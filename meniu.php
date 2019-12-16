<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");


else {
    ?>
    <html>
        <head>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <meta charset="UTF-8">
            <title>Menu</title>
            <style>

                body {
                    background-color: rgba(168, 194, 197, 0.98);
                    margin: 50px 60px 0 50px;
                    background-repeat: no-repeat;
                    border-radius: 25px;
                }
                .footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: royalblue;
                    color: white;
                    text-align: center;

                }
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                }
                li {
                    display: inline;
                    background-color: rgba(144, 156, 249, 0.98);
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
                    background-color: rgba(144, 156, 249, 0.98);
                    margin: 0px 0px 0 1000px;
                }
            </style>
        </head>
        <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="meniu.php">Pagrindinis</a></li>
                <li class="nav-item"><a class="nav-link" href="doctorpacienttable.php">Pacientų registracijos</a></li>
                <li class="nav-item"><a class="nav-link" href="auth.php">Atsijungti</a></li>
            </ul>
			</nav>
        </body>
        <div class="footer">
            <p>2019</p>
        </div>
    </html>
<?php } ?>