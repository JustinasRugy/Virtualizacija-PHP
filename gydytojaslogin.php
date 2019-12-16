<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Gydytojo prisijungimas</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
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
        top: 50%;
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
        box-shadow: inset 0 -5px 45px rgb(243, 180, 255), 0 1px 1px rgba(255,255,255,0.2);
        -webkit-transition: box-shadow .5s ease;
        -moz-transition: box-shadow .5s ease;
        -o-transition: box-shadow .5s ease;
        -ms-transition: box-shadow .5s ease;
        transition: box-shadow .5s ease;
    }
    input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

</style>

<body>
<?php
require('db.php');
require ('functions.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
    $query = "SELECT id, username, email, admin  FROM `user` WHERE username='$username'
and password='".md5($password)."' AND admin ='0'";
    $result = mysqli_query($con,$query);


    $rows = mysqli_num_rows($result);
    if($rows==1){
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['admin'] = $row['admin'];
            $_SESSION['valid'] = true;
            $_SESSION['Vardas'] = $row['Vardas'];
            $_SESSION['Pavarde'] = $row['Pavarde'];
            $_SESSION['GydytojoTipas'] = $row['GydytojoTipas'];
            $_SESSION['Pacientu_kiekis'] = $row['Pacientu_kiekis'];
            $_SESSION['id'] = $row['id'];
            break;}
        header("Location: meniu.php");
    }else{
        echo "<div class='form'>
<h3><center>Jūsų prisijungimo vardas arba slaptažodis nėra teisingi.</center></h3>
<br/><center>Spauskite čia norėdami pakartoti <a href='gydytojaslogin.php'>Prisijungimą</a></center></div>";
    }
}else{
    ?>
    <div class="login">
        <h1>Gydytojo prisijungimas</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Slapyvardis" required="required" />
            <input type="password" name="password" placeholder="Slaptažodis" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Prisijungti</button>
            <p>Norite prisiregistruoti?  <a href='registrationpagedoctor.php'>Registruokites čia!</a></p>
        </form>
    </div>
<?php } ?>
</body>
</html>