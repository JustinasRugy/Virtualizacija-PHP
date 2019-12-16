<html>
<head>
    <script src="jquery3_4_1.min.js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PSI</title>
    <style>
        * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

        html { width: 100%; height:100%; overflow:hidden; }

        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
            background: #91b6f9;
            background: -moz-radial-gradient(0% 100%, , rgba(225, 228, 230, 0.4) 10%, rgba(68, 106, 217, 0.78) 40%),-moz-linear-gradient(top, rgba(20, 35, 225, 0.31) 0%, rgba(92, 106, 146, 0.6) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, , rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(122, 123, 159, 0.54) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, , rgba(115, 109, 188, 0.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, , rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top, rgba(211, 164, 219, 0.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, , rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='909CF9',GradientType=1 );
        }
        .login {
            position: absolute;
            top: 40%;
            left: 50%;
            margin: -150px 0 0 -150px;
            width:300px;
            height:300px;
        }
        .login h1 { color: #fff; text-shadow: 0 0 10px rgba(171, 151, 189, 0.44); letter-spacing:1px; text-align:center; }
        p{
            margin: 20px 0 0 0 ;
            font-size: 16px;
            color: black;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            background: rgba(156, 155, 78, 0.68);
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 4px;
            box-shadow: inset 0 -5px 45px rgb(255, 204, 243), 0 1px 1px rgba(255,255,255,0.2);
            -webkit-transition: box-shadow .5s ease;
            -moz-transition: box-shadow .5s ease;
            -o-transition: box-shadow .5s ease;
            -ms-transition: box-shadow .5s ease;
            transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>
</head>
<body>
<?php
require('db.php');
require ('functions.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $company = stripslashes($_REQUEST['Vardas']);
    $company = mysqli_real_escape_string($con, $company);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $trn_date = date("trn_date");
    $query = "INSERT into `users` (username, password, email, trn_date, company_name, active, admin, driver)
                        VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date', '$company', TRUE, FALSE, FALSE )";
    $result = mysqli_query($con, $query);
    if ($result) {
        //  sendEmail('bp2@bcline.eu', 'RailCalc new Calculation'.$pol.' '.$from.' - '.$pod.' '.$to.' '.$kg.'kg '.$cbm.'cbm' , $resultStr);
        if(sendEmail($email, 'New Account Request Digital Enterprice', 'Dear '.$username.',<br><br> Thank you for your request. Your account will be approved in several minutes.<br><br>Thank you for using our service,<br>Digital Enterprise.'));
        echo "<div class='form'>
                        <h3><center>You are registered successfully.</center></h3>
                        <br/><center>You will be notified by email!</a></center>
                        <br/><center>Click here to <a href='login.php' >Login</a></center></div>";
    } else {
        echo 'USERNAME or EMAIL already Taken!';
    }
} else {
?>
<div style="text-align: center; "class="login">

    <h1>Registracija</h1>
    <form name="registration" action="" method="post" class="px-4 py-3">
        <div class="form-group">
            <input type="text" name="username" placeholder="Vartotojo vardas" required /><br>
        </div>
        <div class="form-group">
            <input type="text" name="Vardas" placeholder="Vardas" required /><br>
        </div>
        <div class="form-group">
            <input type="text" name="Pavarde" placeholder="Pavardė" required /><br>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Slaptažodis" required /><br>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Registruotis" class="btn btn-primary"/>
        </div>
    </form>
    <div class='form'>
        <br/>Spauskite čia norėdami : <a href='index.php' >prisijungti</a>

        <?php } ?>

</body>
</html>
