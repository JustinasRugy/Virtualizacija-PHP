<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

if ($_SESSION['admin'] == false)
    header("Location: a_meniu.php");
else {
    ?>
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title>Nauja registracija</title>

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

            .zui-table {
                border: solid 1px #DDEEEE;
                border-collapse: collapse;
                border-spacing: 0;
                font: normal 13px Arial, sans-serif;
            }
            .zui-table thead th {
                background-color: black;
                border: solid 1px #DDEEEE;
                color: #007bff;
                padding: 10px;
                text-align: left;
                text-shadow: 1px 1px 1px #fff;
            }
            .zui-table tbody td {
                border: solid 1px #DDEEEE;
                color: #333;
                padding: 10px;
                text-shadow: 1px 1px 1px #fff;
            }
        .hide{
            display:none;
        }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="a_meniu.php">Pagrindinis</a></li>
            <li class="nav-item"><a class="nav-link" href="pacientdoctortable.php">Nauja registracija</a></li>
            <li class="nav-item"><a class="nav-link" href="pacientouzsirasymai.php">Užsirašymai</a></li>
            <li class="nav-item"><a class="nav-link" href="auth.php">Atsijungti</a></li>
        </ul>
    </nav>
    <br><br>
    <div style="text-align: center;">
        <table border='1' align="center" class="zui-table">
            <thead>
            <tr>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Tipas</th>

                <th>Data</th>
                <th>Užsirašymai
                </th>

            </tr>
            </thead>
            <tbody>
            <?php
            require ('db.php');
            $query = "SELECT GydytojoTipas, Vardas, Pavarde, id, Pacientu_kiekis FROM `user` WHERE gydytojas_pacientas = '1'";
            $pacientquery = "SELECT  Vardas, Pavarde FROM `user` WHERE id =".$_SESSION['id'];
            $result = mysqli_query($con, $query);
            $pacientresult = mysqli_query($con, $pacientquery);
            $pacientrow = $row = mysqli_fetch_assoc($pacientresult);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Vardas'] . "</td>";
                echo "<td>" . $row['Pavarde'] . "</td>";
                echo "<td>" . $row['GydytojoTipas'] . "</td>";
                echo "<td> <form action=\"/action_page.php\">
  Vizito data: <input type=\"date\" name=\"vizitas\" required>
  
</form></td>";

                echo "<td><button class=\"submit-btn\" onclick=\"window.location.href = 'confirm_order.php?id=".$row['id']."&Vardas=".$pacientrow['Vardas']."&Pavarde=".$pacientrow['Pavarde']."&DaktaroPavarde=".$row['Pavarde']."&DaktaroVardas=".$row['Vardas']."&DaktaroTipas=".$row['GydytojoTipas']."';\" class=\"button-two\"><span>Užsirašyti</span></button></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    </body>
    </html>

<?php } ?>

